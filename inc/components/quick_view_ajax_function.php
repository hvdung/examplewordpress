<?php
add_action( 'wp_ajax_quickview', 'quickview_callback' );
add_action( 'wp_ajax_nopriv_quickview', 'quickview_callback' );
function quickview_callback() {
 
    //do bên js để dạng json nên giá trị trả về dùng phải encode
    $id = (isset($_POST['pid']))?esc_attr($_POST['pid']) : '';

    $product = get_post($id);
    $title=$product->post_title;
    $desc=get_post_meta($id,'desc',true);
    $price = get_post_meta($id,'price',true);
    $gallery = get_post_meta($id,'gallery',true);

    $img_arr=[];
    foreach($gallery as $image):
        $url=wp_get_attachment_url($image);
        $img_arr[]=$url;
    endforeach;

    $mang = array(
        'title' => $title,
        'desc' => $desc,
        'price' => $price,
        'image' => $img_arr
    );


    wp_send_json_success($mang);
 
    die();//bắt buộc phải có khi kết thúc
}