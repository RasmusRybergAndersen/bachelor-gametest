<?php
get_header();
global $wp_query;
?>
<div class="wapper">
  <div class="contentarea clearfix">
    <div class="content">
      <h1 class="search-title"> <?php echo $wp_query->found_posts; ?>
        <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>" </h1>

        <?php

        if (have_posts() && strlen( trim(get_search_query()) ) != 0 ) : while (have_posts()) : the_post(); ?>
         
              <a href="<?php the_permalink();?>">
        <h4><?php the_title();?></h4>
         
        </a>
        <p>
                                        <?php $summary = get_field('beskrivelse');
                                            $summary = substr($summary, 0, 100);
                                            $summary = $summary .    '...';
                                            echo $summary;   
                                        ?>
                                        </p>
        <hr>
         
         
        <?php endwhile;  ?>
        <?php echo paginate_links(); ?>
        <?php else:?>
         
         
        <h3>Ingen resultater fundet.</h3>
         
         
        <?php endif; ?>
        
        <?php get_footer(); ?>