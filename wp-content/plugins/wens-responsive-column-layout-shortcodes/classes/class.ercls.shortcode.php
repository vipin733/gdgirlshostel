<?php
	class ERCLS_SHORTCODES{
		protected static $instance = null;

		function __construct(){			
			add_shortcode( 'bscolumns', array($this,'ercls_bs_columns') );
		}

		function ercls_bs_columns( $atts, $content=null ){
			extract(shortcode_atts(array(
				'class' 	=> 'span1'
			), $atts));
			
			$result ='';
			$result .= '<div class="'.$class.'">';
			$result .= do_shortcode( $content );
			$result .= '</div>';
			
			return force_balance_tags( $result );
		}

		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}
	}