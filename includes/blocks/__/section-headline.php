<?php

$block_name = 'section_headline';

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

$headline = whitelabel__helper_headline( $block_data );

include basename( __FILE__, '.php' ) . '-view.php';
