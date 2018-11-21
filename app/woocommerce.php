<?php
namespace App;

/**
 * Woocommerce theme support
 * @since 1.0
 * @return string
 */
add_action( 'after_setup_theme', function() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
});

/**
 * remove the woocommerce breadcrumb
 * @since 1.0
 * @return string
 */
add_action('template_redirect', function(){
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
});

/**
 * Add the woocommerce breadcrumb below the title
 * @since 1.0
 * @return string
 */
add_action('woocommerce_single_product_summary', 'woocommerce_breadcrumb', 11);

/**
 * @snippet       Add CSS to WooCommerce Emails
 * @since 1.1
 */
add_action( 'woocommerce_email_header', function() {
    ?><style>
        #template_header{
            background-color: #fff;
            -webkit-box-shadow:0 1px 0 0 #000,0 5px 0 0 #db1f29,0 6px 0 0 #000,0 10px 0 0 #f7cb1d,0 11px 0 0 #000,0 15px 0 0 #108421,0 16px 0 0 #000;
            box-shadow:0 1px 0 0 #000,0 5px 0 0 #db1f29,0 6px 0 0 #000,0 10px 0 0 #f7cb1d,0 11px 0 0 #000,0 15px 0 0 #108421,0 16px 0 0 #000;margin-bottom:16px
        }
        h1 {
            color: #000 !important;
            text-shadow: none;
            text-align: center;
        }
        <?php //include asset_path('styles/emails.css'); ?>
    </style><?php
});
