	<!-- Section services -->
	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2><span class="gr_1"><?php
								$idObj = get_category_by_slug('services');
								$id = $idObj->term_id;
								echo get_cat_name($id);	
							?></span>
						<span class="gr_2"><?php
																	echo category_description($id);
																?></span>
					</h2>
				</div>
			</div>
			<div class="serv_bg">
				<div class="row">
					<div class="col-md-6">
						<?php if ( have_posts() ) : query_posts('p=102');
							while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
					<div class="col-md-6">
						<?php if ( have_posts() ) : query_posts('p=104');
							while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<?php if ( have_posts() ) : query_posts('p=106');
							while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
					<div class="col-md-6">
						<?php if ( have_posts() ) : query_posts('p=112');
							while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<?php if ( have_posts() ) : query_posts('p=110');
							while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
					<div class="col-md-6">
						<?php if ( have_posts() ) : query_posts('p=108');
							while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<?php if ( have_posts() ) : query_posts('p=98');
							while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
					<div class="col-md-6">
						<?php if ( have_posts() ) : query_posts('p=100');
							while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- End of ops class -->