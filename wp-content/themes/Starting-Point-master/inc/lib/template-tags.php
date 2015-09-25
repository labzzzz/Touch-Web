<?php

	// ================================================================================
	// Template Tags
	// ================================================================================

	function asset($type, $file) {
		return bloginfo('template_url') . "/assets/" . $type . "/" . $file;
	}

	// Добавляем новые размеры миниатюр
	if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'cat_thumb', 300, 9999, array( 'center', 'center' )  );
	}

	// Регистрируем сайдбар
	function tweb_widgets_init() {
		register_sidebar( array(
			'name'          => 'Правый сайдбар',
			'id'            => 'sidebar_right',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<div class="widget_title">',
			'after_title'   => '</div>',
		));
	}
	add_action( 'widgets_init', 'tweb_widgets_init' );



	function bootpresswp_content_nav( $nav_id ) {
		global $wp_query;

		if ( is_single() ) : // navigation links for single posts ?>
			<ul class="pager">
				<?php previous_post_link( '<li class="previous">%link</li>', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'purecsspress' ) . '</span> %title' ); ?>
				<?php next_post_link( '<li class="next">%link</li>', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'purecsspress' ) . '</span>' ); ?>
			</ul>

		<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>
			<ul class="pager">
				<?php if ( get_next_posts_link() ) : ?>
				<li class="next"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'purecsspress' ) ); ?></li>
				<?php endif; ?>

				<?php if ( get_previous_posts_link() ) : ?>
				<li class="previous"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'purecsspress' ) ); ?></li>
				<?php endif; ?>
			</ul>
		<?php endif; 

	}
?>