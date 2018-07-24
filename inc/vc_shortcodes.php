<?php

function bict_get_posts_data($post_type) {
    $posts = get_posts( array(
        'posts_per_page' 	=> -1,
        'post_type'			=> $post_type,
    ));
    $result = array();
    foreach ( $posts as $post )	{
        $result[] = array(
            'value' => $post->ID,
            'label' => $post->post_title,
        );
    }
    return $result;
}



add_action('vc_before_init','bict_vc_map');
function bict_vc_map(){
    vc_map( array(
        'name' => esc_html__('Welcome', 'bict'),
        'base' => 'bict_welcome',
        'category' => esc_html__('BICT', 'bict'),
        'icon' => '',
        "params" => array(
            array(
                "type"      => "textfield",
                "holder"    => "div",
                "class"     => "",
                "heading"   => __("Tiêu đề top", 'bict'),
                "param_name"=> "title1",
                "value"     => "",
                "description" => __("", 'bict')
            ),
            array(
                "type"      => "textfield",
                "holder"    => "div",
                "class"     => "",
                "heading"   => __("Tiêu đề chính", 'bict'),
                "param_name"=> "title2",
                "value"     => "",
                "description" => __("", 'bict')
            ),
            array(
                "type"      => "textfield",
                "holder"    => "div",
                "class"     => "",
                "heading"   => __("Tiêu đề phụ", 'bict'),
                "param_name"=> "title3",
                "value"     => "",
                "description" => __("", 'bict')
            ),
        )
    ) );

    vc_map( array(
        'name' => esc_html__('Tab sản phẩm', 'bict'),
        'base' => 'bict_tab_product',
        'category' => esc_html__('BICT', 'bict'),
        'icon' => '',
        "params" => array(
            array(
                "type"      => "textfield",
                "holder"    => "div",
                "class"     => "",
                "heading"   => __("Số lượng sản phẩm", 'bict'),
                "param_name"=> "num",
                "value"     => "",
                "group"     => "Sản phẩm mới",
                "description" => __("", 'bict')
            ),
            array(
                "type"      => "autocomplete",
                "holder"    => "div",
                "class"     => "",
                "heading"   => __("Chọn các sản phẩm bán chạy (tự chọn)", 'bict'),
                "param_name"=> "ids",
                "group"     => "Sản phẩm bán chạy",
                'settings'    => array(
                    'values' => bict_get_posts_data('product'),
                    'multiple' => true,
                    'sortable' => true,
                ),
            ),
        )
    ) );
}