<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Holiday Tours
 */
?>
    <div class="footersec">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-1');?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-2');?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-3');?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-4');?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrapper">
    	<div class="container">
            <div class="clear"></div> 
            <div class="copyright">
               <p><?php echo esc_html(get_theme_mod('vw_tour_lite_child_footer_copy',__('Powered By','holiday-tours'))); ?> <?php holiday_tours_credit(); ?></p>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>

</body>
</html>