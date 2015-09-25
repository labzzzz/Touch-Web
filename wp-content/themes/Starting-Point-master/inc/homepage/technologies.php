<!-- Section technologies -->
<div class="technologies">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2><span class="gr_1"><?php
							$idObj = get_category_by_slug('technologies');
							$id = $idObj->term_id;
							echo get_cat_name($id);	
						?></span>
					<span class="gr_2"><?php
																echo category_description($id);
															?></span>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<?php if ( have_posts() ) : query_posts('p=85');
					while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="col-md-4">
				<?php if ( have_posts() ) : query_posts('p=87');
					while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="col-md-4">
				<?php if ( have_posts() ) : query_posts('p=89');
					while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<?php if ( have_posts() ) : query_posts('p=91');
					while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="col-md-4">
				<?php if ( have_posts() ) : query_posts('p=93');
					while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="col-md-4">
				<?php if ( have_posts() ) : query_posts('p=95');
					while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>