<?php
  /*
  Template Name: О компании
  */
?>

	<?php  get_template_part('inc/parts/head');  ?>
	<?php  get_template_part('inc/parts/header'); ?>


	<?php get_template_part( 'inc/company/see_how', get_post_format() ); ?>
	<?php get_template_part( 'inc/company/5inprof', get_post_format() ); ?>
	<?php get_template_part( 'inc/company/see_sheme', get_post_format() ); ?>


	<?php  get_template_part('inc/parts/footer'); ?>