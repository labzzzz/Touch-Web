<?php

  // ================================================================================
  // Initial
  // ================================================================================
 
  // returns WordPress subdirectory if applicable
  function wp_base_dir() {
    preg_match('!(https?://[^/|"]+)([^"]+)?!', site_url(), $matches);
    return (count($matches) === 3)  ? end($matches) : "";
  }


  // Define helper constants
  $get_theme_name = explode('/themes/', get_template_directory());


  // define constants
  define('WP_BASE',                   wp_base_dir());
  define('THEME_NAME',                next($get_theme_name));
  define('RELATIVE_PLUGIN_PATH',      str_replace(site_url() . '/', '', plugins_url()));
  define('FULL_RELATIVE_PLUGIN_PATH', WP_BASE . '/' . RELATIVE_PLUGIN_PATH);
  define('RELATIVE_CONTENT_PATH',     str_replace(site_url() . '/', '', content_url()));
  define('THEME_PATH',                RELATIVE_CONTENT_PATH . '/themes/' . THEME_NAME);


  //
  function tweb_loader() {
    // wp_deregister_script('jquery');
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css', array(), '3.3.4' );
    wp_enqueue_style( 'bootstrap-theme-min', get_template_directory_uri() . '/assets/css/vendor/bootstrap-theme.min.css', array(), '3.3.4' );
    wp_enqueue_style( 'font-awesome-min', get_template_directory_uri() . '/assets/css/vendor/font-awesome.min.css', array(), '4.4.0' );
    wp_enqueue_style( 'tweb-style', get_stylesheet_uri() );
  }
  add_action('wp_enqueue_scripts', 'tweb_loader');
  

  
  // initial setup
  function startingpoint_setup() {
    // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
    register_nav_menus(array(
      'primary_navigation' => __('Primary Navigation', 'startingpoint'),
    ));

    // Add post thumbnails and title-tag's
    add_theme_support('post-thumbnails');
    add_theme_support( "title-tag" );     
  }
  add_action('after_setup_theme', 'startingpoint_setup');