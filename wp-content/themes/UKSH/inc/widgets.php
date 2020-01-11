<?php
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );



// Tabs Section
// function tabsSection() {

// 	$labels = array(
// 		'name'                  => _x( 'Members Section', 'Post Type General Name', 'text_domain' ),
// 		'singular_name'         => _x( 'Members Section', 'Post Type Singular Name', 'text_domain' ),
// 		'menu_name'             => __( 'Members Section', 'text_domain' ),
// 		'name_admin_bar'        => __( '', 'text_domain' ),
// 		'archives'              => __( 'Item Archives', 'text_domain' ),
// 		'attributes'            => __( 'Item Attributes', 'text_domain' ),
// 		'parent_item_colon'     => __( 'Parent Member:', 'text_domain' ),
// 		'all_items'             => __( 'All Members', 'text_domain' ),
// 		'add_new_item'          => __( 'Add New Member', 'text_domain' ),
// 		'add_new'               => __( 'Add New', 'text_domain' ),
// 		'new_item'              => __( 'New Member', 'text_domain' ),
// 		'edit_item'             => __( 'Edit Member', 'text_domain' ),
// 		'update_item'           => __( 'Update Member', 'text_domain' ),
// 		'view_item'             => __( 'View Member', 'text_domain' ),
// 		'view_items'            => __( 'View Members', 'text_domain' ),
// 		'search_items'          => __( 'Search Member', 'text_domain' ),
// 		'not_found'             => __( 'Not found', 'text_domain' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
// 		'featured_image'        => __( 'Featured Image', 'text_domain' ),
// 		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
// 		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
// 		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
// 		'items_list'            => __( 'Items list', 'text_domain' ),
// 		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
// 		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
// 	);
// 	$args = array(
// 		'label'                 => __( 'Members Section', 'text_domain' ),
// 		'description'           => __( 'News Description', 'text_domain' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
// 		'taxonomies'            => array( 'category', 'post_tag' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'tabssection', $args );

// }
// add_action( 'init', 'tabsSection', 0 );


// Register HomePage Custom Post
// function newspost() {

// 	$labels = array(
// 		'name'                  => _x( 'Latest News', 'Post Type General Name', 'text_domain' ),
// 		'singular_name'         => _x( 'Latest News', 'Post Type Singular Name', 'text_domain' ),
// 		'menu_name'             => __( 'Latest News', 'text_domain' ),
// 		'name_admin_bar'        => __( '', 'text_domain' ),
// 		'archives'              => __( 'Item Archives', 'text_domain' ),
// 		'attributes'            => __( 'Item Attributes', 'text_domain' ),
// 		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
// 		'all_items'             => __( 'All Items', 'text_domain' ),
// 		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
// 		'add_new'               => __( 'Add New', 'text_domain' ),
// 		'new_item'              => __( 'New Item', 'text_domain' ),
// 		'edit_item'             => __( 'Edit Item', 'text_domain' ),
// 		'update_item'           => __( 'Update Item', 'text_domain' ),
// 		'view_item'             => __( 'View Item', 'text_domain' ),
// 		'view_items'            => __( 'View Items', 'text_domain' ),
// 		'search_items'          => __( 'Search Item', 'text_domain' ),
// 		'not_found'             => __( 'Not found', 'text_domain' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
// 		'featured_image'        => __( 'Featured Image', 'text_domain' ),
// 		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
// 		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
// 		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
// 		'items_list'            => __( 'Items list', 'text_domain' ),
// 		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
// 		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
// 	);
// 	$args = array(
// 		'label'                 => __( 'Latest News', 'text_domain' ),
// 		'description'           => __( 'News Description', 'text_domain' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
// 		'taxonomies'            => array( 'category', 'post_tag' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'newspost', $args );

// }
// add_action( 'init', 'newspost', 0 );



// Register About Post
// function aboutus() {

// 	$labels = array(
// 		'name'                  => _x( 'About', 'Post Type General Name', 'text_domain' ),
// 		'singular_name'         => _x( 'About', 'Post Type Singular Name', 'text_domain' ),
// 		'menu_name'             => __( 'About', 'text_domain' ),
// 		'name_admin_bar'        => __( '', 'text_domain' ),
// 		'archives'              => __( 'Item Archives', 'text_domain' ),
// 		'attributes'            => __( 'Item Attributes', 'text_domain' ),
// 		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
// 		'all_items'             => __( 'All Items', 'text_domain' ),
// 		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
// 		'add_new'               => __( 'Add New', 'text_domain' ),
// 		'new_item'              => __( 'New Item', 'text_domain' ),
// 		'edit_item'             => __( 'Edit Item', 'text_domain' ),
// 		'update_item'           => __( 'Update Item', 'text_domain' ),
// 		'view_item'             => __( 'View Item', 'text_domain' ),
// 		'view_items'            => __( 'View Items', 'text_domain' ),
// 		'search_items'          => __( 'Search Item', 'text_domain' ),
// 		'not_found'             => __( 'Not found', 'text_domain' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
// 		'featured_image'        => __( 'Featured Image', 'text_domain' ),
// 		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
// 		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
// 		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
// 		'items_list'            => __( 'Items list', 'text_domain' ),
// 		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
// 		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),

// 	);
// 	$args = array(
// 		'label'                 => __( 'About', 'text_domain' ),
// 		'description'           => __( 'About Description', 'text_domain' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
// 		'taxonomies'            => array( 'category', 'post_tag' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'about', $args );

// }
// add_action( 'init', 'aboutus', 0 );


	// Register About Post
	// function contactus() {

	// 	$labels = array(
	// 		'name'                  => _x( 'Contact Us', 'Post Type General Name', 'text_domain' ),
	// 		'singular_name'         => _x( 'Contact Us', 'Post Type Singular Name', 'text_domain' ),
	// 		'menu_name'             => __( 'Contact Us', 'text_domain' ),
	// 		'name_admin_bar'        => __( '', 'text_domain' ),
	// 		'archives'              => __( 'Item Archives', 'text_domain' ),
	// 		'attributes'            => __( 'Item Attributes', 'text_domain' ),
	// 		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
	// 		'all_items'             => __( 'All Items', 'text_domain' ),
	// 		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
	// 		'add_new'               => __( 'Add New', 'text_domain' ),
	// 		'new_item'              => __( 'New Item', 'text_domain' ),
	// 		'edit_item'             => __( 'Edit Item', 'text_domain' ),
	// 		'update_item'           => __( 'Update Item', 'text_domain' ),
	// 		'view_item'             => __( 'View Item', 'text_domain' ),
	// 		'view_items'            => __( 'View Items', 'text_domain' ),
	// 		'search_items'          => __( 'Search Item', 'text_domain' ),
	// 		'not_found'             => __( 'Not found', 'text_domain' ),
	// 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	// 		'featured_image'        => __( 'Featured Image', 'text_domain' ),
	// 		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	// 		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	// 		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	// 		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
	// 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
	// 		'items_list'            => __( 'Items list', 'text_domain' ),
	// 		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
	// 		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	// 	);
	// 	$args = array(
	// 		'label'                 => __( 'Contact Us', 'text_domain' ),
	// 		'description'           => __( 'Contact Us Description', 'text_domain' ),
	// 		'labels'                => $labels,
	// 		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
	// 		'taxonomies'            => array( 'category', 'post_tag' ),
	// 		'hierarchical'          => false,
	// 		'public'                => true,
	// 		'show_ui'               => true,
	// 		'show_in_menu'          => true,
	// 		'menu_position'         => 5,
	// 		'show_in_admin_bar'     => true,
	// 		'show_in_nav_menus'     => true,
	// 		'can_export'            => true,
	// 		'has_archive'           => true,
	// 		'exclude_from_search'   => false,
	// 		'publicly_queryable'    => true,
	// 		'capability_type'       => 'page',
	// 	);
	// 	register_post_type( 'contactus', $args );

	// }
	// add_action( 'init', 'contactus', 0 );


	// Register About Post
	// function gallerypage() {

	// 	$labels = array(
	// 		'name'                  => _x( 'Gallery Page', 'Post Type General Name', 'text_domain' ),
	// 		'singular_name'         => _x( 'Gallery Page', 'Post Type Singular Name', 'text_domain' ),
	// 		'menu_name'             => __( 'Gallery Page', 'text_domain' ),
	// 		'name_admin_bar'        => __( '', 'text_domain' ),
	// 		'archives'              => __( 'Item Archives', 'text_domain' ),
	// 		'attributes'            => __( 'Item Attributes', 'text_domain' ),
	// 		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
	// 		'all_items'             => __( 'All Items', 'text_domain' ),
	// 		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
	// 		'add_new'               => __( 'Add New', 'text_domain' ),
	// 		'new_item'              => __( 'New Item', 'text_domain' ),
	// 		'edit_item'             => __( 'Edit Item', 'text_domain' ),
	// 		'update_item'           => __( 'Update Item', 'text_domain' ),
	// 		'view_item'             => __( 'View Item', 'text_domain' ),
	// 		'view_items'            => __( 'View Items', 'text_domain' ),
	// 		'search_items'          => __( 'Search Item', 'text_domain' ),
	// 		'not_found'             => __( 'Not found', 'text_domain' ),
	// 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	// 		'featured_image'        => __( 'Featured Image', 'text_domain' ),
	// 		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	// 		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	// 		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	// 		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
	// 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
	// 		'items_list'            => __( 'Items list', 'text_domain' ),
	// 		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
	// 		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	// 	);
	// 	$args = array(
	// 		'label'                 => __( 'Gallery Page', 'text_domain' ),
	// 		'description'           => __( 'Gallery Page Description', 'text_domain' ),
	// 		'labels'                => $labels,
	// 		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
	// 		'taxonomies'            => array( 'category', 'post_tag' ),
	// 		'hierarchical'          => false,
	// 		'public'                => true,
	// 		'show_ui'               => true,
	// 		'show_in_menu'          => true,
	// 		'menu_position'         => 5,
	// 		'show_in_admin_bar'     => true,
	// 		'show_in_nav_menus'     => true,
	// 		'can_export'            => true,
	// 		'has_archive'           => true,
	// 		'exclude_from_search'   => false,
	// 		'publicly_queryable'    => true,
	// 		'capability_type'       => 'page',
	// 	);
	// 	register_post_type( 'gallerypage', $args );

	// }
	// add_action( 'init', 'gallerypage', 0 );


	// Register About Post
	// function galleryslider() {

	// 	$labels = array(
	// 		'name'                  => _x( 'Gallery Slider', 'Post Type General Name', 'text_domain' ),
	// 		'singular_name'         => _x( 'Gallery Slider', 'Post Type Singular Name', 'text_domain' ),
	// 		'menu_name'             => __( 'Gallery Slider', 'text_domain' ),
	// 		'name_admin_bar'        => __( '', 'text_domain' ),
	// 		'archives'              => __( 'Item Archives', 'text_domain' ),
	// 		'attributes'            => __( 'Item Attributes', 'text_domain' ),
	// 		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
	// 		'all_items'             => __( 'All Items', 'text_domain' ),
	// 		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
	// 		'add_new'               => __( 'Add New', 'text_domain' ),
	// 		'new_item'              => __( 'New Item', 'text_domain' ),
	// 		'edit_item'             => __( 'Edit Item', 'text_domain' ),
	// 		'update_item'           => __( 'Update Item', 'text_domain' ),
	// 		'view_item'             => __( 'View Item', 'text_domain' ),
	// 		'view_items'            => __( 'View Items', 'text_domain' ),
	// 		'search_items'          => __( 'Search Item', 'text_domain' ),
	// 		'not_found'             => __( 'Not found', 'text_domain' ),
	// 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	// 		'featured_image'        => __( 'Featured Image', 'text_domain' ),
	// 		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	// 		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	// 		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	// 		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
	// 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
	// 		'items_list'            => __( 'Items list', 'text_domain' ),
	// 		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
	// 		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	// 	);
	// 	$args = array(
	// 		'label'                 => __( 'Gallery Slider', 'text_domain' ),
	// 		'description'           => __( 'Gallery Slider Description', 'text_domain' ),
	// 		'labels'                => $labels,
	// 		'supports'              => array( 'title', 'excerpt', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
	// 		'taxonomies'            => array( 'category', 'post_tag' ),
	// 		'hierarchical'          => false,
	// 		'public'                => true,
	// 		'show_ui'               => true,
	// 		'show_in_menu'          => true,
	// 		'menu_position'         => 5,
	// 		'show_in_admin_bar'     => true,
	// 		'show_in_nav_menus'     => true,
	// 		'can_export'            => true,
	// 		'has_archive'           => true,
	// 		'exclude_from_search'   => false,
	// 		'publicly_queryable'    => true,
	// 		'capability_type'       => 'page',
	// 	);
	// 	register_post_type( 'galleryslider', $args );

	// }
	// add_action( 'init', 'galleryslider', 0 );



	// Register About Post
	// function processpage() {

	// 	$labels = array(
	// 		'name'                  => _x( 'Process Page', 'Post Type General Name', 'text_domain' ),
	// 		'singular_name'         => _x( 'Process Page', 'Post Type Singular Name', 'text_domain' ),
	// 		'menu_name'             => __( 'Process Page', 'text_domain' ),
	// 		'name_admin_bar'        => __( '', 'text_domain' ),
	// 		'archives'              => __( 'Item Archives', 'text_domain' ),
	// 		'attributes'            => __( 'Item Attributes', 'text_domain' ),
	// 		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
	// 		'all_items'             => __( 'All Items', 'text_domain' ),
	// 		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
	// 		'add_new'               => __( 'Add New', 'text_domain' ),
	// 		'new_item'              => __( 'New Item', 'text_domain' ),
	// 		'edit_item'             => __( 'Edit Item', 'text_domain' ),
	// 		'update_item'           => __( 'Update Item', 'text_domain' ),
	// 		'view_item'             => __( 'View Item', 'text_domain' ),
	// 		'view_items'            => __( 'View Items', 'text_domain' ),
	// 		'search_items'          => __( 'Search Item', 'text_domain' ),
	// 		'not_found'             => __( 'Not found', 'text_domain' ),
	// 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	// 		'featured_image'        => __( 'Featured Image', 'text_domain' ),
	// 		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	// 		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	// 		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	// 		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
	// 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
	// 		'items_list'            => __( 'Items list', 'text_domain' ),
	// 		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
	// 		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	// 	);
	// 	$args = array(
	// 		'label'                 => __( 'Process Page', 'text_domain' ),
	// 		'description'           => __( 'Process Page Description', 'text_domain' ),
	// 		'labels'                => $labels,
	// 		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'post-formats' ),
	// 		'taxonomies'            => array( 'category', 'post_tag' ),
	// 		'hierarchical'          => false,
	// 		'public'                => true,
	// 		'show_ui'               => true,
	// 		'show_in_menu'          => true,
	// 		'menu_position'         => 5,
	// 		'show_in_admin_bar'     => true,
	// 		'show_in_nav_menus'     => true,
	// 		'can_export'            => true,
	// 		'has_archive'           => true,
	// 		'exclude_from_search'   => false,
	// 		'publicly_queryable'    => true,
	// 		'capability_type'       => 'page',
	// 	);
	// 	register_post_type( 'processpage', $args );

	// }
	// add_action( 'init', 'processpage', 0 );

	
?>
