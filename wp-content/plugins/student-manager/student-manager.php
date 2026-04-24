<?php
/**
 * Plugin Name: Student Manager
 * Description: Quản lý sinh viên
 * Version: 1.0
 */

if (!defined('ABSPATH')) exit;

// include
require_once plugin_dir_path(__FILE__) . 'includes/cpt-student.php';
require_once plugin_dir_path(__FILE__) . 'includes/meta-boxes.php';
require_once plugin_dir_path(__FILE__) . 'includes/save-data.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcode.php';

// css
function sm_load_assets() {
    wp_enqueue_style('sm-style', plugin_dir_url(__FILE__) . 'assets/style.css');
}
add_action('wp_enqueue_scripts', 'sm_load_assets');