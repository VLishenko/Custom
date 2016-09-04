<?php get_header(); ?>

<main class="main content-article">
	<div class="container">
		<div class="row">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="col-md-8">
					<h1><?php the_title(); ?></h1>
				</div>

				<!-- Start Content -->
				<div class="col-md-10">

				<div class="content-text">
					<?php the_content(); ?>
				</div>
			<? endwhile; endif; wp_reset_query(); ?>

				<!-- Start COntent Bottom Buttons -->
				<div class="content-share-btns">
					<div class="col-md-12">
					
						<div class="col-md-2 col-sm-4">
							<a href="#">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/cont-btn/content-btn-1.jpg" alt="">
							</a>
							<a href="#">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/cont-btn/content-btn-2.jpg" alt="">
							</a>
						</div>

						<div class="col-md-3 col-sm-4">
							<a href="#">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/cont-btn/content-btn-3.jpg" alt="">
							</a>
							<a href="#">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/cont-btn/content-btn-4.jpg" alt="">
							</a>
						</div>

						<div class="col-md-2 col-sm-4">
							<a href="#">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/cont-btn/content-btn-5.jpg" alt="">
							</a>
							<a href="#">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/cont-btn/content-btn-6.jpg" alt="">
							</a>
						</div>

						<!-- Start Share Buttons -->
						<div class="col-md-5 col-sm-12">
							<div class="share-buttons">
								<span>Поделиться прогнозом в соцсетях:</span>
								
								<?php 
									$idObj = get_category_by_slug('social'); 
									$id = $idObj->term_id;
									if ( have_posts() ) : query_posts('cat=' . $id);
					        while (have_posts() ) : the_post(); ?>

					       		<a target="_blank"
					       			href="<?php echo get_post_meta($post->ID, 'link', true) . get_permalink() ?>" 
					       			class="<?php echo get_post_meta($post->ID, 'class', true); ?>"
					       		></a>

									<? endwhile; endif; wp_reset_query(); ?>

							</div>
						</div>
						<!-- End Share Buttons -->

					</div>
				</div>
				<!-- End COntent Bottom Buttons -->


			</div> <!--.col-md-10 -->
			<!-- End Content -->


			<!-- Start Aside -->
				<div class="col-md-2">
					<?php 
						require 'aside-content.php';
					?>
				</div>
			<!-- End Aside -->

		</div> <!-- .row -->
	</div> <!-- .container -->
</main>

<?php 
	require 'content-ad-bottom.php';
?>

<?php get_footer(); ?>