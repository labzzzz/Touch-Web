		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="row">
				<div class="col-md-2">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Логотип Touch-Web.ru">
						<?php echo __('Copyright © 2015 Touch-Web', 'tweb'); ?>
					</a>
				</div>
				<div class="col-md-1">
					<?php get_template_part( 'inc/parts/counters/yandex', get_post_format() ); ?>
				</div>
			</div>
		</footer>

		
		<!-- Модальные окна: заказ обратного звонка, продукты 1,2,3 -->
		<div class="modal fade" id="call_back" tabindex="-1" role="dialog" aria-labelledby="CallBack">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<button type="button" class="modal_close" data-dismiss="modal" aria-hidden="true">×</button>
					<?php echo do_shortcode('[contact-form-7 id="136" title="Заказ обратного звонка"]');?>
				</div>
			</div>
		</div>
		<div class="modal fade" id="BuyOneClick_1" tabindex="-1" role="dialog" aria-labelledby="BuyOneClick_1">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<button type="button" class="modal_close" data-dismiss="modal" aria-hidden="true">×</button>
					<?php echo do_shortcode('[contact-form-7 id="280" title="Визитка"]');?>
				</div>
			</div>
		</div>
		<div class="modal fade" id="BuyOneClick_2" tabindex="-1" role="dialog" aria-labelledby="BuyOneClick_2">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<button type="button" class="modal_close" data-dismiss="modal" aria-hidden="true">×</button>
					<?php echo do_shortcode('[contact-form-7 id="281" title="Landing Page"]');?>
				</div>
			</div>
		</div>
		<div class="modal fade" id="BuyOneClick_3" tabindex="-1" role="dialog" aria-labelledby="BuyOneClick_3">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<button type="button" class="modal_close" data-dismiss="modal" aria-hidden="true">×</button>
					<?php echo do_shortcode('[contact-form-7 id="282" title="Интернет-магазин"]');?>
				</div>
			</div>
		</div>

		<?php wp_footer(); ?>
	</body>
</html>