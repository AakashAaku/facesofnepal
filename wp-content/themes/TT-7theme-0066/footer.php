<?php
/**
* The template for displaying the footer.
*
* @package TemplateToaster
*/
?>
<?php $theme_path = get_template_directory_uri(); 
$theme_path_content = get_template_directory_uri().'/content'; ?>
<div class="footer-widget-area" role="complementary">
<div class="footer-widget-area_inner">
<?php
if( is_active_sidebar( 'footerabovecolumn1'  ) || is_active_sidebar( 'footerabovecolumn2'  ) || is_active_sidebar( 'footerabovecolumn3'  ) || is_active_sidebar( 'footerabovecolumn4'  )):
?>
<div class="ttr_footer-widget-area_inner_above_widget_container"> <!-- _widget_container-->
<div class="ttr_footer-widget-area_inner_above0 container">
<?php if ( is_active_sidebar('footerabovecolumn1') ) : ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="footerabovecolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'FAWidgetArea00'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('footerabovecolumn2') ) : ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="footerabovecolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'FAWidgetArea01'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('footerabovecolumn3') ) : ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="footerabovecolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'FAWidgetArea02'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('footerabovecolumn4') ) : ?>
<div class="cell4 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="footerabovecolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'FAWidgetArea03'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell4 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
<div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
</div> <!-- top column-->
</div> <!-- _widget_container-->
<div style="clear: both;"></div>
<?php endif; ?>
</div>
</div>
<div class="remove_collapsing_margins"></div>
<?php $postid = ( isset( $post->ID ) ? get_the_ID() : NULL );
$var = get_post_meta ( $postid, 'ttr_page_foot_checkbox', true );
if($var == "true" || $var == ""):?>
<footer id="ttr_footer">
<?php
if( is_active_sidebar( 'footercellcolumn1'  ) || is_active_sidebar( 'footercellcolumn2'  ) || is_active_sidebar( 'footercellcolumn3'  ) || is_active_sidebar( 'footercellcolumn4'  )):
?>
<div class="ttr_footer-widget-cell_inner_widget_container"> <!-- _widget_container-->
<div class="ttr_footer-widget-cell_inner0 container">
<?php if ( is_active_sidebar('footercellcolumn1') ) : ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="footercellcolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'abc00'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('footercellcolumn2') ) : ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="footercellcolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'abc01'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('footercellcolumn3') ) : ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="footercellcolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'abc02'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('footercellcolumn4') ) : ?>
<div class="cell4 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="footercellcolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'abc03'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell4 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
<div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
</div> <!-- top column-->
</div> <!-- _widget_container-->
<div style="clear: both;"></div>
<?php endif; ?>
<div id="ttr_footer_top_for_widgets">
<div class="ttr_footer_top_for_widgets_inner">
<?php get_sidebar( 'footer' ); ?>
</div>
</div>
<div class="ttr_footer_bottom_footer">
<div class="ttr_footer_bottom_footer_inner">
<div class="ttr_footer_element_alignment container">
</div>
<?php if (TemplateToaster_theme_option("ttr_copyright_disable")):?>
<div id="ttr_copyright">
<a href="<?php if (TemplateToaster_theme_option("ttr_copyright_url")):
$copyright_url = TemplateToaster_theme_option("ttr_copyright_url");
echo $copyright_url;
endif;?>">
<?php if (TemplateToaster_theme_option("ttr_copyright_text")):
$copyright_text = TemplateToaster_theme_option("ttr_copyright_text");
echo $copyright_text;
endif;
?>
</a>
</div>
<?php endif; ?>
<?php if (TemplateToaster_theme_option("ttr_show_social_media_enable")):?>
<?php if (TemplateToaster_theme_option("ttr_facebook_enable")): ?>
<a href="<?php 
$facebook_url = TemplateToaster_theme_option("ttr_facebook_url");
echo $facebook_url;
?>" <?php if (TemplateToaster_theme_option("ttr_link_new_window_enable")):  echo 'target="_blank"'; endif;?> class="ttr_footer_facebook" <?php if(TemplateToaster_theme_option('ttr_no_follow')):?> rel="nofollow"<?php endif;?>>
<img alt="footerfacebook" src="<?php echo TemplateToaster_theme_option('ttr_facebook'); ?>" />
</a>
<?php endif; ?>
<?php endif; ?>
<?php if (TemplateToaster_theme_option("ttr_show_social_media_enable")):?>
<?php if (TemplateToaster_theme_option("ttr_twitter_enable")): ?>
<a href="<?php 
$twitter_url = TemplateToaster_theme_option("ttr_twitter_url");
echo $twitter_url;
?>" <?php if (TemplateToaster_theme_option("ttr_link_new_window_enable")):  echo 'target="_blank"'; endif;?> class="ttr_footer_twitter" <?php if(TemplateToaster_theme_option('ttr_no_follow')):?> rel="nofollow"<?php endif;?>>
<img alt="footertwitter" src="<?php echo TemplateToaster_theme_option('ttr_twitter'); ?>" />
</a>
<?php endif; ?>
<?php endif; ?>
<?php if (TemplateToaster_theme_option("ttr_show_social_media_enable")):?>
<?php if (TemplateToaster_theme_option("ttr_googleplus_enable")): ?>
<a href="<?php $googleplus_url = TemplateToaster_theme_option("ttr_googleplus_url");
echo $googleplus_url;
?>" <?php if (TemplateToaster_theme_option("ttr_link_new_window_enable")):  echo 'target="_blank"'; endif;?> class="ttr_footer_googleplus" <?php if(TemplateToaster_theme_option('ttr_no_follow')):?> rel="nofollow"<?php endif;?>>
<img alt="footergoogleplus" src="<?php echo TemplateToaster_theme_option('ttr_googleplus'); ?>" />
</a>
<?php endif; ?>
<?php endif; ?>
</div>
</div>
</footer>
<?php endif; ?>
<div class="remove_collapsing_margins"></div>
<div class="footer-widget-area" role="complementary">
<div class="footer-widget-area_inner">
<?php
if( is_active_sidebar( 'footerbelowcolumn1'  ) || is_active_sidebar( 'footerbelowcolumn2'  ) || is_active_sidebar( 'footerbelowcolumn3'  ) || is_active_sidebar( 'footerbelowcolumn4'  )):
?>
<div class="ttr_footer-widget-area_inner_below_widget_container"> <!-- _widget_container-->
<div class="ttr_footer-widget-area_inner_below0 container">
<?php if ( is_active_sidebar('footerbelowcolumn1') ) : ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="footerbelowcolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'FBWidgetArea00'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('footerbelowcolumn2') ) : ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="footerbelowcolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'FBWidgetArea01'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('footerbelowcolumn3') ) : ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="footerbelowcolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'FBWidgetArea02'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('footerbelowcolumn4') ) : ?>
<div class="cell4 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="footerbelowcolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'FBWidgetArea03'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell4 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
<div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
</div> <!-- top column-->
</div> <!-- _widget_container-->
<div style="clear: both;"></div>
<?php endif; ?>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>