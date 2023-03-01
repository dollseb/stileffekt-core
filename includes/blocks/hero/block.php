<?php

//
// get block information

$block_name = 'hero';

if ( ! isset( $block ) ) {
	return;
}

$block_id = $block['id'] . '-' . str_replace('_', '-', $block_name);
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

$block_classes = 'block block-' . str_replace('_', '-', $block_name);
if ( ! empty( $block['className'] ) ) {
	$block_classes .= ' ' . $block['className'];
}

//
// get acf data

$block_data = get_field( $block_name );

if ( ! isset( $block_data ) ) {
	return;
}

$headline = whitelabel__helper_headline( $block_data, 'h1' );
$image    = whitelabel__helper_image( $block_data, 'src' );
$video    = whitelabel__helper_video( $block_data );

include basename( __FILE__, '.php' ) . '-view.php';