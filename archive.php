<?php get_header() ?>
<div class="block-title">
    <div class="block-title-inner">
        <div class="inner-content">
            <h1><?php single_term_title() ?></h1>
            <div class="decor-1"></div>
            <div class="bc"><?php echo do_shortcode('[wpseo_breadcrumb]') ?></div>
        </div>
    </div>
</div> 
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="post-archive">
                <?php while(have_posts()):the_post(); ?>
                <div class=post-item>
                    <div class="thumb">
                        <a href="<?php the_permalink() ?>">
                        <?php if (has_post_thumbnail()):the_post_thumbnail('p-thumbnail');
                        else: echo '<img src="http://via.placeholder.com/300x200" alt="">';
                        endif;
                        ?>
                        </a>
                    </div>
                    <div class="info">
                        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
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
                        <div class="desc"><?php the_excerpt() ?></div>
                    </div>
                    
                </div>
                <?php endwhile; ?>
            </div>
            <ul class="bict-pagi">
                <?php bict_pagination() ?>
            </ul>
        </div>
        <div class="col-md-4">
            <?php get_sidebar() ?>
        </div>
    </div>
</div>
<?php get_footer() ?>