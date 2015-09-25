<body <?php body_class(isset($class) ? $class : ''); ?>>

    <?php get_template_part( 'inc/parts/nav', get_post_format() ); ?>
    <?php get_template_part( 'inc/parts/logo', get_post_format() ); ?>

    <div class="share42init" data-url="<?php the_permalink() ?>" data-title="<?php echo $value = get_field( "soc_title" ); ?>" data-image="<?php echo $value = get_field( "soc_img" ); ?>" data-description="<?php echo $value = get_field( "short" ); ?>" data-top1="150" data-top2="50" data-margin="0"></div>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/share42/share42.js"></script>