<?php

function stileffekt__filter_image_sizes( $sizes ) {

	unset( $sizes[ 'medium_large' ] );
	unset( $sizes[ '1536x1536' ] );
	unset( $sizes[ '2048x2048' ] );

	return $sizes;
}

add_filter( 'intermediate_image_sizes_advanced', 'stileffekt__filter_image_sizes' );

