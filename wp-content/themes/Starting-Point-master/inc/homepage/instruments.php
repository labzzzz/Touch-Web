<div class="ins_bm">	
	<!-- Section instruments -->
	<div class="instruments">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2><span class="gr_1"><?php
								$idObj = get_category_by_slug('instruments');
								$id = $idObj->term_id;
								echo get_cat_name($id);	
							?></span>
						<span class="gr_2"><?php
																	echo category_description($id);
																?></span>
					</h2>
				</div>
			</div>
			<div class="instruments_bg">
				<div class="row">
					<div class="col-md-5 text-right">
						<?php if ( have_posts() ) : query_posts('p=61');
							while (have_posts()) : the_post(); ?>
								<div class="row">
									<div class="col-md-6">
										<?php the_post_thumbnail(); ?>
									</div>
									<div class="ibg_1 col-md-offset-2 col-md-4">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
					<div class="col-md-offset-2 col-md-5">
						<?php if ( have_posts() ) : query_posts('p=63');
							while (have_posts()) : the_post(); ?>
								<div class="row">
									<div class="ibg_2 col-md-4">
										<h4><?php the_title(); ?></h4>
									</div>
									<div class="col-md-offset-2 col-md-6">
										<?php the_post_thumbnail(); ?>
									</div>
								</div>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 text-right">
						<?php if ( have_posts() ) : query_posts('p=66');
							while (have_posts()) : the_post(); ?>
								<div class="row">
									<div class="col-md-6">
										<?php the_post_thumbnail(); ?>
									</div>
									<div class="ibg_3 col-md-offset-2 col-md-4">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
					<div class="col-md-offset-2 col-md-5">
						<?php if ( have_posts() ) : query_posts('p=68');
							while (have_posts()) : the_post(); ?>
								<div class="row">
									<div class="ibg_4 col-md-4">
										<h4><?php the_title(); ?></h4>
									</div>
									<div class="col-md-offset-2 col-md-6">
										<?php the_post_thumbnail(); ?>
									</div>
								</div>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 text-right">
						<?php if ( have_posts() ) : query_posts('p=70');
							while (have_posts()) : the_post(); ?>
								<div class="row">
									<div class="col-md-6">
										<?php the_post_thumbnail(); ?>
									</div>
									<div class="ibg_5 col-md-offset-2 col-md-4">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
					<div class="col-md-offset-2 col-md-5">
						<?php if ( have_posts() ) : query_posts('p=72');
							while (have_posts()) : the_post(); ?>
								<div class="row">
									<div class="ibg_6 col-md-4">
										<h4><?php the_title(); ?></h4>
									</div>
									<div class="col-md-offset-2 col-md-6">
										<?php the_post_thumbnail(); ?>
									</div>
								</div>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>