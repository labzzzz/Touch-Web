<?php
/**
 * The template for displaying 'services_page' Category Archive pages.
 *
 * @package WordPress
 * @subpackage aliya
 * @since aliya 1.0
 */

?>

<?php  get_template_part('inc/parts/head');  ?>
<?php  get_template_part('inc/parts/header'); ?>


 <div class="content"> <!-- =========== КОНТЕНТ =========== --> 
	<!-- Section services_page -->
	<div class="services_page">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2><span class="gr_1"><?php
								$idObj = get_category_by_slug('services_page');
								$id = $idObj->term_id;
								echo get_cat_name($id);	
							?></span>
						<span class="gr_2"><?php
																	echo category_description($id);
																?></span>
					</h2>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-4">
					<div class="sp_text">
						<?php if ( have_posts() ) : query_posts('p=410');
							while (have_posts()) : the_post(); ?>
								<?php the_post_thumbnail(''); ?>
								<h4><?php the_title(); ?></h4>
								<?php echo $value = get_field( "short" ); ?>
								<a href="<?php the_permalink();?>" class="more-link" >Узнать больше</a>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="sp_text">
						<?php if ( have_posts() ) : query_posts('p=366');
							while (have_posts()) : the_post(); ?>
								<?php the_post_thumbnail(''); ?>
								<h4><?php the_title(); ?></h4>
								<?php echo $value = get_field( "short" ); ?>
								<a href="<?php the_permalink();?>" class="more-link" >Узнать больше</a>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="sp_text">
						<?php if ( have_posts() ) : query_posts('p=402');
							while (have_posts()) : the_post(); ?>
								<?php the_post_thumbnail(''); ?>
								<h4><?php the_title(); ?></h4>
								<?php echo $value = get_field( "short" ); ?>
								<a href="<?php the_permalink();?>" class="more-link" >Узнать больше</a>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-4">
					<div class="sp_text">
						<?php if ( have_posts() ) : query_posts('p=407');
							while (have_posts()) : the_post(); ?>
								<?php the_post_thumbnail(''); ?>
								<h4><?php the_title(); ?></h4>
								<?php echo $value = get_field( "short" ); ?>
								<a href="<?php the_permalink();?>" class="more-link" >Узнать больше</a>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="sp_text">
						<?php if ( have_posts() ) : query_posts('p=404');
							while (have_posts()) : the_post(); ?>
								<?php the_post_thumbnail(''); ?>
								<h4><?php the_title(); ?></h4>
								<?php echo $value = get_field( "short" ); ?>
								<a href="<?php the_permalink();?>" class="more-link" >Узнать больше</a>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="sp_text">
						<?php if ( have_posts() ) : query_posts('p=414');
							while (have_posts()) : the_post(); ?>
								<?php the_post_thumbnail(''); ?>
								<h4><?php the_title(); ?></h4>
								<?php echo $value = get_field( "short" ); ?>
								<a href="<?php the_permalink();?>" class="more-link" >Узнать больше</a>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>


 </div><!-- content -->

<?php  get_template_part('inc/parts/footer'); ?>