<?php
/**
 * The template for displaying 'nashe_portfolio' Category Archive pages.
 *
 * @package WordPress
 * @subpackage aliya
 * @since aliya 1.0
 */

?>

<?php  get_template_part('inc/parts/head');  ?>
<?php  get_template_part('inc/parts/header'); ?>


 <div class="content"> <!-- =========== КОНТЕНТ =========== --> 
	<!-- Section nashe_portfolio -->
	<div class="nashe_portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2><span class="gr_1"><?php the_title(); ?></span></h2>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-12">
					<div class="folio_text">
						<?php if ( have_posts() ) : query_posts('p=577');
							while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>


 </div><!-- content -->

<?php  get_template_part('inc/parts/footer'); ?>