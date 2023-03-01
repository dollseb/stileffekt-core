<?php


if ( file_exists( get_theme_file_path( '/includes/cleanup/emojis.php' ) ) ) {
	require_once get_theme_file_path( '/includes/cleanup/emojis.php' );
}

if ( file_exists( get_theme_file_path( '/includes/cleanup/head.php' ) ) ) {
	require_once get_theme_file_path( '/includes/cleanup/head.php' );
}

if ( file_exists( get_theme_file_path( '/includes/cleanup/media.php' ) ) ) {
	require_once get_theme_file_path( '/includes/cleanup/media.php' );
}

if ( file_exists( get_theme_file_path( '/includes/cleanup/migrate.php' ) ) ) {
	require_once get_theme_file_path( '/includes/cleanup/migrate.php' );
}
