<?php

//
// get block information

$block_name = 'employees';

if ( ! isset( $block ) ) {
	return;
}

$block_id = $block['id'] . '-' . str_replace( '_', '-', $block_name );
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

$block_classes = 'block block-' . str_replace( '_', '-', $block_name );
if ( ! empty( $block['className'] ) ) {
	$block_classes .= ' ' . $block['className'];
}

//
// get acf data

$block_data = get_field( $block_name );

if ( ! isset( $block_data ) ) {
	return;
}

if ( isset( $block_data['style'] ) ) {
	$block_classes .= ' block-' . $block_data['style'];
}

$overline = whitelabel__helper_overline( $block_data );
$headline = whitelabel__helper_headline( $block_data, 'h2' );
$text     = whitelabel__helper_text( $block_data );

$categories = '';
if ( ! empty( $block_data['categories'] ) ) {
	$categories = $block_data['categories'];
}


if ( isset( $categories ) ) {

	$employees = [];

	$args = [
		'post_type'      => 'employee',
		'post_status'    => 'publish',
		'posts_per_page' => - 1,
		'tax_query'      => [
			[
				'taxonomy' => 'employee-category',
				'field'    => 'term_id',
				'terms'    => $categories,
			],
		],
	];

	$posts = get_posts( $args );

	if ( ! empty( $posts ) ) {

		foreach ( $posts as $post ) {

			$_data = get_field( 'employee', $post->ID );

			$_firstname   = whitelabel__helper_text( $_data, 'firstname' );
			$_lastname    = whitelabel__helper_text( $_data, 'lastname' );
			$_description = whitelabel__helper_text( $_data, 'description' );
			$_position    = whitelabel__helper_text( $_data, 'position' );
			$_phone       = whitelabel__helper_link( $_data, 'phone' );
			$_fax         = whitelabel__helper_link( $_data, 'fax' );
			$_email       = whitelabel__helper_link( $_data, 'email' );
			$_image       = whitelabel__helper_image( $_data );

			$employees[] = [
				'firstname'   => $_firstname,
				'lastname'    => $_lastname,
				'description' => $_description,
				'position'    => $_position,
				'phone'       => $_phone,
				'fax'         => $_fax,
				'email'       => $_email,
				'image'       => $_image,
			];

		}
	}

}


include 'block-view.php';