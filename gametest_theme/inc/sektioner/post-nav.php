<div class="post_nav">
    <?php previous_posts_link('Tilbage') ?>
    
    <?php
    $current_page = max( 1, get_query_var('paged') );
    $total_pages = $loop->max_num_pages;
    echo 'Side '.$current_page.' af '.$total_pages;
    ?>                                

    <?php next_posts_link('Frem', $loop->max_num_pages)?>
</div>