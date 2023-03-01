<?php

$block_name = 'text_media';

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

//echo "<pre>";
//print_r($block_data);
//echo "</pre>";

if ( isset( $block_data['block_background'] ) ) {
	$block_classes .= ' block-background-' . $block_data['block_background'];
}
if ( isset( $block_data['block_style'] ) ) {
	$block_classes .= ' block-style-' . $block_data['block_style'];
}
if ( isset( $block_data['block_media_position'] ) ) {
	$block_classes .= ' block-media-position-' . $block_data['block_media_position'];
}

$overline = whitelabel__helper_overline( $block_data );
$headline = whitelabel__helper_headline( $block_data );
$text     = whitelabel__helper_text( $block_data );
$image    = whitelabel__helper_image( $block_data, 'src' );
$video    = whitelabel__helper_video( $block_data );
$link     = whitelabel__helper_link( $block_data );
$spinner  = whitelabel__helper_image( $block_data, 'url', 'spinner' );

include basename( __FILE__, '.php' ) . '-view.php';
