<?php
add_action( 'wp_ajax_filter_product_cat', 'filter_product_cat_callback' );
add_action( 'wp_ajax_nopriv_filter_product_cat', 'filter_product_cat_callback' );
function filter_product_cat_callback() {
 
    ob_start();
    //do bên js để dạng json nên giá trị trả về dùng phải encode
    $term_id = (isset($_POST['danhmuc']))?esc_attr($_POST['danhmuc']) : '';
    $args = array(
        'post_type' => 'product',
        'tax_query' => array(
            array(
            'taxonomy' => 'product_cat',
            'field' => 'term_id',
            'terms' => $term_id
             )
          )
        );
    $query = new WP_Query($args);
    while($query->have_posts()):$query->the_post();
        ?>
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
        <?php
    endwhile;

    $result = ob_get_clean();
    wp_send_json_success($result);
 
    die();//bắt buộc phải có khi kết thúc
}