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
 * Remove the woocommerce image gallery
 * @since 1.0
 * @return string
 */
 // add_action('template_redirect', function(){
     // remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20, 0);
 // });

 /**
  * Add the woocommerce image gallery below the title
  * @since 1.0
  * @return string
  */
 // add_action('woocommerce_single_product_summary', 'woocommerce_show_product_images', 12);
