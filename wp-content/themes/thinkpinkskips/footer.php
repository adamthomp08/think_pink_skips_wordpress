<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Think_Pink_Skips
 */

?>

</body>
</html>

<footer class="footer">
<div class="container">
        <div class="col">
            <div class="sub-col">
                    <i class="icon-pin-map"></i>
            </div>
            <div class="sub-col last">
                    <p><strong class="blue">Contact us at:</strong></p>
                    <span>Unit 37 Lune Industrial Estate, Lancaster LA1 5QP </span>
                    <span>Phone: 01524 844 151 </span>
                    <span>Email: <a href="mailto:office@thinkpinkskips.co.uk">office@thinkpinkskips.co.uk</a></span>
            </div>
        </div>
         <div class="col">
                    <span class="bottom-text">Copyright 2017 - <span class="blue">A1 Supa Skips</span></span>
        </div>
         <div class="col last">
                   <p><strong>Part of the <em class="blue">A1 Supa Skips</em> family:</strong></p>
                   <span><a href="http://quayconcrete.co.uk/">Quay Concrete</a></span>
                   <span><a href="http://thinkpinkskips.co.uk/">Think Pink Skips</a></span>
                   <span><a href="http://www.enviro-first.co.uk/">Envirofirst</a></span>
        </div>
</div>
</footer>


<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="<?php echo get_template_directory_uri(); ?>/jq-ui/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>

<?php wp_footer(); ?>

