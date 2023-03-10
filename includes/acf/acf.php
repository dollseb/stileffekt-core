<?php

if (!class_exists('ACF')) {
	return;
}

/**
 * acf backend visibility
 *
 */
function whitelabel__acf_visibility()
{
	$users = array(
		'sebastian@dollschneider.net',
		'christoph@stileffekt.de',
		'wiem@stileffekt.de',
	);

	$current_user = wp_get_current_user();

	if (in_array($current_user->user_email, $users)) {
		return true;
	}

	return false;
}

add_filter('acf/settings/show_admin', 'whitelabel__acf_visibility');
