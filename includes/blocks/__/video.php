<?php

// get block data
$block_name = 'video';

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

if ( isset( $block_data['block_background'] ) ) {
	$block_classes .= ' block-background-' . $block_data['block_background'];
}

$headline         = whitelabel__helper_headline( $block_data );
$text             = whitelabel__helper_text( $block_data );
$video_selfhosted = whitelabel__helper_video( $block_data, 'video_selfhosted' );
$video_oembed     = whitelabel__helper_video( $block_data, 'video_oembed' );
$image            = whitelabel__helper_image( $block_data );
$button           = whitelabel__helper_button( $block_data, 'button', 'arrow-right', '2' );

//echo "<pre>";print_r($block_data);echo "</pre>";
include basename( __FILE__, '.php' ) . '-view.php';


