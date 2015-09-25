<?php
/**
 * The template for displaying 'articles_blog' Category Archive pages.
 *
 * @package WordPress
 * @subpackage aliya
 * @since aliya 1.0
 */

?>

<?php  get_template_part('inc/parts/head');  ?>
<?php  get_template_part('inc/parts/header'); ?>


<div class="content"> <!-- =========== КОНТЕНТ =========== --> 
	<!-- Section site_blog -->
	<div class="site_blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>
						<span class="gr_1">
							<?php
								$idObj = get_category_by_slug('articles_blog');
								$id = $idObj->term_id;
								echo get_cat_name($id);	
							?>
						</span>
						<span class="gr_2">
							<?php
								echo category_description($id);
							?>
						</span>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="sb_text">
						<div class="row">
							<?php
								$args = array(
									'child_of' => 24
								);
								$catlist = get_categories($args);
 
								foreach($catlist as $categories_item) {
									$terms = apply_filters('taxonomy-images-get-terms', '', array('taxonomy' => 'category'));
									if (!empty($terms)) {
		  								foreach((array)$terms as $term) {
											if ($term->term_id == $categories_item->term_id) {
												print '<div class="blog_block col-md-6"><div class="row"><div class="col-md-5">' . wp_get_attachment_image($term->image_id, array(200,200), true);
												echo '</div>';
												$linkcategory = esc_url(get_term_link($term, $term->taxonomy));
		  										print '<div class="col-md-7"><a href="' . $cat = $linkcategory . '"><h2>' . $categories_item->cat_name . '</h2></a><p>' . $categories_item->category_description . '</p></div></div></div>';	
											}
										}
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>


 </div><!-- content -->

<?php  get_template_part('inc/parts/footer'); ?>