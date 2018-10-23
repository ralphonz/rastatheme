<?php
namespace App;

/**
 * Theme customizer
 * @since 1.0
 * @return string
 */

add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
    // Add a section for our soical network url settings
    $wp_customize->add_section( 'social_icons', [
        'title'      => __( 'Social Network URLs', 'rastatheme' ),
        'priority'   => 30,
    ]);
     //Add a setting for each social network
    $wp_customize->add_setting( 'facebook_url', [
        'url'   => 'https://facebook.com/',
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_setting( 'twitter_url', [
        'url'   => 'https://twitter.com/',
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_html',
    ]);
    $wp_customize->add_setting( 'google_url', [
        'url'   => 'https://google.com/',
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_setting( 'linkedin_url', [
        'url'   => 'https://linkedin.com/',
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_setting( 'pinterest_url', [
        'url'   => 'https://pinterest.com/',
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_setting( 'instagram_url', [
        'url'   => 'https://instagram.com/',
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    //Add all the input fields for social network urls
    $wp_customize->add_control( 'facebook_url_control', [
        'label'    => __( 'Facebook URL', 'rastatheme' ),
        'section'  => 'social_icons',
        'settings' => 'facebook_url',
        'type'     => 'url',
    ]);
    $wp_customize->add_control( 'twitter_url_control', [
        'label'    => __( 'Twitter Username', 'rastatheme' ),
        'section'  => 'social_icons',
        'settings' => 'twitter_url',
        'type'     => 'text',
    ]);
    $wp_customize->add_control( 'google_url_control', [
        'label'    => __( 'Google URL', 'rastatheme' ),
        'section'  => 'social_icons',
        'settings' => 'google_url',
        'type'     => 'url',
    ]);
    $wp_customize->add_control( 'linkedin_url_control', [
        'label'    => __( 'LinkedIn URL', 'rastatheme' ),
        'section'  => 'social_icons',
        'settings' => 'linkedin_url',
        'type'     => 'url',
    ]);
    $wp_customize->add_control( 'pinterest_url_control', [
        'label'    => __( 'Pinterest URL', 'rastatheme' ),
        'section'  => 'social_icons',
        'settings' => 'pinterest_url',
        'type'     => 'url',
    ]);
    $wp_customize->add_control( 'instagram_url_control', [
        'label'    => __( 'Instagram URL', 'rastatheme' ),
        'section'  => 'social_icons',
        'settings' => 'instagram_url',
        'type'     => 'url',
    ]);

    // Add a section for the contact info settings
    $wp_customize->add_section( 'contact_info', [
        'title'      => __( 'Contact Info', 'rastatheme' ),
        'priority'   => 30,
    ]);

    //Add a setting for the mail us icon url
    $wp_customize->add_setting( 'quick_contact_url', [
      'url'   => '',
      'transport' => 'postMessage',
      'type' => 'option',
      'sanitize_callback' => 'absint',
    ]);
    //Add a setting for the business address
    $wp_customize->add_setting( 'address', [
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_html',
    ]);

    //Add an input field for the address
    $wp_customize->add_control( 'address', [
        'label' => __( 'Address', 'rastatheme'),
        'section' => 'contact_info',
        'settings' => 'address',
        'type' => 'textarea',
    ]);

    //Add a setting for the phone numbers
    $wp_customize->add_setting( 'phone1', [
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_html',
    ]);
    $wp_customize->add_setting( 'phone2', [
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_html',
    ]);

    //Add all the input fields
    $wp_customize->add_control( 'phone1_control', [
        'label'    => __( 'Phone Number 1', 'rastatheme' ),
        'section'  => 'contact_info',
        'settings' => 'phone1',
        'type'     => 'text',
    ]);
    $wp_customize->add_control( 'phone2_control', [
        'label'    => __( 'Phone Number 2', 'rastatheme' ),
        'section'  => 'contact_info',
        'settings' => 'phone2',
        'type'     => 'text',
    ]);
    //Add a dropdown for the mail us icon
    $wp_customize->add_control( 'quick_contact_url_control',[
      'label'    => __( 'Quick Contact Button Link', 'blueleaf' ),
      'section'  => 'contact_info',
      'settings' => 'quick_contact_url',
      'type'     => 'dropdown-pages',
    ]);


});

/**
 * Customizer JS
 * @since 1.0
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});
?>
