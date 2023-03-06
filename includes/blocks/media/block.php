<?php

//
// get block information

$block_name = 'media';

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

$items = [];

foreach ( $block_data['items'] as $item ) {

	$image            = whitelabel__helper_image( $item );
	$video_selfhosted = whitelabel__helper_video( $item, 'video_selfhosted' );
	$video_oembed     = whitelabel__helper_video( $item, 'video_oembed' );

	$media_type = '';
	if ( ! empty( $item['media_type'] ) ) {
		$media_type = $item['media_type'];
	}

	$items[] = [
		'image'            => $image,
		'video_selfhosted' => $video_selfhosted,
		'video_oembed'     => $video_oembed,
		'media_type'       => $media_type,
	];
}


include 'block-view.php';