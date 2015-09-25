<?php  get_template_part('inc/parts/head');  ?>
<?php  get_template_part('inc/parts/header'); ?>

<div class="sp_single">
	<div class="row">
		<div class="col-md-10 text-justify">
			
			<h2><?php printf( __('Search Results for: %s', 'default'), get_search_query() ); ?></h2>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_excerpt(); ?></p>
			<?php endwhile;	else:?>
				<p><?php echo __('Извините, ничего не найдено.', 'tweb'); ?></p>
			<?php endif; ?>
		
		</div>
		<div class="col-md-2">
			<?php  get_template_part('inc/parts/sidebar'); ?>
		</div>
	</div>
</div>

<?php  get_template_part('inc/parts/footer'); ?>