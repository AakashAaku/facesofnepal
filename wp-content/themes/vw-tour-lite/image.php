<?php
/**
 * The template for displaying image attachments.
 *
 * @package VW Tour Lite
 */

get_header(); ?>

<main id="maincontent" role="main" class="content-vw">
    <div class="container">
        <div class="middle-align">
            <?php
                $left_right = get_theme_mod( 'vw_tour_lite_theme_options','Right Sidebar');
                if($left_right == 'Left Sidebar'){ ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
                    <div class="col-lg-8 col-md-8">
                        <?php while ( have_posts() ) : the_post(); ?>    
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-content">
                                    <h1><?php the_title();?></h1>    
                                    <div class="entry-attachment">
                                        <div class="attachment">
                                            <?php vw_tour_lite_the_attached_image(); ?>
                                        </div>
                
                                        <?php if ( has_excerpt() ) : ?>
                                            <div class="entry-caption">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>    
                                    <?php
                                        the_content();
                                        wp_link_pages( array(
                                            'before' => '<div class="page-links">' . __( 'Pages:', 'vw-tour-lite' ),
                                            'after'  => '</div>',
                                        ) );
                                    ?>
                                </div>    
                                <?php edit_post_link( __( 'Edit', 'vw-tour-lite' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
                            </article>    
                            <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if ( comments_open() || '0' != get_comments_number() )
                                    comments_template();

                                if ( is_singular( 'attachment' ) ) {
                                    // Parent post navigation.
                                    the_post_navigation( array(
                                        'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-tour-lite' ),
                                    ) );
                                } elseif ( is_singular( 'post' ) ) {
                                    // Previous/next post navigation.
                                    the_post_navigation( array(
                                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="screen-reader-text">' . __( 'Next post:', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="post-title">%title</span>',
                                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="post-title">%title</span>',
                                    ) );
                                }
                            
                            ?>    
                        <?php endwhile; // end of the loop. ?>
                    </div>
                </div>
            <?php }else if($left_right == 'Right Sidebar'){ ?>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <?php while ( have_posts() ) : the_post(); ?>    
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-content">
                                    <h1><?php the_title();?></h1>    
                                    <div class="entry-attachment">
                                        <div class="attachment">
                                            <?php vw_tour_lite_the_attached_image(); ?>
                                        </div>        
                                        <?php if ( has_excerpt() ) : ?>
                                            <div class="entry-caption">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>    
                                    <?php
                                        the_content();
                                        wp_link_pages( array(
                                            'before' => '<div class="page-links">' . __( 'Pages:', 'vw-tour-lite' ),
                                            'after'  => '</div>',
                                        ) );
                                    ?>
                                </div>    
                                <?php edit_post_link( __( 'Edit', 'vw-tour-lite' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
                            </article>    
                            <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if ( comments_open() || '0' != get_comments_number() )
                                    comments_template();

                                if ( is_singular( 'attachment' ) ) {
                                    // Parent post navigation.
                                    the_post_navigation( array(
                                        'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-tour-lite' ),
                                    ) );
                                } elseif ( is_singular( 'post' ) ) {
                                    // Previous/next post navigation.
                                    the_post_navigation( array(
                                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="screen-reader-text">' . __( 'Next post:', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="post-title">%title</span>',
                                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="post-title">%title</span>',
                                    ) );
                                }
                            
                            ?>    
                        <?php endwhile; // end of the loop. ?>
                    </div>
                    <div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
                </div>
            <?php }else if($left_right == 'One Column'){ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <h1><?php the_title();?></h1>    
                            <div class="entry-attachment">
                                <div class="attachment">
                                    <?php vw_tour_lite_the_attached_image(); ?>
                                </div>        
                                <?php if ( has_excerpt() ) : ?>
                                    <div class="entry-caption">
                                        <?php the_excerpt(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>    
                            <?php
                                the_content();
                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . __( 'Pages:', 'vw-tour-lite' ),
                                    'after'  => '</div>',
                                ) );
                            ?>
                        </div>    
                        <?php edit_post_link( __( 'Edit', 'vw-tour-lite' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
                    </article>    
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() )
                            comments_template();

                        if ( is_singular( 'attachment' ) ) {
                            // Parent post navigation.
                            the_post_navigation( array(
                                'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-tour-lite' ),
                            ) );
                        } elseif ( is_singular( 'post' ) ) {
                            // Previous/next post navigation.
                            the_post_navigation( array(
                                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'vw-tour-lite' ) . '</span> ' .
                                    '<span class="screen-reader-text">' . __( 'Next post:', 'vw-tour-lite' ) . '</span> ' .
                                    '<span class="post-title">%title</span>',
                                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'vw-tour-lite' ) . '</span> ' .
                                    '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-tour-lite' ) . '</span> ' .
                                    '<span class="post-title">%title</span>',
                            ) );
                        }
                    
                    ?>    
                <?php endwhile; // end of the loop. ?>
            <?php }else if($left_right == 'Three Columns'){ ?>
                <div class="row">
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
                    <div class="col-lg-6 col-md-6">
                        <?php while ( have_posts() ) : the_post(); ?>    
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-content">
                                    <h1><?php the_title();?></h1>    
                                    <div class="entry-attachment">
                                        <div class="attachment">
                                            <?php vw_tour_lite_the_attached_image(); ?>
                                        </div>        
                                        <?php if ( has_excerpt() ) : ?>
                                            <div class="entry-caption">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>    
                                    <?php
                                        the_content();
                                        wp_link_pages( array(
                                            'before' => '<div class="page-links">' . __( 'Pages:', 'vw-tour-lite' ),
                                            'after'  => '</div>',
                                        ) );
                                    ?>
                                </div>    
                                <?php edit_post_link( __( 'Edit', 'vw-tour-lite' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
                            </article>    
                            <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if ( comments_open() || '0' != get_comments_number() )
                                    comments_template();

                                if ( is_singular( 'attachment' ) ) {
                                    // Parent post navigation.
                                    the_post_navigation( array(
                                        'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-tour-lite' ),
                                    ) );
                                } elseif ( is_singular( 'post' ) ) {
                                    // Previous/next post navigation.
                                    the_post_navigation( array(
                                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="screen-reader-text">' . __( 'Next post:', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="post-title">%title</span>',
                                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="post-title">%title</span>',
                                    ) );
                                }
                            
                            ?>    
                        <?php endwhile; // end of the loop. ?>
                    </div>
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
                </div>
            <?php }else if($left_right == 'Four Columns'){ ?>
                <div class="row">
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
                    <div class="col-lg-3 col-md-3">
                        <?php while ( have_posts() ) : the_post(); ?>    
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-content">
                                    <h1><?php the_title();?></h1>    
                                    <div class="entry-attachment">
                                        <div class="attachment">
                                            <?php vw_tour_lite_the_attached_image(); ?>
                                        </div>        
                                        <?php if ( has_excerpt() ) : ?>
                                            <div class="entry-caption">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>    
                                    <?php
                                        the_content();
                                        wp_link_pages( array(
                                            'before' => '<div class="page-links">' . __( 'Pages:', 'vw-tour-lite' ),
                                            'after'  => '</div>',
                                        ) );
                                    ?>
                                </div>    
                                <?php edit_post_link( __( 'Edit', 'vw-tour-lite' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
                            </article>    
                            <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if ( comments_open() || '0' != get_comments_number() )
                                    comments_template();

                                if ( is_singular( 'attachment' ) ) {
                                    // Parent post navigation.
                                    the_post_navigation( array(
                                        'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-tour-lite' ),
                                    ) );
                                } elseif ( is_singular( 'post' ) ) {
                                    // Previous/next post navigation.
                                    the_post_navigation( array(
                                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="screen-reader-text">' . __( 'Next post:', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="post-title">%title</span>',
                                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="post-title">%title</span>',
                                    ) );
                                }
                            
                            ?>    
                        <?php endwhile; // end of the loop. ?>
                    </div>
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-3' ); ?></div>
                </div>
            <?php }else if($left_right == 'Grid Layout'){ ?>
                <div class="row">
                    <div class="col-lg-8 col-md-8 row">
                        <?php while ( have_posts() ) : the_post(); ?>    
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-content">
                                    <h1><?php the_title();?></h1>    
                                    <div class="entry-attachment">
                                        <div class="attachment">
                                            <?php vw_tour_lite_the_attached_image(); ?>
                                        </div>
                
                                        <?php if ( has_excerpt() ) : ?>
                                            <div class="entry-caption">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>    
                                    <?php
                                        the_content();
                                        wp_link_pages( array(
                                            'before' => '<div class="page-links">' . __( 'Pages:', 'vw-tour-lite' ),
                                            'after'  => '</div>',
                                        ) );
                                    ?>
                                </div>    
                                <?php edit_post_link( __( 'Edit', 'vw-tour-lite' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
                            </article>    
                            <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if ( comments_open() || '0' != get_comments_number() )
                                    comments_template();

                                if ( is_singular( 'attachment' ) ) {
                                    // Parent post navigation.
                                    the_post_navigation( array(
                                        'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-tour-lite' ),
                                    ) );
                                } elseif ( is_singular( 'post' ) ) {
                                    // Previous/next post navigation.
                                    the_post_navigation( array(
                                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="screen-reader-text">' . __( 'Next post:', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="post-title">%title</span>',
                                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="post-title">%title</span>',
                                    ) );
                                }
                            
                            ?>    
                        <?php endwhile; // end of the loop. ?>
                    </div>
                    <div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
                </div>
            <?php }else { ?>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <?php while ( have_posts() ) : the_post(); ?>    
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-content">
                                    <h1><?php the_title();?></h1>    
                                    <div class="entry-attachment">
                                        <div class="attachment">
                                            <?php vw_tour_lite_the_attached_image(); ?>
                                        </div>        
                                        <?php if ( has_excerpt() ) : ?>
                                            <div class="entry-caption">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>    
                                    <?php
                                        the_content();
                                        wp_link_pages( array(
                                            'before' => '<div class="page-links">' . __( 'Pages:', 'vw-tour-lite' ),
                                            'after'  => '</div>',
                                        ) );
                                    ?>
                                </div>    
                                <?php edit_post_link( __( 'Edit', 'vw-tour-lite' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
                            </article>    
                            <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if ( comments_open() || '0' != get_comments_number() )
                                    comments_template();

                                if ( is_singular( 'attachment' ) ) {
                                    // Parent post navigation.
                                    the_post_navigation( array(
                                        'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-tour-lite' ),
                                    ) );
                                } elseif ( is_singular( 'post' ) ) {
                                    // Previous/next post navigation.
                                    the_post_navigation( array(
                                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="screen-reader-text">' . __( 'Next post:', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="post-title">%title</span>',
                                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-tour-lite' ) . '</span> ' .
                                            '<span class="post-title">%title</span>',
                                    ) );
                                }
                            
                            ?>    
                        <?php endwhile; // end of the loop. ?>
                    </div>
                    <div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
                </div>
            <?php }?>
            <div class="clear"></div>
        </div>
    </div>
</main>

<?php get_footer(); ?>