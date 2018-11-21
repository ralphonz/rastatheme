<?php

namespace App;

/**
 * Add <body> classes
 */
add_filter('body_class', function (array $classes) {
    /** Add page slug if it doesn't exist */
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    /** Add class if sidebar is active */
    if (display_sidebar()) {
        $classes[] = 'sidebar-primary';
    }

    /** Clean up class names for custom templates */
    $classes = array_map(function ($class) {
        return preg_replace(['/-blade(-php)?$/', '/^page-template-views/'], '', $class);
    }, $classes);

    return array_filter($classes);
});

/**
 * Add "… Continued" to the excerpt
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

/**
 * Template Hierarchy should search for .blade.php files
 */
collect([
    'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'home',
    'frontpage', 'page', 'paged', 'search', 'single', 'singular', 'attachment'
])->map(function ($type) {
    add_filter("{$type}_template_hierarchy", __NAMESPACE__.'\\filter_templates');
});

/**
 * Render page using Blade
 */
add_filter('template_include', function ($template) {
    $data = collect(get_body_class())->reduce(function ($data, $class) use ($template) {
        return apply_filters("sage/template/{$class}/data", $data, $template);
    }, []);
    if ($template) {
        echo template($template, $data);
        return get_stylesheet_directory().'/index.php';
    }
    return $template;
}, PHP_INT_MAX);

/**
 * Render comments.blade.php
 */
add_filter('comments_template', function ($comments_template) {
    $comments_template = str_replace(
        [get_stylesheet_directory(), get_template_directory()],
        '',
        $comments_template
    );

    $data = collect(get_body_class())->reduce(function ($data, $class) use ($comments_template) {
        return apply_filters("sage/template/{$class}/data", $data, $comments_template);
    }, []);

    $theme_template = locate_template(["views/{$comments_template}", $comments_template]);

    if ($theme_template) {
        echo template($theme_template, $data);
        return get_stylesheet_directory().'/index.php';
    }

    return $comments_template;
}, 100);

add_filter('sage/display_sidebar', function($display){
    static $display;

    isset($display) || $display = in_array(true, [
        //The sidebar will be displayed if any of the following return true
        is_shop(),
        is_woocommerce(),
        is_page_template('views/template-departments.blade.php'),
    ]);

    return $display;
});

/**
 * Change the markup of the add to cart button to add svg icon
 */
add_filter('woocommerce_loop_add_to_cart_link', function($html){
    $svg = file_get_contents(get_template_directory()."/assets/images/add_to_cart.svg");
    $html = str_replace("</a>",$svg."</a>",$html);
    return $html;
});

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', function() {
    return 3; // 3 products per row
});

/**
 * Stop those pesky Yoast SEO columns from messing up the admin tables!!
 */

add_filter ( 'manage_edit-product_columns', function( $columns ) {
   unset( $columns['wpseo-score'] );
   unset( $columns['wpseo-title'] );
   unset( $columns['wpseo-metadesc'] );
   unset( $columns['wpseo-focuskw'] );
   unset( $columns['wpseo-score-readability'] );
   unset( $columns['wpseo-links']);
   return $columns;
});

/*
 * Make sure the product is the same price everythwere regardless of price
 * @url https://github.com/woocommerce/woocommerce/wiki/How-Taxes-Work-in-WooCommerce#prices-including-tax---experimental-behavior
 */
 add_filter( 'woocommerce_adjust_non_base_location_prices', '__return_false' );
