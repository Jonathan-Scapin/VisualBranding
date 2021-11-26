<?php
/*
Plugin Name: Visual Branding
Plugin URI: 
Description: Visual Branding help you to define visual identity on WordPress
Author: Jonathan SCAPIN
Version: 0.1
Author URI: https://jonathanscapin.com/
*License: GPL v2 or later
*/

defined( 'ABSPATH' ) || die();

define( 'VISUAL_BRANDING_URL', plugin_dir_url( __FILE__ ) );

require_once plugin_dir_path(__FILE__) . 'inc/vb-admin-menu.php';
require_once plugin_dir_path(__FILE__) . 'inc/vb_options.php';
require_once plugin_dir_path(__FILE__) . 'inc/vb_color.php';
require_once plugin_dir_path(__FILE__) . 'inc/vb_add_fonts.php';
require_once plugin_dir_path(__FILE__) . 'inc/vb_select_fonts.php';


function vb_include_assets_files() {
    wp_register_style( 'vb-css', plugins_url('/css/vb.css',__FILE__ ) );
    wp_enqueue_style('vb-css');
}

add_action(  'admin_enqueue_scripts', 'vb_include_assets_files' );