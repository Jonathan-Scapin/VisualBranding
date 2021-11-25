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