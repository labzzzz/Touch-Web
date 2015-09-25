<?php
  /*
  Template Name: Шаблон главной страницы
  */
?>

	<?php  get_template_part('inc/parts/head');  ?>
	<?php  get_template_part('inc/parts/header'); ?>


	<?php get_template_part( 'inc/homepage/do_job', get_post_format() ); ?>
	<?php get_template_part( 'inc/homepage/instruments', get_post_format() ); ?>
	<?php get_template_part( 'inc/homepage/best_manager', get_post_format() ); ?>
	<?php get_template_part( 'inc/homepage/selling_site', get_post_format() ); ?>
	<?php get_template_part( 'inc/homepage/some_service', get_post_format() ); ?>
	<?php get_template_part( 'inc/homepage/our_pluses', get_post_format() ); ?>
	<?php get_template_part( 'inc/homepage/services', get_post_format() ); ?>


	<?php  get_template_part('inc/parts/footer'); ?>