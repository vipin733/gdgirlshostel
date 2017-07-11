<?php
	class ERCLS_ADMIN{
		protected static $instance = null;

		function __construct(){
			add_action( 'admin_init', array($this,'ercls_bs_button') );
		}

		function ercls_bs_button() {
		  add_filter( 'mce_external_plugins', array($this,'ercls_bs_add_button') );
		  add_filter( 'mce_buttons', array($this,'ercls_bs_register_button') );
		}

		function ercls_bs_add_button( $plugin_array ) {
		  $plugin_array['bscolumns'] = ERCLS_URL.'/assets/js/bscolumns.js';
		  return $plugin_array;
		}

		function ercls_bs_register_button( $buttons ) {
		  array_push( $buttons, 'bscolumns-button', 'bscolumns-list' );
		  return $buttons;
		}

		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}
	}