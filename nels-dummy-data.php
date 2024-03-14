<?php

/**
 * Plugin Name: n-els Dummy Data
 * Description: Creates a custom post type and custom meta fields for movies.
 * Version: 1.0
 * Author: Nader el Sayed
 * Author URI: https://github.com/n-els
 */

// If this file is called directly, abort
if (!defined('WPINC')) {
    die;
}

require_once plugin_dir_path(__FILE__) . 'post-types/movie.php';
require_once plugin_dir_path(__FILE__) . 'meta-fields/movie.php';
