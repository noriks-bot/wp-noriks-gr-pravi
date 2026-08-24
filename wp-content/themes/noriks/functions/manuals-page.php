<?php
/**
 * Podstranica s PDF uputama za NORIKS proizvode.
 *
 * Stranica se kreira jednom iz teme (slug: odigies) i koristi predlozak page-upute.php.
 * PDF-ovi stoje lokalno u temi, u mapi /manuals/.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function noriks_manuals_list() {
    return array(
        array(
            'file'  => 'noriks-majice.pdf',
            'sku'   => 'NORIKS-ALL-BLACK-6-PACK',
            'title' => 'Μπλουζάκια NORIKS',
            'sub'   => 'Βαμβακερά μπλουζάκια — επιλογή μεγέθους, χρήση και φροντίδα.',
        ),
        array(
            'file'  => 'noriks-bokserice.pdf',
            'sku'   => 'NORIKS-BOX-BLACK-5-PACK',
            'title' => 'Μπόξερ NORIKS',
            'sub'   => 'Μπόξερ από modal — διαστάσεις, χρήση και φροντίδα.',
        ),
        array(
            'file'  => 'noriks-kompresijske-carape.pdf',
            'sku'   => array( 'NORIKS-KOMZIPS', 'NORIKS-BOXERS-ORTO-4' ),
            'title' => 'Κάλτσες συμπίεσης NORIKS με φερμουάρ',
            'sub'   => 'Διαβαθμισμένη συμπίεση 15–20 mmHg με πλαϊνό φερμουάρ.',
        ),
        array(
            'file'  => 'noriks-kneefix.pdf',
            'sku'   => 'NORIKS-KNEEFIX',
            'title' => 'NORIKS KneeFix — ορθοπεδικός νάρθηκας γόνατος',
            'sub'   => 'Ρυθμιζόμενη συμπίεση, πλαϊνοί σταθεροποιητές και μαξιλαράκι γέλης για την επιγονατίδα.',
        ),
        array(
            'file'  => 'noriks-bunion-fix.pdf',
            'sku'   => 'NORIKS-BUNION',
            'title' => 'NORIKS Bunion Fix — διορθωτής κότσιου',
            'sub'   => 'Σταδιακή επαναφορά του μεγάλου δακτύλου με 30 λεπτά έως 3 ώρες την ημέρα.',
        ),
        array(
            'file'  => 'noriks-ortopas.pdf',
            'sku'   => 'NORIKS-ORTOPAS',
            'title' => 'Ορθοπεδική ζώνη μέσης NORIKS',
            'sub'   => 'Στοχευμένη συμπίεση για την οσφυϊκή περιοχή και σταθερότητα στις καθημερινές κινήσεις.',
        ),
        array(
            'file'  => 'noriks-fisiorest.pdf',
            'sku'   => 'NORIKS-FISIOREST',
            'title' => 'NORIKS FisioRest — συσκευή αυχένα',
            'sub'   => 'Έλξη, θερμότητα και μασάζ με δόνηση σε συνεδρία 15 έως 30 λεπτών.',
        ),
        array(
            'file'  => 'noriks-fit-kompresijska-majica.pdf',
            'sku'   => 'NORIKS-KOMPSFIT',
            'title' => 'NORIKS FIT — μπλούζα συμπίεσης',
            'sub'   => 'Εφαρμοστή συμπίεση που λειαίνει τη σιλουέτα και στηρίζει την όρθια στάση.',
        ),
        array(
            'file'  => 'noriks-leakbox.pdf',
            'sku'   => 'NORIKS-LEAKBOX',
            'title' => 'NORIKS PureDry — πλενόμενα μπόξερ για ακράτεια',
            'sub'   => 'Έως 300 ml απορροφητικότητα, επταστρωματικός πυρήνας και αδιάβροχη μεμβράνη.',
        ),
        array(
            'file'  => 'noriks-ergosit.pdf',
            'sku'   => 'NORIKS-ERGOSIT',
            'title' => 'NORIKS ErgoSit — ορθοπεδικό μαξιλάρι καθίσματος',
            'sub'   => 'Εγκοπή για τον κόκκυγα και αφρός μνήμης υψηλής πυκνότητας για πολύωρο κάθισμα.',
        ),
        array(
            'file'  => 'noriks-kidsnest.pdf',
            'sku'   => 'NORIKS-KIDSNEST',
            'title' => 'NORIKS KidsNest — παιδικό ορθοπεδικό μαξιλάρι',
            'sub'   => 'Τρία μεγέθη που μεγαλώνουν μαζί με το παιδί και στηρίζουν τη σωστή θέση του κεφαλιού.',
        ),
    );
}

/** Slika i poveznica proizvoda po SKU-u — uvijek aktualne, bez rucnog upisa URL-a. */
function noriks_manual_product( $sku ) {
    $out = array( 'img' => '', 'url' => '' );
    if ( ! function_exists( 'wc_get_product_id_by_sku' ) ) { return $out; }

    $pid = 0;
    foreach ( (array) $sku as $candidate ) {
        $pid = wc_get_product_id_by_sku( $candidate );
        if ( $pid ) { break; }
    }
    if ( ! $pid ) { return $out; }

    $out['url'] = get_permalink( $pid );
    $out['img'] = get_the_post_thumbnail_url( $pid, 'woocommerce_thumbnail' );

    if ( ! $out['img'] && function_exists( 'wc_get_product' ) ) {
        $product = wc_get_product( $pid );
        if ( $product ) {
            $gallery = $product->get_gallery_image_ids();
            if ( ! empty( $gallery[0] ) ) {
                $out['img'] = wp_get_attachment_image_url( $gallery[0], 'woocommerce_thumbnail' );
            }
        }
    }
    return $out;
}

/** Jednokratno kreira pravu WP stranicu i dodijeli joj predlozak page-upute.php. */
function noriks_manuals_ensure_page() {
    $opt = 'noriks_manuals_page_id';
    $id  = (int) get_option( $opt );
    if ( $id && get_post_status( $id ) ) { return; }

    $existing = get_page_by_path( 'odigies' );
    if ( $existing ) {
        update_post_meta( $existing->ID, '_wp_page_template', 'page-upute.php' );
        update_option( $opt, $existing->ID );
        return;
    }

    $id = wp_insert_post( array(
        'post_title'   => 'Οδηγίες χρήσης',
        'post_name'    => 'odigies',
        'post_type'    => 'page',
        'post_status'  => 'publish',
        'post_content' => '',
        'meta_input'   => array( '_wp_page_template' => 'page-upute.php' ),
    ) );
    if ( $id && ! is_wp_error( $id ) ) { update_option( $opt, $id ); }
}
add_action( 'init', 'noriks_manuals_ensure_page' );
