<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Page Home 
 * @package doitfoundation
 */

get_header();
?>

<div class="main">

	<div class="banner">


		<div class="banner-slider">

			<div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner.jpg')">
				<div id="overlay-link" class="slide-title">

					<!-- <div class="banner-logo">
							 		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Do it Foundation">
							 </div> -->
					<h2><?php pll_e('We believe a wheelchair is a human right'); ?></h2>

				</div>

			</div>
			<div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner2.jpg')">
				<div id="overlay-link" class="slide-title">
					<!-- <div class="banner-logo">
							 		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Do it Foundation">
							 </div> -->
					<h2><?php pll_e('A Wheelchair is a gift that extends dignity, freedom and independence'); ?></h2>

				</div>
			</div>
			<div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner3.jpg')">
				<div id="overlay-link" class="slide-title">
					<!-- <div class="banner-logo">
							 		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Do it Foundation">
							 </div> -->
					<h2><?php pll_e('More hope through mobility'); ?></h2>

				</div>
			</div>

		</div>




	</div>



	<section class="choose" id="getinvolved">
		<div class="choose-container flex-container-sb">
			<div class="choose-item">
				<?php if (get_locale() == 'es_ES') : ?>
					<a href="<?php echo esc_url(home_url('/voluntario')); ?>">
					<?php else : ?>
						<a href="<?php echo esc_url(home_url('/volunteer')); ?>">
						<?php endif; ?>
						<div class="choose-item-container choose1">
							<div class="choose-title">
								<?php pll_e('Become A Volunteer'); ?>
							</div>
							<div class="choose-bg">
								<img src="<?php echo get_template_directory_uri(); ?>/img/choose1.jpg">
							</div>
						</div>

					</a>
			</div>
			<div class="choose-item">
				<?php if (get_locale() == 'es_ES') : ?>
					<a href="<?php echo esc_url(home_url('/donar')); ?>">
					<?php else : ?>
					<a href="<?php echo esc_url(home_url('/donate')); ?>">
					<?php endif; ?>
						<div class="choose-item-container choose2">
							<div class="choose-title">
								<?php pll_e('Make A Donation'); ?>
							</div>
							<div class="choose-bg">
								<img src="<?php echo get_template_directory_uri(); ?>/img/choose2.jpg">
							</div>
						</div>
					</a>
			</div>
		</div>
	</section>

	<section class="map">
		<?php rewind_posts(); ?>
		<?php query_posts('post_type=page&page_id=126'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php /*the_title('<h2 class="map-title">', '</h2>'); */?>
				<div class="map-container">
					<?php the_content(); ?>
				</div>



			<?php endwhile; ?>
			<!-- post navigation -->

		<?php endif; ?>

	</section>
	<section class="news" id="news-events">
		<h2 class="news-title"><?php pll_e('News & Events'); ?></h2>
		<div class="news-container flex-container-st">


			<?php
			$args = array(
				'post_type' => 'post',
				'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
				'posts_per_page' => 9,


			);


			$items = new WP_Query($args);

			if ($items->have_posts()) {
				?>

				<?php while ($items->have_posts()) {
					$items->the_post();

					?>

					<div class="news-item">
						<a href="<?php the_permalink() ?>" class="news-item-link">
							<div class="news-item-img">
								<?php if (has_post_thumbnail()) :

									$id = get_post_thumbnail_id($post->ID);
									$thumb_url = wp_get_attachment_image_src($id, 'news-thumbs', true);

									?>

									<img src="<?php echo esc_url($thumb_url[0]) ?>" />



								<?php endif; ?>

								<div class="news-item-img-hover"></div>
							</div>
							<div class="news-item-content">
								<div class="news-item-category">
									<span>News</span>
								</div>
								<!-- <time class="news-item-date">14-5-2018</time> -->
								<h2 class="news-item-title"> <?php the_title() ?></h2>
							</div>
						</a>
					</div>




				<?php

			} ?>



			<?php
		}


		?>
			<?php
			$args = array(
				'post_type' => 'news-link',
				'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
				'posts_per_page' => 9,


			);


			$items = new WP_Query($args);

			if ($items->have_posts()) {
				?>

				<?php while ($items->have_posts()) {
					$items->the_post();

					?>

					<div class="news-item">
						<a href="<?php echo rwmb_meta('rw_news_url') ?>" class="news-item-link" target="_blank">
							<div class="news-item-img">
								<?php if (has_post_thumbnail()) :

									$id = get_post_thumbnail_id($post->ID);
									$thumb_url = wp_get_attachment_image_src($id, 'news-thumbs', true);

									?>

									<img src="<?php echo esc_url($thumb_url[0]) ?>" />



								<?php endif; ?>

								<div class="news-item-img-hover"></div>
							</div>
							<div class="news-item-content">
								<div class="news-item-category">
									<span>News</span>
								</div>
								<!-- <time class="news-item-date">14-5-2018</time> -->
								<h2 class="news-item-title"> <?php the_title() ?></h2>
							</div>
						</a>
					</div>




				<?php

			} ?>



			<?php
		}


		?>

		</div>
	</section>


</div>

<?php
/*get_sidebar();*/
get_footer();
