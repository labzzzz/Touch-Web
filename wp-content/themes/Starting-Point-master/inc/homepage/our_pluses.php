<div class="ops">
	<!-- Section our_pluses -->
	<div class="our_pluses">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2><span class="gr_1"><?php
								$idObj = get_category_by_slug('our_pluses');
								$id = $idObj->term_id;
								echo get_cat_name($id);	
							?></span>
						<span class="gr_2">
							<?php
								echo category_description($id);
							?></span>
					</h2>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3">
					<div class="op_text">
						<?php if ( have_posts() ) : query_posts('p=46');
							while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
								<h4><?php the_title(); ?></h4>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="op_text">
						<?php if ( have_posts() ) : query_posts('p=48');
							while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
								<h4><?php the_title(); ?></h4>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="op_text">
						<?php if ( have_posts() ) : query_posts('p=50');
							while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
								<h4><?php the_title(); ?></h4>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="op_text">
						<?php if ( have_posts() ) : query_posts('p=53');
							while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
								<h4><?php the_title(); ?></h4>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>