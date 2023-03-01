<?php

if ( file_exists( get_theme_file_path( '/includes/helper.php' ) ) ) {
	require_once get_theme_file_path( '/includes/helper.php' );
}

if ( file_exists( get_theme_file_path( '/includes/acf/acf.php' ) ) ) {
	require_once get_theme_file_path( '/includes/acf/acf.php' );
}

if ( file_exists( get_theme_file_path( '/includes/helper-blocks.php' ) ) ) {
	require_once get_theme_file_path( '/includes/helper-blocks.php' );
}

if ( file_exists( get_theme_file_path( '/includes/blocks/blocks.php' ) ) ) {
	require_once get_theme_file_path( '/includes/blocks/blocks.php' );
}

if ( file_exists( get_theme_file_path( '/includes/cleanup/cleanup.php' ) ) ) {
	require_once get_theme_file_path( '/includes/cleanup/cleanup.php' );
}

if ( file_exists( get_theme_file_path( '/includes/posttypes/_posttypes.php' ) ) ) {
	require_once get_theme_file_path( '/includes/posttypes/_posttypes.php' );
}