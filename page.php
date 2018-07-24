<?php get_header() ?>
    <div class="block-title">
        <div class="block-title-inner  post-title-inner">
            <div class="inner-content">
                <h1><?php the_title() ?></h1>
                <div class="decor-1"></div>
                <div class="bc"><?php echo do_shortcode('[wpseo_breadcrumb]') ?></div>
            </div>
        </div>
    </div>
<?php if (have_posts()):the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post-content">
                    <div class="post-content-inner">
                        <h3><?php the_title() ?></h3>
                        <div class="meta">
                            <ul>
                                <li>
                                    Đăng bởi: <span><?php the_author() ?></span>
                                </li>
                                <li>
                                    Ngày đăng: <span><?php the_time('d/m/Y') ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="decor-1"></div>
                    </div>
                    <div class="post-content-main">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php get_footer() ?>