<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Travellator
 * @since Travellator 1.0
 */

get_header(); ?>
	<div class="page-header-container no-featured">
    	<header class="entry-header">
            <h1 class="entry-title"><?php printf( esc_html__( 'Search Results for: %s', 'travellator' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header><!-- .page-header -->
    </div>
    
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>

			<?php endwhile; ?>
            
			<?php if (function_exists("travellator_pagination")) {
				travellator_pagination();							
			}?>
            
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
