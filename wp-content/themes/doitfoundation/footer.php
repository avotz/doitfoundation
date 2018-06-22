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
                <a href="<?php echo esc_url(home_url('/volunteer')); ?>">BECOME A VOLUNTEER</a>
              </div>
               <div class="footer-top-item-content-item">
                <a href="<?php echo esc_url(home_url('/donate')); ?>">Make a Donation</a>
              </div>
               <div class="footer-top-item-content-item">
                <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="btn btn-donate">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="footer-top-item item-right">
            <div class="footer-nav">
              <div class="footer-nav-item">
                <a href="#" class="footer-nav-item-title">About Us</a>
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
                  <a href="#" class="footer-nav-item-title">News & Events</a>
                  <nav class="footer-menu">
                    <ul class="footer-menu-ul">
                      <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">News & articles</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link anchor">Stories</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link anchor">Events</a>
                        </li>
                       
                      
                  </ul>
                  </nav>
              </div>
              <div class="footer-nav-item">
                  <a href="#" class="footer-nav-item-title">Contact Us</a>
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
