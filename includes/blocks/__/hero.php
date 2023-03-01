<?php

// get block data
$block_name = 'hero';

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

$headline         = whitelabel__helper_headline( $block_data, 'h1' );
$background_image = whitelabel__helper_image( $block_data, 'url', 'background_image' );
$button           = whitelabel__helper_button( $block_data, 'button', 'arrow-down', '1' );

include basename( __FILE__, '.php' ) . '-view.php';
