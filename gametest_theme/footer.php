<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-4 footer_boks">
                <?php dynamic_sidebar( 'footer_1' ); ?>
            </div>

            <div class="col-4 footer_boks">
                <?php dynamic_sidebar( 'footer_2' ); ?>
            </div>

            <div class="col-4 footer_boks">
                <?php dynamic_sidebar( 'footer_3' ); ?>
            </div>

        </div>
    </div>

    <div class="container-fulid subfooter">
        <div class="row"> 
            <div class="col-12">
                Copyright &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"> <?php bloginfo('name'); ?></a> - Alle rettigheder forbeholdes. Læs vores behandling af personoplysninger og cookies og vilkår for brug.
            </div>  
        </div>
    </div>
</div>

</body>
</html>