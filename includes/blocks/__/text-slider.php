<?php

// get block data
$block_name = 'text_slider';

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

$headline = whitelabel__helper_headline( $block_data );

$slides = '';
if ( ! empty( $block_data['slides'] ) ) {
	$slides = $block_data['slides'];
}


include basename( __FILE__, '.php' ) . '-view.php';
