<?php

  // ================================================================================
  // Clean up
  // ================================================================================

  remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'feed_links', 2 );
  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'wlwmanifest_link' ); 
  remove_action( 'wp_head', 'index_rel_link' ); 
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); 
  remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); 
  remove_action( 'wp_head', 'wp_generator' );
  remove_action( 'wp_head', 'rel_canonical');
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

  // hidding WordPress version
  function gb_hide_wp_ver() {
    return '';
  }
  add_filter('the_generator','gb_hide_wp_ver');


  // hidding AdminBar in Front
  show_admin_bar( false );


  // removed 'recent comments' css from header
  function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
  add_action('widgets_init', 'remove_recent_comments_style');
