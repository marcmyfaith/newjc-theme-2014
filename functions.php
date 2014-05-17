<?php
	
	function newjc_scripts() {
		wp_enqueue_style( 'newjc', get_stylesheet_directory_uri() . '/assets/css/newjc.css', array( 'bootstrap', 'stencil' ) );
	}

	add_action( 'wp_enqueue_scripts', 'newjc_scripts' );

?>