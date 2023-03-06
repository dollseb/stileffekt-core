<?php

/**
 * return headline text with h-tag
 *
 */
function whitelabel__helper_headline( $block_data, $headline_style = 'h2', $headline_fallback = 'span', $selector = 'headline' ): string {

	if ( empty( $block_data[ $selector ] ) ) {
		return '';
	}

	$headline_type = ! empty( $block_data['headline_type'] ) ? $block_data['headline_type'] : $headline_fallback;

	$headline_before = '<' . $headline_type . ' class="' . $headline_style . '">';
	$headline_after  = '</' . $headline_type . '>';

	return $headline_before . $block_data[ $selector ] . $headline_after;
}

/**
 * return headline string
 *
 */
function whitelabel__helper_overline( $block_data, $selector = 'overline' ): string {

	if ( empty( $block_data[ $selector ] ) ) {
		return '';
	}

	return $block_data[ $selector ];
}

/**
 * return underline string
 *
 */
function whitelabel__helper_underline( $block_data, $selector = 'underline' ): string {

	if ( empty( $block_data[ $selector ] ) ) {
		return '';
	}

	return $block_data[ $selector ];
}

/**
 * return text string
 *
 */
function whitelabel__helper_text( $block_data, $selector = 'text' ): string {

	if ( empty( $block_data[ $selector ] ) ) {
		return '';
	}

	return $block_data[ $selector ];
}

/**
 * return image string
 *
 */
function whitelabel__helper_image( $block_data, $image_size = 'url', $selector = 'image' ): string {
	if ( empty( $block_data[ $selector ] ) ) {
		return '';
	}

	if ( ! empty( $block_data[ $selector ]['sizes'][ $image_size ] ) ) {
		$url    = $block_data[ $selector ]['sizes'][ $image_size ];
		$width  = $block_data[ $selector ]['sizes'][ $image_size . '-width' ];
		$height = $block_data[ $selector ]['sizes'][ $image_size . '-height' ];
	} else {
		$url    = $block_data[ $selector ]['url'];
		$width  = $block_data[ $selector ]['width'];
		$height = $block_data[ $selector ]['height'];
	}

	$media_alignment = '';
	if(!empty($block_data['media_alignment'])) {
		$media_alignment = 'style="object-position: ' . str_replace('-', ' ', $block_data['media_alignment']) .';"';
	}

	$alt = ! empty( $block_data[ $selector ]['alt'] ) ? ' alt="' . $block_data[ $selector ]['alt'] . '"' : ' alt=""';

	return '<img src="' . $url . '" width="' . $width . '" height="' . $height . '"' . $alt . ' loading="lazy"'. $media_alignment .'>';
}


/**
 * return video string
 *
 */
function whitelabel__helper_video( $block_data, $selector = 'video' ): string {
	$source = '';
	if(!empty($block_data[$selector])) {

		if ( !empty( $block_data[ $selector ]['url'] ) ) {
			$source = '<source src="' . $block_data[ $selector ]['url'] . '" type="' . $block_data[ $selector ]['mime_type'] . '">';

			$poster = '';
			if ( ! empty( $block_data['image'] ) ) {
				$poster = ' poster="' . $block_data['image']['url'] . '"';
			}

			return '<video' . $poster . ' playsinline autoplay loop muted>' . $source . '</video>';

		} else {
			$iframe = $block_data[$selector];

			preg_match('/src="(.+?)"/', $iframe, $matches);
			$src = $matches[1];

			$params = array(
				'controls'  => 0,
				'hd'        => 1,
				'autohide'  => 1,
			);
			$new_src = add_query_arg($params, $src);
			$iframe = str_replace($src, $new_src, $iframe);

			$attributes = 'frameborder="0"';
			$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

			return $iframe;
		}
	}

	return '';
}

// button helper
function whitelabel__helper_button( $block_data, $selector = 'button', $icon = '', $style = '1' ): string {
	if ( empty( $block_data[ $selector ] ) ) {
		return '';
	}

	$classes = 'button';

	$url = $target = $title = '';

	if ( ! empty( $block_data[ $selector ]['url'] ) ) {
		$url = ' href="' . $block_data[ $selector ]['url'] . '"';
	}
	if ( ! empty( $block_data[ $selector ]['target'] ) ) {
		$target = ' target="' . $block_data[ $selector ]['target'] . '"';
	}
	if ( ! empty( $block_data[ $selector ]['title'] ) ) {
		$title = $block_data[ $selector ]['title'];
	}
	if ( ! empty( $icon ) ) {
		$icon = '<i class="icon icon-' . $icon . '"></i>';
	}
	if ( ! empty( $style ) ) {
		$classes .= ' style-' . $style;
	}

	return '<a class="' . $classes . '"' . $url . $target . '><span>' . $title . '</span>' . $icon . '</a>';
}


//link helper
function whitelabel__helper_link( $block_data, $selector = 'link', $icon = 'link' ): string {

	if ( empty( $block_data[ $selector ] ) ) {
		return '';
	}
	$classes = 'link';

	$url = $target = $title = '';

	if ( ! empty( $block_data[ $selector ]['url'] ) ) {
		$url = ' href="' . $block_data[ $selector ]['url'] . '"';
	}
	if ( ! empty( $block_data[ $selector ]['target'] ) ) {
		$target = ' target="' . $block_data[ $selector ]['target'] . '"';
	}
	if ( ! empty( $block_data[ $selector ]['title'] ) ) {
		$title = $block_data[ $selector ]['title'];
	}
	if ( ! empty( $icon ) ) {
		$icon = '<i class="icon icon-' . $icon . '"></i>';
	}

	return ' <a class="'.$classes.'"' . $url . $target . '><span>' . $title . '<div class="decoration"></div></span>' . $icon . '</a>';
}