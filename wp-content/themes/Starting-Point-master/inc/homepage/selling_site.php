<!-- Section selling_site -->
<div class="selling_site">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2><span class="gr_1"><?php
							$idObj = get_category_by_slug('selling_site');
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
			<div class="col-md-12">
				<?php if ( have_posts() ) : query_posts('p=74');
					while (have_posts()) : the_post(); ?>
						<h4><?php the_title(); ?></h4>
						<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>