<?php
/**
 * Callboss (klicni center): opusceni vozicki in ciscenje.
 * GET  /wp-json/noriks/v1/abandoned-carts?key=...          -> zadnjih 500 opuscenih vozickov
 * POST /wp-json/noriks/v1/abandoned-carts/cleanup?key=...  -> oznaci vozicke z narocilom kot completed
 * 6. 11. 2026: prestavljeno iz functions.php v svojo datoteko (na GR je blok na zivo izginil, callboss je imel 0 leadov).
 */
if (!defined('ABSPATH')) exit;

if (!function_exists('noriks_callboss_kljuc_ok')) {
    function noriks_callboss_kljuc_ok($request) {
        return $request->get_param('key') === 'n0r1k5-c4rt-4cc355';
    }
}

if (!function_exists('noriks_get_abandoned_carts')) {
    function noriks_get_abandoned_carts($request) {
        global $wpdb;
        $table = $wpdb->prefix . 'cartflows_ca_cart_abandonment';

        $results = $wpdb->get_results("
            SELECT id, email, cart_contents, cart_total,
                   other_fields, order_status, time
            FROM $table
            WHERE order_status = 'abandoned'
            ORDER BY time DESC LIMIT 500
        ", ARRAY_A);

        foreach ($results as &$row) {
            $row['cart_contents'] = maybe_unserialize($row['cart_contents']);
            $row['other_fields'] = maybe_unserialize($row['other_fields']);
            // Normaliziran fb_campaign struct (campaign_id, ad_id, adset_id, fbclid, ...)
            if (function_exists('noriks_build_fb_campaign')) {
                $row['fb_campaign'] = noriks_build_fb_campaign($row['other_fields']);
            }
        }
        return new WP_REST_Response($results, 200);
    }
}

add_action('rest_api_init', function () {
    register_rest_route('noriks/v1', '/abandoned-carts', array(
        'methods'             => 'GET',
        'callback'            => 'noriks_get_abandoned_carts',
        'permission_callback' => 'noriks_callboss_kljuc_ok',
    ));

    // Bulk cleanup abandoned carts that have orders
    register_rest_route('noriks/v1', '/abandoned-carts/cleanup', array(
        'methods'             => 'POST',
        'callback'            => function ($req) {
            global $wpdb;
            $table = $wpdb->prefix . 'cartflows_ca_cart_abandonment';
            $body = json_decode($req->get_body(), true);
            $ids = array_map('intval', $body['ids'] ?? []);
            if (empty($ids)) return new WP_REST_Response(['error' => 'No IDs'], 400);
            $cleaned = 0;
            foreach ($ids as $id) {
                if ($wpdb->update($table, ['order_status' => 'completed'], ['id' => $id, 'order_status' => 'abandoned'])) $cleaned++;
            }
            return new WP_REST_Response(['cleaned' => $cleaned, 'total' => count($ids)], 200);
        },
        'permission_callback' => 'noriks_callboss_kljuc_ok',
    ));
});
