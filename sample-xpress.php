<?php
/*
Plugin Name: Sample Xpress
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.

if ( ! class_exists( 'Sample_Xpress' ) ) {
	class Sample_Xpress {
		public function __construct() {
			add_filter( 'xpress/child-plugins', array( $this, 'register' ) );
		}

		public function register( $plugins ) {
			return array_merge( $plugins, array(
				array(
					'name' => 'Sample Xpress',
					'slug' => 'sample-xpress',
					'path' => plugin_dir_path( __FILE__ ),
				)
			) );
		}
	}
	new Sample_Xpress;
}
