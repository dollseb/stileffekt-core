<?php


//
// register custom post type employee
//
function whitelabel__posttype_employee()
{
	$labels = [
		'name'               => __('Employees', 'whitelabel'),
		'singular_name'      => __('Employee', 'whitelabel'),
		'menu_name'          => __('Employees', 'whitelabel'),
		'parent_item_colon'  => __('Parent Employee', 'whitelabel'),
		'all_items'          => __('All Employees', 'whitelabel'),
		'view_item'          => __('View Employee', 'whitelabel'),
		'add_new_item'       => __('Add New Employee', 'whitelabel'),
		'add_new'            => __('Add New Employee', 'whitelabel'),
		'edit_item'          => __('Edit Employee', 'whitelabel'),
		'update_item'        => __('Update Employee', 'whitelabel'),
		'search_items'       => __('Search Employees', 'whitelabel'),
		'not_found'          => __('Not Found', 'whitelabel'),
		'not_found_in_trash' => __('Not found in Trash', 'whitelabel'),
	];

	$args = [
		'labels'              => $labels,
		'supports'            => ['title', 'editor', 'author', 'revisions',],
		'taxonomies'          => [],
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'page',
		'show_in_rest'        => true,
		'menu_position'       => 24,
		'menu_icon'           => 'dashicons-businessman',
	];

	register_post_type('employee', $args);
}

add_action('init', 'whitelabel__posttype_employee');


//
// register custom taxonomy manager category
//
function whitelabel__custom_taxonomy_employee_category()
{
	$labels = array(
		'name' => __( 'Categories', 'whitelabel' ),
		'singular_name' => __( 'Category', 'whitelabel' ),
		'search_items' =>  __( 'Search Categories', 'whitelabel' ),
		'all_items' => __( 'All Categories', 'whitelabel' ),
		'parent_item' => __( 'Parent Category', 'whitelabel' ),
		'parent_item_colon' => __( 'Parent Category:', 'whitelabel' ),
		'edit_item' => __( 'Edit Category', 'whitelabel' ),
		'update_item' => __( 'Update Category', 'whitelabel' ),
		'add_new_item' => __( 'Add New Category', 'whitelabel' ),
		'new_item_name' => __( 'New Category', 'whitelabel' ),
		'menu_name' => __( 'Categories', 'whitelabel' ),
	);

	register_taxonomy('employee-category', array('employee'), array(
		'labels' => $labels,
		'hierarchical' => true,
		'show_ui' => true,
		'show_admin_column' => false,
		'query_var' => true,
		'show_in_rest' => true,
		'rewrite' => array(
			'slug' => 'industry'
		),
	));
}
add_action( 'init', 'whitelabel__custom_taxonomy_employee_category', 0 );