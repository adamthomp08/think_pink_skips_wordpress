<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Think_Pink_Skips
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

 <section class="contact-details">
        <div class="container">
            <h5>Do you have a waste enquiry?</h5>
            <div class="col">
                    <div class="icon-details">
                        <div class="sub-col">
                            <i class="icon-call-phone"></i>
                        </div>
                        <div class="sub-col last">
                            <p><span>Phone:</span><a href="tel:01524844151">01524 844 151</a></p>
                        </div>
                    </div>  
                    <div class="icon-details">
                        <div class="sub-col">
                            <i class="icon-email-envelope"></i>
                        </div>
                        <div class="sub-col last">
                            <p><span>Email:</span><a href="mailto:info@thinkpinkskips.co.uk">info@thinkpinkskips.co.uk</a></p>
                        </div>
                    </div> 
                    <div class="icon-details">
                        <div class="sub-col">
                            <i class="icon-pin-map"></i>
                        </div>
                        <div class="sub-col last">
                            <p><span>Address:</span>Unit 37,<br> Lune Industrial Estate,<br> Lancaster,<br> LA1 5QP</p>
                        </div>
                    </div>                               
            </div>
        
            <div class="col last">
				<?php echo do_shortcode('[ninja_form id=1]'); ?>
            </div> 
        </div>
</section>

