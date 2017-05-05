<?php
/**
 * Template Name: Grab Hire
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Think_Pink_Skips
 */

get_header(); 

    while ( have_posts() ) : the_post(); ?> 

        <section class="landing-banner">
            <?php the_post_thumbnail(); ?>
        </section>

         <section class="white-text-area">
            <div class="container">
                <div class="col last">

                    <h1><?php the_title(); ?></h1>
                    
                    <?php the_content(); ?>

                </div>
            </div>
        </section>

    <?php endwhile; // End of the loop.

get_sidebar( 'grab-hire' );
get_sidebar( 'sidebar-1' );
get_footer();
