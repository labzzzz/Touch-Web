<?php

	// ================================================================================
	// Scripts & Styles
	// ================================================================================

	function js_footer_loader() {
		// wp_deregister_script('jquery');
		wp_enqueue_script('jquery.stellar.min.js', get_template_directory_uri() . '/assets/js/vendor/jquery.stellar.min.js', true, '1.0', true );
		wp_enqueue_script('plugins.js', get_template_directory_uri() . '/assets/js/plugins.js', true, '1.0', true );
		wp_enqueue_script('main.js',   get_template_directory_uri() . '/assets/js/main.js', true, '1.0', true );
	}
	add_action('wp_enqueue_scripts', 'js_footer_loader');