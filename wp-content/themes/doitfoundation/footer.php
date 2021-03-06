<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package doitfoundation
 */

?>

	<footer class="footer">
       <div class="footer-top flex-container-sb">
          <div class="footer-top-item item-left">
            <div class="footer-top-item-bg">
              <img src="<?php echo get_template_directory_uri(); ?>/img/footer-item.jpg">
            </div>
            <div class="footer-top-item-content">
              <div class="footer-top-item-content-item">
                <a href="<?php echo esc_url(home_url('/volunteer')); ?>"><?php pll_e('Become A Volunteer'); ?></a>
              </div>
               <div class="footer-top-item-content-item">
                <a href="<?php echo esc_url(home_url('/donate')); ?>"><?php pll_e('Make A Donation'); ?></a>
              </div>
               <div class="footer-top-item-content-item">
                <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="btn btn-donate"><?php pll_e('Contact Us'); ?></a>
              </div>
            </div>
          </div>
          <div class="footer-top-item item-right">
            <div class="footer-nav">
              <div class="footer-nav-item">
                <span class="footer-nav-item-title"><?php pll_e('About Us'); ?></span>
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'footer-menu',
                  'menu_id' => 'footer-menu',
                  'container' => 'nav',
                  'container_class' => 'footer-menu',
                  'container_id' => '',
                  'menu_class' => 'footer-menu-ul',
                ));
                ?>
                <div class="footer-social">
                  <a href="https://www.facebook.com/DoItFoundation/" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
              </div>
              <div class="footer-nav-item">
                  <span class="footer-nav-item-title"><?php pll_e('News & Events'); ?></span>
                  <?php  wp_nav_menu(array(
                    'theme_location' => 'news-menu',
                    'menu_id' => 'news-menu',
                    'container' => 'nav',
                    'container_class' => 'footer-menu',
                    'container_id' => '',
                    'menu_class' => 'footer-menu-ul',
                  ));
                  ?>
                  <!-- <nav class="footer-menu">
                    <ul class="footer-menu-ul">
                      <li class="footer-menu-item">
                          <?php if (get_locale() == 'es_ES') : ?>
                            <a href="<?php echo esc_url(home_url('/noticias')); ?>" class="footer-menu-link"><?php pll_e('News & articles'); ?></a>
                          <?php else : ?>
                            <a href="<?php echo esc_url(home_url('/news')); ?>" class="footer-menu-link"><?php pll_e('News & articles'); ?></a>
                          <?php endif; ?>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#news-events" class="footer-menu-link anchor"><?php pll_e('Stories'); ?></a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#news-events" class="footer-menu-link anchor"><?php pll_e('Events'); ?></a>
                        </li>
                       
                      
                  </ul>
                  </nav> -->
              </div>
              <div class="footer-nav-item">
                  <span class="footer-nav-item-title"><?php pll_e('Contact Us'); ?></span>
                  <nav class="footer-menu">
                    <ul class="footer-menu-ul">
                      <li class="footer-menu-item">
                            <a href="mailto::ileanar@grupodoit.com" class="footer-menu-link">ileanar@grupodoit.com</a>

                        </li>
                        <li class="footer-menu-item">
                            <a href="tel:+506 2667 0912" class="footer-menu-link">+506 2667 0912</a>
                            
                        </li>
                        <li class="footer-menu-item">
                            <a href="mailto::dcortez@grupodoit.com" class="footer-menu-link anchor">dcortez@grupodoit.com</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="tel:+506 2667 0906" class="footer-menu-link">+506 2667 0906</a>
                            
                        </li>
                        
                      
                       
                      
                  </ul>
                  </nav>
              </div>
            </div>
            <!-- <div class="footer-social">
              <a href="https://www.facebook.com/DoItFoundation/" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
              <a href="#"><i class="fa fa-youtube"></i></a>
            </div> -->
          </div>
        
      </div>
      <div class="footer-bottom">
        
        Do it Foundation &copy; 2018.
      </div>
   </footer>
<?php wp_footer(); ?>

</body>
</html>
