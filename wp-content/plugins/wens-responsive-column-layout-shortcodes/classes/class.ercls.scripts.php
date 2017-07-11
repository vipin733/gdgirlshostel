<?php
	class ERCLS_SCRIPTS{
		protected static $instance = null;

		function __construct(){
			add_action('wp_enqueue_scripts', array($this,'ercls_column_stylesheet') );
		}
		public function ercls_column_stylesheet() {
			wp_register_style('column-styles', ERCLS_URL . 'assets/css/style.css');
			wp_enqueue_style('column-styles');
			
			wp_register_script('ercls_custom_script', ERCLS_URL.'assets/js/custom.js', array('jquery'),'3.0', true);
			wp_enqueue_script('ercls_custom_script');
		}

		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}
	}