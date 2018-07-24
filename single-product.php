<?php get_header() ?>
    <div class="block-title">
        <div class="block-title-inner">
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
            <div class="col-md-8">
                <div class="product-content">
                    <div class="product-title">
                        <h2><?php the_title() ?></h2>
                        <div class="price">
                        <span><?php $price = get_field('price');
                            if ($price):
                                ?>
                                <?php echo number_format($price, 0, ',', '.') ?>₫
                            <?php else: echo "Liên hệ";
                            endif;
                            ?></span>
                        </div>
                    </div>
                    <?php
                    $images = get_field('gallery');
                    if ($images):
                        ?>
                        <div class="product-gallery">
                            <div class="owl-carousel owl-theme main-slider">
                                <?php foreach ($images as $image): ?>
                                    <div class="item" data-hash="<?php echo $image[ID] ?>">
                                        <a href="<?php echo $image['url']; ?>" data-lightbox="<?php the_title() ?>"><img
                                                    src="<?php echo $image['url']; ?>"></a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="owl-carousel owl-theme nav-slider">
                                <?php foreach ($images as $image): ?>
                                    <div class="item">
                                        <a href="#<?php echo $image[ID] ?>"><img
                                                    src="<?php echo $image['sizes']['p-thumbnail'] ?>" alt=""></a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Product tabs -->
                    <div class="product-tabs">
                        <ul>
                            <li class="active"><a data-toggle="tab" href="#desc">Mô tả sản phẩm</a></li>
                            <li><a data-toggle="tab" href="#info">Thông tin sản phẩm</a></li>
                            <li><a data-toggle="tab" href="#video">Video</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="desc" class="tab-pane fade in active">
                            <?php the_content() ?>
                        </div>
                        <div id="info" class="tab-pane fade">
                            <?php the_field('info') ?>
                        </div>
                        <div id="video" class="tab-pane fade">
                            <div class="embed-container">
                                <?php the_field('video'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- End product tabs -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="widget">
                        <h3 class="widget-title">Thông số sản phẩm</h3>
                        <div class="decor-1"></div>
                        <div class="widget-content">
                            <?php the_field('desc') ?>
                        </div>
                    </div>
                    <div class="widget">
                        <h3 class="widget-title">Liên hệ mua xe</h3>
                        <div class="decor-1"></div>
                        <div class="widget-content">
                            <form role="form">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Họ và tên">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Số điện thoại">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Địa chỉ Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Yêu cầu thêm (tùy chọn)"
                                              rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-bict">Gửi yêu cầu</button>
                            </form>
                        </div>
                    </div>

                    <!-- Related -->
                    <?php
                    $custom_taxterms = wp_get_object_terms($post->ID, 'product_cat', array('fields' => 'ids'));
                    // arguments
                    $args = array(
                        'post_type' => 'product',
                        'post_status' => 'publish',
                        'posts_per_page' => 5, // you may edit this number
                        'orderby' => 'rand',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'id',
                                'terms' => $custom_taxterms
                            )
                        ),
                        'post__not_in' => array($post->ID),
                    );
                    $related_items = new WP_Query($args);
                    ?>
                    <div class="widget">
                        <h3 class="widget-title">Các dòng xe liên quan</h3>
                        <div class="decor-1"></div>
                        <div class="widget-content">
                            <ul>
                                <?php while ($related_items->have_posts()) : $related_items->the_post(); ?>
                                    <li>
                                        <div class="thumb">
                                            <a href="<?php the_permalink() ?>">
                                                <?php if (has_post_thumbnail()):the_post_thumbnail('p-thumbnail');
                                                else: echo '<img src="http://via.placeholder.com/300x200" alt="">';
                                                endif;
                                                ?>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h5><?php the_title() ?></h5>
                                            <span>
                                    <?php $price = get_field('price');
                                    if ($price):
                                        ?>
                                        <?php echo number_format($price, 0, ',', '.') ?>₫
                                    <?php else: echo "Liên hệ";
                                    endif;
                                    ?>
                                    </span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php get_footer() ?>