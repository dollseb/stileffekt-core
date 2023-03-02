<?php

//
// get block information

$block_name = 'brands';

if ( ! isset( $block ) ) {
	return;
}

$block_id = $block['id'] . '-' . str_replace( '_', '-', $block_name );
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

$block_classes = 'block widget block-' . str_replace( '_', '-', $block_name );
if ( ! empty( $block['className'] ) ) {
	$block_classes .= ' ' . $block['className'];
}

//
// get acf data
$block_data = get_field( $block_name );

if ( ! isset( $block_data ) ) {
	return;
}

$text = whitelabel__helper_text( $block_data );

$logos = [];

if ( ! empty( $block_data['logos'] ) ) {
	$temp_logos = $block_data['logos'];

	foreach ( $temp_logos as $temp_logo ) {

		if ( empty( $temp_logo['image']['url'] ) ) {
			continue;
		}

		$link_url = $link_target = $image_alt = '';

		if ( ! empty( $temp_logo['link']['url'] ) ) {
			$link_url = ' href="' . $temp_logo['link']['url'] . '"';
		}
		if ( ! empty( $temp_logo['link']['target'] ) ) {
			$link_target = ' target="' . $temp_logo['link']['target'] . '"';
		}
		if ( ! empty( $temp_logo['image']['alt'] ) ) {
			$image_alt = $temp_logo['image']['alt'];
		}

		$logos[] = '<a' . $link_url . $link_target . '>' . whitelabel__helper_image( $temp_logo ) . '</a>';
	}

}

include 'view.php';