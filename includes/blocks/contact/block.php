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

if ( isset( $block_data['media_position'] ) ) {
	$block_classes .= ' media-position-' . $block_data['media_position'];
}

$locations     = whitelabel__helper_text( $block_data, 'locations' );
$button   = whitelabel__helper_button( $block_data );
$image    = whitelabel__helper_image( $block_data );
$phone    = whitelabel__helper_link( $block_data, 'phone' );
$fax      = whitelabel__helper_link( $block_data, 'fax' );
$email    = whitelabel__helper_link( $block_data, 'email' );

include basename( __FILE__, '.php' ) . '-view.php';