<?php

/**
 * Theme functions and definitions
 */



defined('ABSPATH') or die('شما به این فایل دسترسی ندارید');
define('BAKALAMA_THEMEDIR', get_theme_file_path() . '/');
define('BAKALAMA_THEMEURI', get_theme_file_uri() . '/');

require_once(BAKALAMA_THEMEDIR . 'inc/codestar/codestar-framework.php');
require_once(BAKALAMA_THEMEDIR . 'inc/bakalma-settings.php');


require BAKALAMA_THEMEDIR . 'inc/bakalama-assets.php';
