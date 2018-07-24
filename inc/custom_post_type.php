<?php
// Sản phẩm Custom Post Type
function product_post_type() {

	$labels = array(
		'name'                  => _x( 'Sản phẩm', 'Post Type General Name', 'bict' ),
		'singular_name'         => _x( 'Sản phẩm', 'Post Type Singular Name', 'bict' ),
		'menu_name'             => __( 'Sản phẩm', 'bict' ),
		'name_admin_bar'        => __( 'Sản phẩm', 'bict' ),
		'archives'              => __( 'Item Archives', 'bict' ),
		'attributes'            => __( 'Thuộc tính sp', 'bict' ),
		'parent_item_colon'     => __( 'Parent Item:', 'bict' ),
		'all_items'             => __( 'Tất cả sản phẩm', 'bict' ),
		'add_new_item'          => __( 'Thêm mới sản phẩm', 'bict' ),
		'add_new'               => __( 'Thêm mới', 'bict' ),
		'new_item'              => __( 'Sản phẩm mới', 'bict' ),
		'edit_item'             => __( 'Sửa sản phẩm', 'bict' ),
		'update_item'           => __( 'Cập nhật sản phẩm', 'bict' ),
		'view_item'             => __( 'Xem sản phẩm', 'bict' ),
		'view_items'            => __( 'View Items', 'bict' ),
		'search_items'          => __( 'Search Item', 'bict' ),
		'not_found'             => __( 'Not found', 'bict' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'bict' ),
		'featured_image'        => __( 'Ảnh đại diện', 'bict' ),
		'set_featured_image'    => __( 'Thiết lập ảnh đại diện', 'bict' ),
		'remove_featured_image' => __( 'Remove featured image', 'bict' ),
		'use_featured_image'    => __( 'Use as featured image', 'bict' ),
		'insert_into_item'      => __( 'Insert into item', 'bict' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'bict' ),
		'items_list'            => __( 'Items list', 'bict' ),
		'items_list_navigation' => __( 'Items list navigation', 'bict' ),
		'filter_items_list'     => __( 'Filter items list', 'bict' ),
	);
	$args = array(
		'label'                 => __( 'Sản phẩm', 'bict' ),
		'description'           => __( 'Sản phẩm', 'bict' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'san-pham',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'product_post_type', 0 );

// Thư viện, album Custom Post Type
function gallery_post_type() {

	$labels = array(
		'name'                  => _x( 'Album', 'Post Type General Name', 'bict' ),
		'singular_name'         => _x( 'Album', 'Post Type Singular Name', 'bict' ),
		'menu_name'             => __( 'Album', 'bict' ),
		'name_admin_bar'        => __( 'Album', 'bict' ),
		'archives'              => __( 'Tất cả album', 'bict' ),
		'attributes'            => __( 'Item Attributes', 'bict' ),
		'parent_item_colon'     => __( 'Parent Item:', 'bict' ),
		'all_items'             => __( 'All Items', 'bict' ),
		'add_new_item'          => __( 'Thê mới album', 'bict' ),
		'add_new'               => __( 'Thêm mới', 'bict' ),
		'new_item'              => __( 'Album mới', 'bict' ),
		'edit_item'             => __( 'Sửa album', 'bict' ),
		'update_item'           => __( 'Cập nhật album', 'bict' ),
		'view_item'             => __( 'View Item', 'bict' ),
		'view_items'            => __( 'View Items', 'bict' ),
		'search_items'          => __( 'Search Item', 'bict' ),
		'not_found'             => __( 'Not found', 'bict' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'bict' ),
		'featured_image'        => __( 'Featured Image', 'bict' ),
		'set_featured_image'    => __( 'Set featured image', 'bict' ),
		'remove_featured_image' => __( 'Remove featured image', 'bict' ),
		'use_featured_image'    => __( 'Use as featured image', 'bict' ),
		'insert_into_item'      => __( 'Insert into item', 'bict' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'bict' ),
		'items_list'            => __( 'Items list', 'bict' ),
		'items_list_navigation' => __( 'Items list navigation', 'bict' ),
		'filter_items_list'     => __( 'Filter items list', 'bict' ),
	);
	$args = array(
		'label'                 => __( 'Album', 'bict' ),
		'description'           => __( 'Thư viện, album ảnh', 'bict' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'thu-vien',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gallery', $args );

}
add_action( 'init', 'gallery_post_type', 0 );