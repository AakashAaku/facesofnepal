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
#ttr_page #ttr_content .products li.product{width:calc(100%/<?php echo get_option( 'woocommerce_catalog_columns', 4 ); ?>);}
@media only screen and (max-width:992px){
.archive #ttr_page #ttr_content .products li.product:nth-child(4n+1){ float:left;width:calc(100%/4); clear:both !important;}
#ttr_page #ttr_content .products li.product:first-child,#ttr_page #ttr_content .products li.product{float:left;width:calc(100%/4);clear:none;}}
@media only screen and (max-width:767px){
.archive #ttr_page #ttr_content .products li.product:nth-child(1n+1){ float:left;width:calc(100%/1); clear:both !important;}
#ttr_page #ttr_content .products li.product:first-child,#ttr_page #ttr_content .products li.product{float:left;width:calc(100%/1);clear:none;}}
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
</div><div class="ttr_banner_header">
<?php
if( is_active_sidebar( 'headerabovecolumn1'  ) || is_active_sidebar( 'headerabovecolumn2'  ) || is_active_sidebar( 'headerabovecolumn3'  ) || is_active_sidebar( 'headerabovecolumn4'  )):
?>
<div class="ttr_banner_header_inner_above_widget_container"> <!-- _widget_container-->
<div class="ttr_banner_header_inner_above0 container">
<?php if ( is_active_sidebar('headerabovecolumn1') ) : ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="headerabovecolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'HAWidgetArea00'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('headerabovecolumn2') ) : ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="headerabovecolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'HAWidgetArea01'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('headerabovecolumn3') ) : ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="headerabovecolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'HAWidgetArea02'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('headerabovecolumn4') ) : ?>
<div class="cell4 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="headerabovecolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'HAWidgetArea03'); ?>
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
<?php $postid = ( isset( $post->ID ) ? get_the_ID() : NULL );
$var = get_post_meta ( $postid, 'ttr_page_head_checkbox', true );
if ($var == "true" || $var == ""):?>
<header id="ttr_header"<?php if ( get_header_image() ) : ?> style="background-image: url(<?php header_image(); ?>);background-position: center;"<?php endif; ?> >
<div id="ttr_header_inner">
   <div class="ttr_header_element_alignment container"></div>
   <div class="ttr_header_marquee_text row">
    <div style=" background-color:#F30; color:#FFF; border:#C30 solid thin; width:100%; font-weight:bold"> <marquee 
     behavior="scroll">HELLO FROM FACES OF NEPAL ORGANIZAITON!!!!</marquee></div>
   </div>
   <div class="ttr_header_program row">
     <div class="ttr_body_ourprogram col-md-6 col-sm-6 col-lg-6">
        
          <?php
     if ( function_exists( 'soliloquy' ) ) { soliloquy( '225' ); }
     if ( function_exists( 'soliloquy' ) ) { soliloquy( 'ourproram_slider_slug', 'slug' ); }

    ?>   
        
     </div> 
     <div class="col-xs-2 v-divider"></div>
     <div class="ttr_header_regular_program col-md-6 col-sm-6 col-lg-6">

         <?php 
       if ( function_exists( 'soliloquy' ) ) { soliloquy( '264' ); }
       if ( function_exists( 'soliloquy' ) ) { soliloquy( 'regular-program', 'slug' ); }
    ?>

     </div>
   </div>
</div>
</header>
<?php endif; ?>
<div class="ttr_banner_header">
<?php
if( is_active_sidebar( 'headerbelowcolumn1'  ) || is_active_sidebar( 'headerbelowcolumn2'  ) || is_active_sidebar( 'headerbelowcolumn3'  ) || is_active_sidebar( 'headerbelowcolumn4'  )):
?>
<div class="ttr_banner_header_inner_below_widget_container"> <!-- _widget_container-->
<div class="ttr_banner_header_inner_below0 container">
<?php if ( is_active_sidebar('headerbelowcolumn1') ) : ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="headerbelowcolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'HBWidgetArea00'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('headerbelowcolumn2') ) : ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="headerbelowcolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'HBWidgetArea01'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block visible-md-block visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('headerbelowcolumn3') ) : ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="headerbelowcolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'HBWidgetArea02'); ?>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-lg-3 col-md-6 col-sm-6  col-xs-12transparent">  <!-- topcell 2 column-->
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('headerbelowcolumn4') ) : ?>
<div class="cell4 col-lg-3 col-md-6 col-sm-6  col-xs-12"> <!-- topcell column-->
<div class="headerbelowcolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'HBWidgetArea03'); ?>
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