<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
  Template name: Skabelon: Forside
 * @package morten
 */
get_header();
?>




<div id="forside">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_title(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>	  			
<?php get_footer(); ?>