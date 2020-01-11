<?php
/**
* The header for our theme.
*
* @package TemplateToaster
*/
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if IE 7]>
<style type="text/css" media="screen">
#ttr_vmenu_items  li.ttr_vmenu_items_parent {display:inline;}
</style>
<![endif]-->
<style>
<?php $var = templatetoaster_theme_option('ttr_avatar_size');
if(!empty($var)){ 
?>
.ttr_comment_author{width : <?php echo TemplateToaster_theme_option('ttr_avatar_size')."px";?>;}
<?php 
$avtar = $var + 10;
} else {
$avtar = 10;
} ?>
.ttr_comment_text{width :calc(100% - <?php echo $avtar."px"?>);}
</style>
<?php wp_head(); ?>
</head>
<?php
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
global $TemplateToaster_cssprefix;
$theme_path_content = get_template_directory_uri().'/content';
$pageClass = strtolower(preg_replace('/_page.php$/', '', get_page_template_slug()));
if(empty($pageClass) && is_home() || is_single() || is_category() || is_archive() || is_search()){$pageClass = "blog-wp";
}
if (strrchr($pageClass, '/')) {
$pageClass = substr(strrchr($pageClass, '/'), 1);
}
?>
<body <?php body_class($pageClass); ?>> 
<?php if (TemplateToaster_theme_option('ttr_back_to_top')): ?>
<?php $gotopng = TemplateToaster_theme_option('ttr_icon_back_to_top');?>
<div class="totopshow">
<?php if(!empty($gotopng)): ?>
<a href="#" class="back-to-top">
<img alt="<?php esc_attr_e('Back to Top', 'TT-7theme--0066'); ?>" src="<?php echo esc_url($gotopng); ?>">
</a>
<?php else : ?>
<a href="#" class="back-to-top">
<img alt="<?php esc_attr_e('Back to Top', 'TT-7theme--0066'); ?>" src="<?php echo get_template_directory_uri().'/images/gototop0.png';?>">
</a>
<?php endif; ?>
</div>
<?php endif; ?>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div id="ttr_page" class="container">
<div class="ttr_banner_menu">
<?php
if( is_active_sidebar( 'menuabovecolumn1'  ) || is_active_sidebar( 'menuabovecolumn2'  ) || is_active_sidebar( 'menuabovecolumn3'  ) || is_active_sidebar( 'menuabovecolumn4'  )):
?>
<div class="ttr_banner_menu_inner_above_widget_container"> <!-- _widget_container-->
<div class="ttr_banner_menu_inner_above0 container">
<?php if ( is_active_sidebar('menuabovecolumn1') ) : ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="menuabovecolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'MAWidgetArea00'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('menuabovecolumn2') ) : ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="menuabovecolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'MAWidgetArea01'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('menuabovecolumn3') ) : ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="menuabovecolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'MAWidgetArea02'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('menuabovecolumn4') ) : ?>
<div class="cell4 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="menuabovecolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'MAWidgetArea03'); ?>
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
<div class="remove_collapsing_margins"></div>
<?php if ( has_nav_menu( 'primary' ) ) : ?>
<div class="navigation-top">
<div class="wrap">
<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
</div><!-- .wrap -->
</div><!-- .navigation-top -->
<?php endif; ?>
<div class="ttr_banner_menu">
<?php
if( is_active_sidebar( 'menubelowcolumn1'  ) || is_active_sidebar( 'menubelowcolumn2'  ) || is_active_sidebar( 'menubelowcolumn3'  ) || is_active_sidebar( 'menubelowcolumn4'  )):
?>
<div class="ttr_banner_menu_inner_below_widget_container"> <!-- _widget_container-->
<div class="ttr_banner_menu_inner_below0 container">
<?php if ( is_active_sidebar('menubelowcolumn1') ) : ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="menubelowcolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'MBWidgetArea00'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('menubelowcolumn2') ) : ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="menubelowcolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'MBWidgetArea01'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('menubelowcolumn3') ) : ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="menubelowcolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'MBWidgetArea02'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('menubelowcolumn4') ) : ?>
<div class="cell4 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="menubelowcolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'MBWidgetArea03'); ?>
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