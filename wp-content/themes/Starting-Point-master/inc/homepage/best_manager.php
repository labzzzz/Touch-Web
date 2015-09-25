	<!-- Section best_manager -->
	<div class="best_manager">
		<div class="container">
			<div class="bm row">
				<div class="col-md-5">
					<img class="b_manager" src="<?php bloginfo('template_url'); ?>/img/b_manager.png" alt="Сайт - презентует и продает ваши товары и услуги 24/7.">
				</div>
				<div class="col-md-7 text-center">
					<h2><?php
								$idObj = get_category_by_slug('best_manager');
								$id = $idObj->term_id;
								echo get_cat_name($id);
							?></h2>
					<h4><?php
						echo category_description($id);
						?></h4>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-12">
					<?php if ( have_posts() ) : query_posts('p=76');
						while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
					<? endwhile; endif; wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- End of ins_bm class -->