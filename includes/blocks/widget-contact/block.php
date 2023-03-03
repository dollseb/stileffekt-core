<?php

//
// get block information

$block_name = 'contact';

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

$headline = whitelabel__helper_headline( $block_data );
$text = whitelabel__helper_text( $block_data );

include 'view.php';