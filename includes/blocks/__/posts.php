<?php

// get block data
$block_name = 'posts';

if ( ! isset( $block ) ) {
	return;
}

$block_id = $block['id'] . '_' . str_replace( '_', '-', $block_name );
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

$block_classes = 'block block-' . str_replace( '_', '-', $block_name );
if ( ! empty( $block['className'] ) ) {
	$block_classes .= ' ' . $block['className'];
}

// get custom field data
$block_data = get_field( $block_name );

if ( ! isset( $block_data ) ) {
	return;
}

if ( isset( $block_data['block_background'] ) ) {
	$block_classes .= ' block-background-' . $block_data['block_background'];
}


$posts = [];

$query = get_posts([
	'post_type'      => 'post',
	'post_status'    => 'publish',
	'posts_per_page' => 4,
	'orderby'        => 'date',
	'order'          => 'ASC',
]);

foreach ($query as $q) {

	$post_data = get_field('post', $q->ID);

	$image = whitelabel__helper_image($post_data);
	$headline = whitelabel__helper_headline($post_data, 'h2','h2', 'title');
	$text = whitelabel__helper_text($post_data);

	$posts[] = [
		'image' => $image,
		'headline' => $headline,
		'text' => $text,
	];
}

include basename( __FILE__, '.php' ) . '-view.php';
