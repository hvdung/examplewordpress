<?php
// Register Custom Taxonomy
function product_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Danh mục sản phẩm', 'Taxonomy General Name', 'bict' ),
		'singular_name'              => _x( 'Danh mục sản phẩm', 'Taxonomy Singular Name', 'bict' ),
		'menu_name'                  => __( 'Danh mục sản phẩm', 'bict' ),
		'all_items'                  => __( 'Tất cả danh mục', 'bict' ),
		'parent_item'                => __( 'Parent Item', 'bict' ),
		'parent_item_colon'          => __( 'Parent Item:', 'bict' ),
		'new_item_name'              => __( 'Tên danh mục mới', 'bict' ),
		'add_new_item'               => __( 'Thêm mới danh mục', 'bict' ),
		'edit_item'                  => __( 'Sửa danh mục', 'bict' ),
		'update_item'                => __( 'Cập nhật danh mục', 'bict' ),
		'view_item'                  => __( 'Xem danh mục', 'bict' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'bict' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'bict' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'bict' ),
		'popular_items'              => __( 'Popular Items', 'bict' ),
		'search_items'               => __( 'Search Items', 'bict' ),
		'not_found'                  => __( 'Not Found', 'bict' ),
		'no_terms'                   => __( 'No items', 'bict' ),
		'items_list'                 => __( 'Items list', 'bict' ),
		'items_list_navigation'      => __( 'Items list navigation', 'bict' ),
	);
	$rewrite = array(
		'slug'                       => 'danh-muc',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'product_cat', array( 'product' ), $args );

}
add_action( 'init', 'product_taxonomy', 0 );