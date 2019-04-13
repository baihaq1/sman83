<?php
/**
 * gute Theme Customizer
 *
 * @package gute
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gute_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'gute_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'gute_customize_partial_blogdescription',
		) );
	}

	// Home image text
     $wp_customize->add_setting('gute_header_img_show', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default'       =>  0,
        'sanitize_callback' => 'absint',
         'transport' => 'refresh',

    ));
    $wp_customize->add_control('gute_header_img_show_control', array(
        'label'      => __('Display header banner', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'gute_header_img_show',
        'type'       => 'checkbox',
    ));
     $wp_customize->add_setting('home_text', array(
     	'default' =>  '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('home_text_control', array(
        'label'      => __('Header image home title', 'gute'),
        'description'     => __('Enter your home image title here. The title only show in home page', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'home_text',
        'type'       => 'textarea',
        'active_callback' => 'gute_banner_show_hide',

    ));

     $wp_customize->add_setting('home_subtext', array(
     	'default' =>  '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('home_subtext_control', array(
        'label'      => __('Header image home sub-title', 'gute'),
        'description'     => __('Enter your home image sub-title here. The sub-title only show in home page', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'home_subtext',
        'type'       => 'textarea',
        'active_callback' => 'gute_banner_show_hide',
    ));
     $wp_customize->add_setting('animation_text_one', array(
     	'default' =>  '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('animation_text_one_control', array(
        'label'      => __('Header animation text one', 'gute'),
        'description'     => __('Enter your home image sub-title animation text one here.', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'animation_text_one',
        'type'       => 'text',
        'active_callback' => 'gute_banner_show_hide',
    ));
     $wp_customize->add_setting('animation_text_two', array(
     	'default' =>  '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('animation_text_two_control', array(
        'label'      => __('Header animation text two', 'gute'),
        'description'     => __('Enter your home image sub-title animation text two here.', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'animation_text_two',
        'type'       => 'text',
        'active_callback' => 'gute_banner_show_hide',
    ));
     $wp_customize->add_setting('animation_text_three', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('animation_text_three_control', array(
        'label'      => __('Header animation text three', 'gute'),
        'description'     => __('Enter your home image sub-title animation text three here.', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'animation_text_three',
        'type'       => 'text',
        'active_callback' => 'gute_banner_show_hide',
    ));
     $wp_customize->add_setting('btn_text_one', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('btn_text_one_control', array(
        'label'      => __('Button one text', 'gute'),
        'description'     => __('Enter button one text.', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'btn_text_one',
        'type'       => 'text',
        'active_callback' => 'gute_banner_show_hide',
    ));

     $wp_customize->add_setting('btn_url_one', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('btn_url_one_control', array(
        'label'      => __('Button one url', 'gute'),
        'description'     => __('Enter button one url.', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'btn_url_one',
        'type'       => 'text',
        'active_callback' => 'gute_banner_show_hide',
    ));
     $wp_customize->add_setting('btn_text_two', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('btn_text_two_control', array(
        'label'      => __('Button two text', 'gute'),
        'description'     => __('Enter button two text.', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'btn_text_two',
        'type'       => 'text',
        'active_callback' => 'gute_banner_show_hide',
    ));

     $wp_customize->add_setting('btn_url_two', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('btn_url_two_control', array(
        'label'      => __('Button two url', 'gute'),
        'description'     => __('Enter button two url.', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'btn_url_two',
        'type'       => 'text',
        'active_callback' => 'gute_banner_show_hide',
    ));

    // Add gute side menu section
    $wp_customize->add_section('gute_post_section', array(
        'title' => __('gute post', 'gute'),
        'capability'     => 'edit_theme_options',
        'description'     => __('gute post settings section.', 'gute'),

    ));

     $wp_customize->add_setting('gute_post_view', array(
        'default'       => 'list',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'gute_sanitize_post_grid',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('gute_post_control', array(
        'label'      => __('Post view style', 'gute'),
        'section'    => 'gute_post_section',
        'settings'   => 'gute_post_view',
        'type'       => 'select',
        'choices'    => array(
            'grid' => __('Grid view', 'gute'),
            'list' => __('List view', 'gute'),
        ),
    ));


}
add_action( 'customize_register', 'gute_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function gute_customize_partial_blogname() {
	esc_html(bloginfo( 'name' ));
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function gute_customize_partial_blogdescription() {
	esc_html(bloginfo( 'description' ));
}

function gute_sanitize_post_grid($value){ 
    if(!in_array($value, array('grid','list'))){
        $value = 'list';
    }
    return $value;
}
function gute_banner_show_hide(){
    if (get_theme_mod('gute_header_img_show', 0) == 1) {
        return true;
    }else{
    return false;
    }

}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gute_customize_preview_js() {
	wp_enqueue_script( 'gute-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gute_customize_preview_js' );
