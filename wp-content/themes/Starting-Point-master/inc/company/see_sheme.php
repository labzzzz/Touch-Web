<!-- sheme page -->
<div class="sheme">
	<?php
		$args = array(
			'include' => '568',
			'post_type' => 'page'
		); 
		$pages = get_pages($args);
		foreach($pages as $post){
			setup_postdata($post);
	?>
		<div class="row cover">
			<div class="col-md-12 xtitle"><h2><?php the_title(); ?></h2></div>
			<div class="col-md-12 xcontent text-justify"><?php the_content(); ?></div>
		</div>
	<?php
		}
	?>
		</div>
	</div>
</div>