<footer>
		<div class="container">
			<div class="row">
				<div class="footer-block">
					<div class="col-md-3">
						<a href="mailto:<?php $options = get_option('sample_theme_options');  echo $options ['mail']; ?>" class="mail color-black">
							<i class="fa fa-envelope-o"></i>
							<?php $options = get_option('sample_theme_options');  echo $options ['mail']; ?>
						</a>
					</div>

					<div class="col-md-4">
						<div class="phone color-black">
							<i class="fa fa-phone"></i>
							<?php $options = get_option('sample_theme_options');  echo $options ['phonetext']; ?>
						</div>
					</div>

					<div class="col-md-5">
						<a href="#" class="delivery-btn">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/delivery-btn.png" alt="">
						</a>
					</div>

				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</footer>


	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/common.js"></script>
	<?php wp_footer(); ?>
</body>
</html>