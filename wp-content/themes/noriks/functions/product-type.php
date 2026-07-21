<?php
/**
 * ============================================================
 * NORIKS — Central product-type resolver (GR)
 * ------------------------------------------------------------
 * ONE place that decides which product categories map to which
 * "type". Everywhere in the theme use:
 *     noriks_is_type( 'bunion', $id )   // -> bool
 *     noriks_product_type( $id )        // -> string
 *
 * TYPE KEYS are identical across markets so shared templates work
 * unchanged; only the SLUG VALUES are Greek/Greeklish (+ universal
 * orto-* categories which exist in every market).
 * ============================================================
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'noriks_product_type_map' ) ) :

function noriks_product_type_map() : array {
    return array(
        // --- primary product types (order = resolution priority) ---
        'starter'   => array( 'paketo-ekkinisis', 'starter-pack', 'starter-paketa-gr', 'orto-starter', 'orto-starter-gr', 'orto-majica-bokserica' ),
        'majice'    => array( 'mplouzoakia', 'mplouzoakia-mavro', 't-shirts', 'majice', 'orto-majice', 'orto-majic' ),
        'bokserice' => array( 'mpoxerakia', 'mpoxer', 'boxers', 'boxerakia', 'bokserice', 'bokserice-sastavi-paket', 'orto-bokserice', 'orto-bokserice2', 'orto-boxer-gr', 'orto-boxer-gr2', 'orto-starter2' ),
        'carape'    => array( 'orto-kompresijske-carape', 'kaltses', 'kaltses-lefko', 'kaltses-mavro', 'socks', 'ponozky', 'zimske-carape' ),

        // --- sub-variants / special buckets ---
        // Compression socks: universal orto category 'orto-kompresijske-carape'
        // (identical in every market) + the GR front-facing socks category.
        'kompresijske-nogavice'   => array( 'orto-kompresijske-carape', 'kaltses', 'socks', 'ponozky' ),
        'ortopas'                 => array( 'orto-ortopas', 'ortopas' ),
        'bunion'                  => array( 'orto-bunion', 'bunion' ),
        'fisiorest'               => array( 'orto-fisiorest', 'fisiorest' ),
        'majice-bokserice-paketi' => array( 'sady', 'set', 'seta', 'bundles' ),
        'black-friday'            => array( 'black-friday' ),
        'orto'                    => array( 'orto' ),
    );
}

endif;

if ( ! function_exists( 'noriks_primary_types' ) ) :

function noriks_primary_types() : array {
    return array( 'starter', 'majice', 'bokserice', 'carape' );
}

endif;

if ( ! function_exists( 'noriks_resolve_product_id' ) ) :

function noriks_resolve_product_id( $product_id = null ) : int {
    if ( $product_id ) {
        return (int) $product_id;
    }
    if ( function_exists( 'is_product' ) && is_product() ) {
        return (int) get_queried_object_id();
    }
    return (int) get_the_ID();
}

endif;

if ( ! function_exists( 'noriks_is_type' ) ) :

function noriks_is_type( string $type, $product_id = null ) : bool {
    $map = noriks_product_type_map();
    if ( empty( $map[ $type ] ) ) {
        return false;
    }
    $product_id = noriks_resolve_product_id( $product_id );
    if ( ! $product_id ) {
        return false;
    }
    return has_term( $map[ $type ], 'product_cat', $product_id );
}

endif;

if ( ! function_exists( 'noriks_product_type' ) ) :

function noriks_product_type( $product_id = null ) : string {
    $product_id = noriks_resolve_product_id( $product_id );
    foreach ( noriks_primary_types() as $type ) {
        if ( noriks_is_type( $type, $product_id ) ) {
            return $type;
        }
    }
    return '';
}

endif;

if ( ! function_exists( 'noriks_is_black_friday' ) ) :

function noriks_is_black_friday( $product_id = null ) : bool {
    return noriks_is_type( 'black-friday', $product_id );
}

endif;

if ( ! function_exists( 'noriks_is_mixed_bundle' ) ) :

function noriks_is_mixed_bundle( $product_id = null ) : bool {
    return noriks_is_type( 'black-friday', $product_id )
        || noriks_is_type( 'majice-bokserice-paketi', $product_id )
        || noriks_is_type( 'starter', $product_id );
}

endif;
