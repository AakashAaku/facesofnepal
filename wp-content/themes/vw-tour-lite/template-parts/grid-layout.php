<?php
/**
 * The template part for displaying grid post
 *
 * @package VW Tours Lite 
 * @subpackage vw_tours_lite
 * @since 1.0
 */
?>
<div class="col-lg-4 col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="services-box">
      <div class="service-image">
        <?php 
          if(has_post_thumbnail()) { 
            the_post_thumbnail(); 
          }
        ?>
      </div>
      <div class="service-text">
        <h2 class="section-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_tour_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_tour_lite_excerpt_number','25')))); ?></p></div>
        <a href="<?php the_permalink(); ?>" class="read-more"><?php echo esc_html_e('Read More','vw-tour-lite'); ?><i class="fas fa-angle-right"></i><span class="screen-reader-text"><?php esc_html_e( 'Read More','vw-tour-lite' );?></span></a>
        </div>
      </div>
    <div class="clearfix"></div>
  </article>
</div>