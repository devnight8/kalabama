<?php

/**
 * Theme functions and definitions
 */



defined('ABSPATH') or die('شما به این فایل دسترسی ندارید');
define('BAKALAMA_THEMEDIR', get_theme_file_path() . '/');
define('BAKALAMA_THEMEURI', get_theme_file_uri() . '/');

require_once(BAKALAMA_THEMEDIR . 'inc/codestar/codestar-framework.php');
require_once(BAKALAMA_THEMEDIR . 'inc/bakalma-settings.php');

add_action('wp_enqueue_scripts', 'bakalama_enqueue_scripts');
function bakalama_enqueue_scripts()
{

    $theme_obj = wp_get_theme();
    $theme_version = $theme_obj->get('Version');

    // Enqueue styles
    wp_enqueue_style('bakalama-main-style', BAKALAMA_THEMEURI . 'src/output.css', array(), $theme_version);
    wp_enqueue_style('bakalama-swiper-style', BAKALAMA_THEMEURI . 'assets/css/swiper-bundle.min.css', array(), $theme_version);

    // Enqueue scripts
    wp_enqueue_script('bakalama-swiper-js', BAKALAMA_THEMEURI . 'assets/js/swiper-bundle.min.js', null, $theme_version, true);
    wp_enqueue_script('bakalama-main-js', BAKALAMA_THEMEURI . 'assets/js/main.js', null, $theme_version, true);
}
