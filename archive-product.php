<?php get_header() ?>
<div class="block-title">
    <div class="block-title-inner">
        <div class="inner-content">
            <h1>Sản phẩm</h1>
            <div class="decor-1"></div>
            <div class="bc"><?php echo do_shortcode('[wpseo_breadcrumb]') ?></div>
        </div>
    </div>
</div> 
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="product-archive tab-content">
                <div class="row">
                    <?php while(have_posts()):the_post(); ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="tab-item text-center">
                            <figure>
                                <a href="#">
                                    <?php if (has_post_thumbnail()):the_post_thumbnail('p-thumbnail');
                                    else: echo '<img src="http://via.placeholder.com/300x200" alt="">';
                                    endif;
                                    ?>
                                </a>
                                <div class="ovrly"></div>
                                <div class="buttons">
                                    <a href="<?php the_permalink() ?>" class="fa fa-link"></a>
                                    <a class="fa fa-eye click_quickview"
                                     data-id="<?php the_ID() ?>"
                                     ></a>
                                </div>
                            </figure>
                            <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            <span>
                        <?php $price = get_field('price');
                        if ($price):
                            ?>
                            <?php echo number_format($price, 0, ',', '.') ?>₫
                        <?php else: echo "Liên hệ";
                        endif;
                        ?>
                        </span>
                            <a href="<?php the_permalink() ?>" class="more">Xem chi tiết</a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <ul class="bict-pagi">
                <?php bict_pagination() ?>
            </ul>
        </div>
        <div class="col-md-4">
            <?php get_sidebar('filter-products') ?>
        </div>
    </div>
</div>
<?php get_footer() ?>