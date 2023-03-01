<?php

//
// get block information

$block_name = 'text';

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
$link     = whitelabel__helper_link( $block_data );

include basename( __FILE__, '.php' ) . '-view.php';