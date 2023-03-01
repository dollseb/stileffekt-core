<?php

if (!class_exists('ACF')) {
	return;
}


if ( file_exists( get_theme_file_path( '/includes/acf/extensions/field-menus.php' ) ) ) {
	require_once get_theme_file_path( '/includes/acf/extensions/field-menus.php' );
}


/**
 * acf backend visibility
 *
 */
function stileffekt__acf_visibility()
{
	$users = array(
		'sebastian@dollschneider.net',
	);

	$current_user = wp_get_current_user();

	if (in_array($current_user->user_email, $users)) {
		return true;
	}

	return false;
}

add_filter('acf/settings/show_admin', 'stileffekt__acf_visibility');
