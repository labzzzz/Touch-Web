<!-- 5yearswork page -->
<div class="syearsin">
	<?php
		$args = array(
			'include' => '549',
			'post_type' => 'page'
		); 
		$pages = get_pages($args);
		foreach($pages as $post){
			setup_postdata($post);
	?>
		<div class="row cover">
			<div class="col-md-12 stitle"><h2><?php the_title(); ?></h2></div>
			<div class="col-md-12 scontent"><?php the_content(); ?></div>
		</div>
	<?php
		}
	?>
		</div>
	</div>
</div>