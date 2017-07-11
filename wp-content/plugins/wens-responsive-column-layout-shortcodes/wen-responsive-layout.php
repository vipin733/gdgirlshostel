<?php
/*
Plugin Name: WEN's Responsive Column Layout Shortcodes
Plugin URI: http://wordpress.org/plugins/wens-responsive-column-shortcodes/
Description:  WEN's Responsive Column Layout Shortcodes easily add shortcodes to create 2, 3, 4, 5, 6, columns along with responsive layout in your posts/pages or widget section.
Version: 2.3
Author: Bhuwan Roka
Author URI: http://bhu1roka.com
License: GPL2
Text Domain: evision-col
*/

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define('ERCLS_DIR', dirname( __FILE__ ) );
define('ERCLS_URL', WP_PLUGIN_URL.'/wens-responsive-column-layout-shortcodes/' );

require_once ERCLS_DIR.'/classes/class.ercls.scripts.php';
require_once ERCLS_DIR.'/classes/class.ercls.shortcode.php';
require_once ERCLS_DIR.'/admin/class.ercls.admin.php';


add_action( 'plugins_loaded', array('ERCLS_SCRIPTS', 'get_instance' ) );
add_action( 'plugins_loaded', array('ERCLS_SHORTCODES', 'get_instance' ) );
add_action( 'plugins_loaded', array('ERCLS_ADMIN', 'get_instance' ) );

