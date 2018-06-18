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
 * Template Name: Page Our Foundation 
 * @package doitfoundation
 */

get_header();
?>

	<div class="main">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		while ( have_posts() ) :
			the_post(); ?>

			
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header><!-- .entry-header -->

                <?php doitfoundation_post_thumbnail(); ?>

                
         


		<?php endwhile; // End of the loop.
		?>

                <div class="entry-content">
                    <?php rewind_posts(); ?>
                    <?php query_posts('post_type=page&page_id=15'); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                             <?php the_title('<h2 class="entry-subtitle">', '</h2>'); ?>
                                <?php the_content(); ?>
                            

                        <?php endwhile; ?>
                        <!-- post navigation -->
                        
                    <?php endif; ?>
                </div><!-- .entry-content -->

                <div class="entry-content bg-naranja">
                    <?php rewind_posts(); ?>
                    <?php query_posts('post_type=page&page_id=18'); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_title('<h2 class="entry-subtitle">', '</h2>'); ?>
                                <?php the_content(); ?>
                            

                        <?php endwhile; ?>
                        <!-- post navigation -->
                        
                    <?php endif; ?>
                </div><!-- .entry-content -->

                <div class="entry-content">
                    <?php rewind_posts(); ?>
                    <?php query_posts('post_type=page&page_id=20'); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_title('<h2 class="entry-subtitle">', '</h2>'); ?>
                                <?php the_content(); ?>
                            

                        <?php endwhile; ?>
                        <!-- post navigation -->
                        
                    <?php endif; ?>
                </div><!-- .entry-content -->

                <div class="entry-content bg-rojo">
                    <?php rewind_posts(); ?>
                    <?php query_posts('post_type=page&page_id=9'); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_title('<h2 class="entry-subtitle">', '</h2>'); ?>
                                <?php the_content(); ?>
                            

                        <?php endwhile; ?>
                        <!-- post navigation -->
                        
                    <?php endif; ?>
                </div><!-- .entry-content -->

        </article><!-- #post-<?php the_ID(); ?> -->

	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
