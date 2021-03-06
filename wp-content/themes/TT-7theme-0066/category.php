<?php
/**
* Template Name:category
* @package TemplateToaster
*/
get_header(); ?>
<div id="ttr_content_and_sidebar_container">
<div id="ttr_content">
<div id="ttr_content_margin">
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
<?php  /*query_posts($query_string. '&showposts='.TemplateToaster_theme_option('ttr_query_result')); */query_posts($query_string . '&posts_per_page&orderby=modified&order=desc');?>
<?php if ( have_posts() ) : ?>
<?php if(TemplateToaster_theme_option('ttr_post_category_post')):?>
<h1>
<?php printf( __( 'Category: %s', 'TT-7theme--0066' ), '<span>' . single_cat_title( '', false ) . '</span>' );?>
</h1>
<?php endif; ?>
<?php
$category_description = category_description();
if ( ! empty( $category_description ) )
echo apply_filters( 'category_archive_meta', '<div>' . $category_description . '</div>' );?>
<?php TemplateToaster_content_nav( 'nav-above' ); ?>
<?php
$layoutoption=4;
$featuredpost=1;
$themelayoutoption = TemplateToaster_theme_option('ttr_post_layout');
$themefeaturedpost = TemplateToaster_theme_option('ttr_featured_post');
if(isset($themelayoutoption))
$layoutoption = TemplateToaster_theme_option('ttr_post_layout');
if(isset($themefeaturedpost))
$featuredpost = TemplateToaster_theme_option('ttr_featured_post');
?>
<?php
if($layoutoption==1)
{
while ( have_posts())
{
the_post();
get_template_part( 'content',get_post_format());
}
}
else
{
$columncount=0;
$lastpost=true;
$flag=true;
while( have_posts())
{
$lastpost=true;
if($featuredpost > 0)
{
echo '<div class="row">';
echo '<div class="col-lg-12 list">';
the_post();
get_template_part( 'content',get_post_format());
echo '</div></div>';
$featuredpost--;
$lastpost=false;
}
else
{
if($flag){
echo '<div class=" row">';
$flag=false;}
$class_suffix_lg  = round((12/$layoutoption));
if(empty($class_suffix_lg)){ 
$class_suffix_lg  =4;
}
 $md =2;
$class_suffix_md  = round((12 / $md));
 $xs =1;
$class_suffix_xs  = round((12 / $xs));
if (is_search() ) { 
echo '<div class="grid col-lg-12 col-md-12 col-sm-12 col-xs-12">';
 } else { 
echo '<div class="grid col-lg-'.$class_suffix_lg.' col-md-'.$class_suffix_md.' col-sm-'.$class_suffix_md.' col-xs-'.$class_suffix_xs.'">';
 } 
the_post();
get_template_part( 'content',get_post_format());
echo '</div>';
$columncount++;
if($columncount % $xs == 0 && $columncount != 0){ echo '<div class="visible-xs-block" style="clear:both;"></div>';}
if($columncount % $md == 0 && $columncount != 0){ echo '<div class="visible-sm-block" style="clear:both;"></div>';
echo '<div class=" visible-md-block" style="clear:both;"></div>';}
if($columncount % $layoutoption == 0 && $columncount != 0){ echo '<div class=" visible-lg-block" style="clear:both;"></div>';}
$lastpost=true;
}
}
if (!$flag){
echo '</div>';
}
}
?>
<div style="clear: both;">
<?php TemplateToaster_content_nav( 'nav-below' ); ?>
</div>
<?php else : ?>
<h1 class="ttr_post_title entry-title">
<?php _e( 'Nothing Found', 'TT-7theme--0066' ); ?></h1>
<div class="postcontent entry-content">
<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'TT-7theme--0066' ); ?></p>
<?php get_search_form(); ?>
<div style="clear: both;"></div>
</div>
<?php endif; ?>
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