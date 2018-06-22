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
 *
 * @package doitfoundation
 */

get_header();
?>

	<div class="main">

      <div class="banner">
           
							
              <div class="banner-slider">
               
                    <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner.jpg')">
						 <div id="overlay-link" class="slide-title">
						  
							 <div class="banner-logo">
							 		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Do it Foundation">
							 </div>
							<h2>We believe a wheelchair is a human right</h2>

						</div>

					</div>
                    <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner2.jpg')">
						<div id="overlay-link" class="slide-title">
							 <div class="banner-logo">
							 		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Do it Foundation">
							 </div>
							<h2>A Wheelchair is a gift that extends dignity, freedom and independence</h2>

						</div>
					</div>
                    <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner3.jpg')">
						<div id="overlay-link" class="slide-title">
							 <div class="banner-logo">
							 		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Do it Foundation">
							 </div>
							<h2>More hope through mobility.</h2>

						</div>
					</div>
                 
            </div>
                
                 
            
            
          </div> 
          
     

      <section class="choose" id="getinvolved">
         <div class="choose-container flex-container-sb">
             <div class="choose-item">
               <a href="<?php echo esc_url(home_url('/volunteer')); ?>">
                  <div class="choose-item-container choose1">
                      <div class="choose-title">
                        BECOME A VOLUNTEER
                      </div>
                      <div class="choose-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/choose1.jpg">
                      </div>
                  </div>
                  
               </a>
             </div>
             <div class="choose-item">
               <a href="<?php echo esc_url(home_url('/donate')); ?>">
                   <div class="choose-item-container choose2">
                      <div class="choose-title">
                        MAKE A DONATION
                      </div>
                      <div class="choose-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/choose2.jpg">
                      </div>
                  </div>
               </a>
             </div>
         </div>
      </section>

      <!-- <section class="map">
        <h2 class="map-title">Title</h2>
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15684.919025455205!2d-85.4281962!3d10.639251!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x756af3ebd14361a2!2sAvotz+Web+Works!5e0!3m2!1ses-419!2s!4v1442615525574" width="600" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
      </section> -->
      <section class="news">
         <h2 class="news-title">News & Events</h2>
        <div class="news-container flex-container-st">
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
