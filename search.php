<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Unicorn_Tears
 */

get_header(); ?>

<div class="container">
    <?php
    if ( have_posts() ) :
        get_template_part( 'template-parts/modules/module', 'page-title' );
        /* Start the Loop */
        while ( have_posts() ) : the_post();

            /**
             * Run the loop for the search to output the results.
             * If you want to overload this in a child theme then include a file
             * called content-search.php and that will be used instead.
             */
            get_template_part( 'template-parts/content', 'search' );

        endwhile;

        the_posts_navigation();

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif; ?>

</div>


<?php
//get_sidebar();
get_footer();
