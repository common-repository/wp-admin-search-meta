<?php
/*
Plugin Name: WP-Admin Search Post Meta
Plugin URI: https://wordpress.org/plugins/wp-admin-search-meta/
Description: Enables searching post meta fields on admin pages.

Author: MELONIQ.NET
Author URI: https://blog.meloniq.net/

Version: 0.3
Text Domain: wp-admin-search-meta
License: GPLv2 or later

Requires at least: 4.9
Requires PHP: 5.6
*/


/**
 * Avoid calling file directly.
 */
if ( ! function_exists( 'add_action' ) ) {
	die( 'Whoops! You shouldn\'t be doing that.' );
}


/**
 * Plugin version and textdomain constants.
 */
define( 'WPASM_VERSION', '0.3' );
define( 'WPASM_TD', 'wp-admin-search-meta' );


/**
 * Include and initialize class.
 */
if ( ! class_exists( 'WPASM_Search' ) ) {
	require_once( dirname( __FILE__ ) . '/wpasm-class.php' );
}

WPASM_Search::init();
