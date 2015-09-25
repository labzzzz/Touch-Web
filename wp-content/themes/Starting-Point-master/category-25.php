<?php
/**
 * The template for displaying 'convertion' Category Archive pages.
 *
 * @package WordPress
 * @subpackage aliya
 * @since aliya 1.0
 */

?>

<?php  get_template_part('inc/parts/head');  ?>
<?php  get_template_part('inc/parts/header'); ?>


<div class="content"> <!-- =========== КОНТЕНТ =========== --> 
	<!-- Section convertion -->
	<div class="convertion">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="conv_text">
						<div class="row">
							<div class="col-md-12">
								<?php while ( have_posts() ) : the_post();
									$args = array(
										'cat' => 25
									);
									$the_query = new WP_Query( $args );
								?>
									
									<div class="row b_post">
										<div class="col-md-4">
											<a href="<?php the_permalink(); ?>">
												<?php 
													if ( has_post_thumbnail() ) {
														the_post_thumbnail('large',  array('class' => 'img-responsive img-thumbnail'));
													}
												?>
											</a>
										</div>

										<div class="col-md-8 text-justify">
											<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
											<p class="public_date"><?php the_time('m.Y'); ?></p>
											<div class="conv_short"><?php echo the_field( "short" ); ?></div>
											<a href="<?php the_permalink();?>" class="more_blog" >Читать дальше</a>
										</div>
									</div>

								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


 </div><!-- content -->

<?php  get_template_part('inc/parts/footer'); ?>