<?php get_header(); ?>

	<main class="main main-content">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
					<h2 class="projection-title--position">
						<?php 
	            $idObj = get_category_by_slug('prognosis'); 
	            $id = $idObj->term_id;
	            echo get_cat_name($id);
 						?>
					</h2>
				</div>

				<!-- Start Main Content -->
				<div class="col-md-10">
					
					<!-- Start Верхняя часть рубрики "Статьи" -->
					
					<?php
						global $post;

						$tmp_post = $post;
						$args = array( 'posts_per_page' => 3, 'offset'=> 0, 'category' => 2 );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ){ setup_postdata($post);
					?>
						
						<div class="col-md-12">
							<div class="main-content-projection">
								
								<?php the_post_thumbnail(); ?>

								<h3><?php the_title(); ?></h3>

								<?php the_tags(''); ?>
								
								<?php the_excerpt(); ?>
								
								<div class="main-content-projection-details">
									<a href="<?php the_permalink(); ?>">
										подробнее...
									</a>
								</div>

							</div>
						</div>

						<?php
							} 

							$post = $tmp_post;
						?>
						<!-- End Верхняя часть рубрики "Статьи" -->
					

					<!-- Start Our Experts -->
					<div class="col-md-11">
						<h2 class="experts-title">
							<?php 
		            $idObj = get_category_by_slug('experts'); 
		            $id = $idObj->term_id;
		            echo get_cat_name($id);
 							?>
						</h2>
					</div>
								
					<div class="expert-item-wrap col-md-12">
							
							<!-- Start Вывод рубрики "Автор" -->
							<?php
								if ( have_posts() ) :
								query_posts('category_name=experts;');
								while (have_posts()) : the_post();
							?>

							<div class="expert-item">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Expert/expert-1.jpg" alt="">
								<span><?php the_title(); ?></span>

								<?php the_content(); ?>

							</div>

							<?php 
							  endwhile;
								endif;
								wp_reset_query();                
							?>
							<!-- End Вывод рубрики "Автор" -->

					</div> <!-- .expert-item-wrap -->
					<!-- End Our Experts -->

					
					<!-- Start Second Projections Block  -->
					
					<!-- Start Вывод нижней части рубрики "Статьи" -->
					<?php
						global $post;

						$tmp_post = $post;
						$args = array( 'posts_per_page' => 3, 'offset'=> 3, 'category' => 2	);
						$myposts = get_posts( $args );
						foreach( $myposts as $post ){ setup_postdata($post);
							?>
						
						<div class="col-md-12">
							<div class="main-content-projection">
								
								<?php the_post_thumbnail(); ?>

								<h3><?php the_title(); ?></h3>

								<?php the_tags(''); ?>
								
								<?php the_excerpt(); ?>
								
								<div class="main-content-projection-details">
									<a href="<?php the_permalink(); ?>">
										подробнее...
									</a>
								</div>

							</div>
						</div>

						<?php
							} 

							$post = $tmp_post;
						?>
						<!-- End Вывод нижней части рубрики "Статьи" -->

					<!-- End Second Projections Block  -->

				</div>
				<!-- End Main Content -->


				<!-- Start Aside -->
					<div class="col-md-2">
						<?php get_sidebar(); ?>
					</div>
				<!-- End Aside -->


			</div> <!-- .row -->
		</div> <!-- .container -->
	</main>

<?php get_footer(); ?>