<?php
/**
 * Template Name: Homepage  */

get_header(); ?>

<section class="homepage-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/home_banner_temp.jpg" alt="Home Page Banner" />
        <div class="container">
            <div class="into-msg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/think_pink_header_image_text.svg" alt="Go Green... Think Pink. We divert up to 97% of waste away from land" />
            </div>
        </div>
</section>

 <section class="icon-blocks-3">
        <div class="container">
                <div class="col pink">
                    <i class="icon-skip-hire-icon"></i> 
                    <h2>Skip Hire</h2>
                    <p>Pudantio. Etusam labo. Berae comnis recto et hictur ad ex et es is aut ea cuscili atemped ipsanda.</p>
                    <a href="/skip-hire/">Read more</a>
                </div>
                <div class="col yellow">
                    <i class="icon-grab-hir-icon"></i>  
                    <h2>Grab Hire</h2>
                    <p>Pudantio. Etusam labo. Berae comnis recto et hictur ad ex et es is aut ea cuscili atemped ipsanda.</p>
                    <a href="/grab-hire/">Read more</a>
                </div>
                <div class="col light-pink last">
                    <i class="icon-sweeper-hire-icon"></i>  
                    <h2>Sweeper Hire</h2>
                    <p>Pudantio. Etusam labo. Berae comnis recto et hictur ad ex et es is aut ea cuscili atemped ipsanda.</p>
                    <a href="/sweeper-hire/">Read more</a>
                </div>
        </div>
</section>

<section class="home-intro">
        <div class="container">
                <div class="col">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/large_skip.jpg" alt="Large Pink Skip" />
                </div>
                <div class="col last">
					<?php
						while ( have_posts() ) : the_post();
							the_content();
						endwhile; // End of the loop.
					?>
                </div>
        </div>
</section>

<section class="icon-blocks-4">
        <div class="container">
                <h3>Why Choose Us?</h3>
                <div class="col">
                    <i class="icon-domestic-icon"></i>
                    
                    <h4>Domestic</h4>
                    <p>officimus, odi nobiscienti ra vendi</p>
                </div>
                <div class="col">
                    <i class="icon-commercial-icon"></i>
                    
                    <h4>Commercial</h4>
                    <p>officimus, odi nobiscienti ra vendi</p>
                </div>
                <div class="col">
                    <i class="icon-fully-licensed-icon"></i>
                    
                    <h4>Fully Licensed</h4>
                    <p>officimus, odi nobiscienti ra vendi</p>
                </div>
                <div class="col last">
                    <i class="icon-quick-response-icon"></i>
                    
                    <h4>Quick Response</h4>
                    <p>officimus, odi nobiscienti ra vendi</p>
                </div>
        </div>
</section>

<?php

get_sidebar();
get_footer();
