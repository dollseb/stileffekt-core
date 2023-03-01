<?php


//
// register custom post type employee
//
function whitelabel__posttype_employee()
{
	$labels = [
		'name'               => __('Employees', 'wb'),
		'singular_name'      => __('Employee', 'wb'),
		'menu_name'          => __('Employees', 'wb'),
		'parent_item_colon'  => __('Parent Employee', 'wb'),
		'all_items'          => __('All Employees', 'wb'),
		'view_item'          => __('View Employee', 'wb'),
		'add_new_item'       => __('Add New Employee', 'wb'),
		'add_new'            => __('Add New Employee', 'wb'),
		'edit_item'          => __('Edit Employee', 'wb'),
		'update_item'        => __('Update Employee', 'wb'),
		'search_items'       => __('Search Employees', 'wb'),
		'not_found'          => __('Not Found', 'wb'),
		'not_found_in_trash' => __('Not found in Trash', 'wb'),
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
		'menu_position'       => 20,
		'menu_icon'           => 'smiley',
	];

	register_post_type('employee', $args);
}

add_action('init', 'whitelabel__posttype_employee');
