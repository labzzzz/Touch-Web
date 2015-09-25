<?php  get_template_part('inc/parts/head');  ?>
<?php  get_template_part('inc/parts/header'); ?>

<div class="sp_single">
	<div class="row">
		<div class="col-md-offset-1 col-md-8 text-justify">
		
			<?php if(have_posts()) : ?>
			   <?php while(have_posts()) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h3><?php echo $value = get_field( "soc_title" ); ?></h3>
					<p><?php echo $value = get_field( "short" ); ?></p>
					<img class="cat_thumb" src="<?php echo $value = get_field( "soc_image" ); ?>">
			 		<?php the_content(); ?>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
		
		</div>
		<div class="col-md-2">
			<?php  get_template_part('inc/parts/sidebar'); ?>
		</div>
	</div>
</div>

<?php  get_template_part('inc/parts/footer'); ?>