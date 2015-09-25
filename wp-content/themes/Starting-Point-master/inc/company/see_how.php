<!-- Cooperation page -->
<div class="cooperation">
	<?php
		$args = array(
			'include' => '532',
			'post_type' => 'page'
		); 
		$pages = get_pages($args);
		foreach($pages as $post){
			setup_postdata($post);
	?>
		<div class="row">
			<div class="col-md-12 ctitle"><h2><?php the_title(); ?></h2></div>
			<div class="col-md-12 ccontent"><?php the_content(); ?></div>
		</div>
	<?php
		}
	?>
		</div>
	</div>
</div>