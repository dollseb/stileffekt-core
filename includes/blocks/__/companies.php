<?php

$block_name = 'companies';


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

$block_data = get_field( $block_name );

if ( ! isset( $block_data ) ) {
	return;
}


if ( isset( $block_data['block_background'] ) ) {
	$block_classes .= ' block-background-' . $block_data['block_background'];
}

$companies = [];

$query = get_posts([
	'post_type'      => 'company',
	'post_status'    => 'publish',
	'posts_per_page' => - 1,
	'orderby'        => 'menu_order',
	'order'          => 'ASC',
]);

foreach ($query as $q) {

	$query_data = get_field('company', $q->ID);



	if(empty($query_data)) {
		continue;
	}

	$logo = whitelabel__helper_image($query_data, 'src', 'logo');
	$headline = whitelabel__helper_headline($query_data);
	$text = whitelabel__helper_text($query_data);
	$contact = whitelabel__helper_text($query_data, 'contact');
	$link = whitelabel__helper_link($query_data, 'link', 'link-external');

	$companies[] = [
		'logo' => $logo,
		'headline' => $headline,
		'text' => $text,
		'link' => $link,
		'contact' => $contact,
	];
}

$headline = whitelabel__helper_headline( $block_data );
$text = '';

//echo "<pre>";
//print_r($companies);
//echo "</pre>";

include basename( __FILE__, '.php' ) . '-view.php';
