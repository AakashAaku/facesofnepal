<?php
/**
* Template Name:rooms_page
* @package TemplateToaster
*/
get_header("1"); ?>
<div id="ttr_content_and_sidebar_container">
<div id="ttr_content">
<div id="ttr_html_content_margin">
<div class="remove_collapsing_margins"></div>
<?php if (TemplateToaster_theme_option("ttr_page_breadcrumb")):?>
<?php TemplateToaster_wordpress_breadcrumbs(); ?>
<?php endif; ?>
<?php
if( is_active_sidebar( 'contenttopcolumn1'  ) || is_active_sidebar( 'contenttopcolumn2'  ) || is_active_sidebar( 'contenttopcolumn3'  ) || is_active_sidebar( 'contenttopcolumn4'  )):
?>
<div class="ttr_topcolumn_widget_container"> <!-- _widget_container-->
<div class="contenttopcolumn0"> <!-- top column-->
<?php if ( is_active_sidebar('contenttopcolumn1') ) : ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="topcolumn1"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CAWidgetArea00'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('contenttopcolumn2') ) : ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="topcolumn2"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CAWidgetArea01'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('contenttopcolumn3') ) : ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="topcolumn3"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CAWidgetArea02'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('contenttopcolumn4') ) : ?>
<div class="cell4 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="topcolumn4"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CAWidgetArea03'); ?>
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
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'page' ); ?>
<?php comments_template( '', true ); ?>
<?php endwhile; // end of the loop. ?>
<?php
if( is_active_sidebar( 'contentbottomcolumn1'  ) || is_active_sidebar( 'contentbottomcolumn2'  ) || is_active_sidebar( 'contentbottomcolumn3'  ) || is_active_sidebar( 'contentbottomcolumn4'  )):
?>
<div class="ttr_bottomcolumn_widget_container"> <!-- _widget_container-->
<div class="contentbottomcolumn0"> <!-- top column-->
<?php if ( is_active_sidebar('contentbottomcolumn1') ) : ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="bottomcolumn1"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CBWidgetArea00'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('contentbottomcolumn2') ) : ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="bottomcolumn2"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CBWidgetArea01'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('contentbottomcolumn3') ) : ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="bottomcolumn3"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CBWidgetArea02'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('contentbottomcolumn4') ) : ?>
<div class="cell4 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="bottomcolumn4"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CBWidgetArea03'); ?>
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
<div class="remove_collapsing_margins"></div>
</div>
</div>
<div style="clear: both;"></div>
</div>
<?php get_footer(); ?>