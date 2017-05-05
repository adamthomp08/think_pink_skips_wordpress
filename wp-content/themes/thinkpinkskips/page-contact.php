<?php
/**
 * Template Name: Contact 
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

    <?php endwhile; // End of the loop.

get_sidebar( 'sidebar-1' );
get_footer();
