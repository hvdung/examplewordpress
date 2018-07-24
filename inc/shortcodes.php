<?php

add_shortcode('bict_welcome', 'bict_welcome');
function bict_welcome($atts, $content = null)
{
    extract(shortcode_atts(array(
        'title1' => '', 'title2' => '', 'title3' => '',

    ), $atts));

    ob_start();
    ?>
    <div class="main-block text-center">
        <p class="label"><?php echo esc_attr($title1); ?></p>
        <div class="decor-1"></div>
        <h1 class="title"><strong><?php echo esc_attr($title2); ?></strong> <?php echo esc_attr($title3); ?></h1>
        <div class="decor-2">
            <i class="icon fa fa-caret-down"></i>
        </div>

        <div class="side-img hidden-xs hidden-sm">
            <img class="img-left"
                 src="<?php bloginfo('stylesheet_directory') ?>/assets/images/toyota-camry-2017-black.png" alt="">
            <img class="img-right"
                 src="<?php bloginfo('stylesheet_directory') ?>/assets/images/toyota-camry-2017-black-flip.png" alt="">
        </div>
    </div>
    <?php
    return ob_get_clean();
}


add_shortcode('bict_tab_product', 'bict_tab_product');
function bict_tab_product($atts, $content = null)
{
    extract(shortcode_atts(array(
        'num' => '', 'ids' => ''

    ), $atts));

    ob_start();
    $post_ids = explode(',', $ids);
    ?>
    <ul class="bict-tabs">
        <li class="active"><a data-toggle="tab" href="#home"><img
                        src="<?php bloginfo('stylesheet_directory') ?>/assets/images/favicon.png" alt="">Dòng sản phẩm
                mới</a></li>
        <li><a data-toggle="tab" href="#menu1"><img
                        src="<?php bloginfo('stylesheet_directory') ?>/assets/images/favicon.png" alt="">Dòng sản phẩm
                bán chạy</a></li>
    </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="row">
                <?php
                $query = new WP_Query(array('posts_per_page' => $num, 'orderby' => 'date', 'order' => 'desc', 'post_type' => 'product'));
                while ($query->have_posts()):$query->the_post();
                    ?>
                    <div class="col-sm-6 col-xs-6 col-md-3">
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
        <div id="menu1" class="tab-pane fade">
            <div class="row">
                <?php
                foreach ($post_ids as $id):
                    $data = array('p' => $id, 'orderby' => 'date', 'order' => 'DESC', 'post_type' => 'product');
                    $query = new wp_query($data);
                    while ($query->have_posts()):
                        $query->the_post();
                        ?>
                        <div class="col-sm-6 col-xs-6 col-md-3">
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
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endforeach;
                ?>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}