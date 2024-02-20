<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Theme_Name
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-main">

    <?php
    if ( have_posts() ) {

        the_title();

    } else {

    
    }
    ?>

</main><!-- .site-main -->

<?php
get_footer();