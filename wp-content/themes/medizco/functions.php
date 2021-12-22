<?php

/**
 * theme's main functions and globally usable variables, contants etc edited by northeastwebdesigner.com . seo structured by easyseocheck.com indiqaanalytics.com
 * added: v1.0
 * textdomain: medizco, class: MEDIZCO, var: $medizco_, constants: MEDIZCO_, function: medizco_
 */

// shorthand contants
// ------------------------------------------------------------------------
define('MEDIZCO_THEME', 'Medizco Medical Health Dental Care Clinic WordPress Theme');
define('MEDIZCO_VERSION', '2.4');
define('MEDIZCO_MINWP_VERSION', '5.0');


// shorthand contants for theme assets url
// ------------------------------------------------------------------------
define('MEDIZCO_THEME_URI', get_template_directory_uri());
define('MEDIZCO_IMG', MEDIZCO_THEME_URI . '/assets/images');
define('MEDIZCO_CSS', MEDIZCO_THEME_URI . '/assets/css');
define('MEDIZCO_JS', MEDIZCO_THEME_URI . '/assets/js');



// shorthand contants for theme assets directory path
// ----------------------------------------------------------------------------------------
define('MEDIZCO_THEME_DIR', get_template_directory());
define('MEDIZCO_IMG_DIR', MEDIZCO_THEME_DIR . '/assets/images');
define('MEDIZCO_CSS_DIR', MEDIZCO_THEME_DIR . '/assets/css');
define('MEDIZCO_JS_DIR', MEDIZCO_THEME_DIR . '/assets/js');

define('MEDIZCO_CORE', MEDIZCO_THEME_DIR . '/core');
define('MEDIZCO_COMPONENTS', MEDIZCO_THEME_DIR . '/components');
define('MEDIZCO_EDITOR', MEDIZCO_COMPONENTS . '/editor');
define('MEDIZCO_EDITOR_ELEMENTOR', MEDIZCO_EDITOR . '/elementor');
define('MEDIZCO_EDITOR_GUTENBERG', MEDIZCO_EDITOR . '/gutenberg');
define('MEDIZCO_SHORTCODE_DIR_STYLE', MEDIZCO_EDITOR_ELEMENTOR . '/widgets/style');
define('MEDIZCO_INSTALLATION', MEDIZCO_CORE . '/installation-fragments');
define('MEDIZCO_REMOTE_CONTENT', esc_url('http://content.xpeedstudio.com/demo-content/medizco'));


// set up the content width value based on the theme's design
// ----------------------------------------------------------------------------------------
if (!isset($content_width)) {
    $content_width = 800;
}

// set up theme default and register various supported features.
// ----------------------------------------------------------------------------------------

function medizco_setup() {

    // make the theme available for translation
    $lang_dir = MEDIZCO_THEME_DIR . '/languages';
    load_theme_textdomain('medizco', $lang_dir);

    // add support for post formats
    add_theme_support('post-formats', [
        'standard', 'image', 'video', 'audio','gallery'
    ]);

    // add support for automatic feed links
    add_theme_support('automatic-feed-links');

    // let WordPress manage the document title
    add_theme_support('title-tag');

    // add support for post thumbnails
    add_theme_support('post-thumbnails');

    // hard crop center center
    set_post_thumbnail_size(750, 465, ['center', 'center']);
    add_image_size( 'medizco-small', 350, 250, ['center', 'center'] );



    // register navigation menus
    register_nav_menus(
        [
            'primary' => esc_html__('Primary Menu', 'medizco'),
        ]
    );

    // HTML5 markup support for search form, comment form, and comments
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));
    /*
     * Enable support for wide alignment class for Gutenberg blocks.
     */
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );

    add_theme_support('woocommerce');

}
add_action('after_setup_theme', 'medizco_setup');


add_action('enqueue_block_editor_assets', 'medizco_action_enqueue_block_editor_assets' );
function medizco_action_enqueue_block_editor_assets() {
    wp_enqueue_style( 'medizco-fonts', medizco_google_fonts_url(['Exo:400,700', 'Roboto:,400,500,700']), null, MEDIZCO_VERSION );
    wp_enqueue_style( 'medizco-gutenberg-editor-font-awesome-styles', MEDIZCO_CSS . '/font-awesome.css', null, MEDIZCO_VERSION );
    wp_enqueue_style( 'medizco-gutenberg-editor-customizer-styles', MEDIZCO_CSS . '/gutenberg-editor-custom.css', null, MEDIZCO_VERSION );
    wp_enqueue_style( 'medizco-gutenberg-editor-styles', MEDIZCO_CSS . '/gutenberg-custom.css', null, MEDIZCO_VERSION );
    wp_enqueue_style( 'medizco-gutenberg-blog-styles', MEDIZCO_CSS . '/blog.css', null, MEDIZCO_VERSION );
}

// hooks for unyson framework
// ----------------------------------------------------------------------------------------
function medizco_framework_customizations_path($rel_path) {
    return '/components';
}
add_filter('fw_framework_customizations_dir_rel_path', 'medizco_framework_customizations_path');

function medizco_remove_fw_settings() {
    remove_submenu_page( 'themes.php', 'fw-settings' );
}
add_action( 'admin_menu', 'medizco_remove_fw_settings', 999 );


// include the init.php
// ----------------------------------------------------------------------------------------
require_once( MEDIZCO_CORE . '/init.php');
require_once( MEDIZCO_COMPONENTS . '/editor/elementor/elementor.php');
