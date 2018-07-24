<?php
/*
 * Template name: VC template
 */
?>
<?php get_header() ?>
    <div class="body-wrapper">
        <div class="container">
            <?php if(have_posts()):the_post();
                the_content();
            endif;
            ?>

        </div>
    </div>
<?php get_footer() ?>