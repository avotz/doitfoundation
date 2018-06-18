<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package doitfoundation
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php doitfoundation_post_thumbnail(); ?>

	<!-- <div class="entry-content">
		<?php
		//the_content();

		
		?>
	</div> -->

    <?php
    $args = array(
        'post_type' => 'partner',
        'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
        'posts_per_page' => 100,
        

    );


    $items = new WP_Query($args);

    if ($items->have_posts()) {
        ?>
             <section class="partners">
                <div class="partners-container">
              <?php while ($items->have_posts()) {
                    $items->the_post();

                    ?>
                   
               
                    <div class="partners-item">
                       
                        
                        <div class="partners-item-img">
                            <a href="<?php echo rwmb_meta('rw_partner_url') ?>" target="_blank">
                            <?php if (has_post_thumbnail()) :

                                $id = get_post_thumbnail_id($post->ID);
                                $thumb_url = wp_get_attachment_image_src($id, 'large', true);

                            ?>
                                
                                <div class="partner-img" style="background-image: url('<?php echo esc_url($thumb_url[0]) ?>');"></div>
                                
                                    
                                
                            <?php endif; ?>
                           
                            </a>
                        </div>
                        <div class="partners-item-content">
                            <h3><?php the_title() ?></h3>
                            <?php the_content() ?>
                        </div>
                         
                    </div>
                    
                                
                                <?php

                            } ?>
                </div>
        
            </section>


                  <?php 
                }


                ?>

	
</article><!-- #post-<?php the_ID(); ?> -->
