<?php


$block_name = 'jobs';

if ( ! isset( $block ) ) {
	return;
}

// get block data
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

$headline = whitelabel__helper_headline( $block_data );
$text     = whitelabel__helper_text( $block_data );

// env
$api_route_categories = 'https://wekanet.homepagerecruiter.de/backend/jobad/feed/Karriereseite2/rubrication-definition';
$api_route_jobs = 'https://wekanet.homepagerecruiter.de/backend/jobad/feed/Karriereseite2';
$api_username         = 'feed';
$api_password         = 'Artib2jpmZKU';

$categories = whitelabel__get_api_data( $api_route_categories, $api_username, $api_password );
$jobs = whitelabel__get_api_data( $api_route_jobs, $api_username, $api_password);

$categories_filter_applicants = [];
$categories_filter_companies = [];

foreach ($jobs['result'] as $job) {
	foreach ($job['rubrication'] as $id => $value) {

		if($id == 'Karriereseite2_Einsatzort' || $id == 'Karriereseite2_Beschaeftigungsart' || $id == 'Karriereseite2_Abteilung') {
			continue;
		}

		if($id == 'Karriereseite2_Zielgruppe') {
			$categories_filter_applicants[] = $value;
		}
		if($id == 'Karriereseite2_Unternehmen') {
			$categories_filter_companies[] = $value;
		}
	}
}

$categories_filter_applicants = array_unique($categories_filter_applicants);
$categories_filter_companies = array_unique($categories_filter_companies);

function whitelabel__get_api_data( $url, $username, $password ) {

	if ( empty( $url ) or empty( $username ) or empty( $password ) ) {
		return false;
	}

	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $url );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_USERPWD, "$username:$password" );
	curl_setopt( $ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
	$output = curl_exec( $ch );
	curl_close( $ch );

	$output = json_decode($output, true);

	return $output;
}


include basename( __FILE__, '.php' ) . '-view.php';
