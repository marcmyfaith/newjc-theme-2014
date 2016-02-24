<?php

	function newjc_scripts() {
		wp_enqueue_style( 'newjc', get_stylesheet_directory_uri() . '/assets/css/newjc.css', array( 'bootstrap', 'stencil' ) );
	}

	add_action( 'wp_enqueue_scripts', 'newjc_scripts' );

	function newjc_google_site_verification() {
		echo '<meta name="google-site-verification" content="oMN3yEb12-VgQvdMeiPUjl09yt3CDiRby8ny0hQ_eI8" />';
	}

	add_action( 'wp_head', 'newjc_google_site_verification' );