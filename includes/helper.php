<?php


/**
 * return custom logo
 *
 */
function whitelabel__return_custom_logo( $name = 'custom_logo' ): string {
	$logo = wp_get_attachment_image_src( get_theme_mod( $name ), 'full' );

	if ( empty( $logo ) ) {
		return '';
	}

	if ( ! has_custom_logo() ) {
		return '';
	}

	if ( is_home() || is_front_page() ) {
		$logo = '<span><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" width="' . $logo[1] . '" height="' . $logo[2] . '"></span>';
	} else {
		$logo = '<a href="' . get_bloginfo( 'url' ) . '"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" width="' . $logo[1] . '" height="' . $logo[2] . '"></a>';
	}

	return $logo;

}

/**
 * helper grid toggle
 * todo: rewrite
 */
function whitelabel__helper_grid_toggle() {

	if ( defined( 'WP_DEBUG' ) && WP_DEBUG === false ) {
		return false;
	}

	$users = array(
		'sebastian@dollschneider.net',
		'gellert@gellert-marketing.de'
	);

	$current_user = wp_get_current_user();

	if ( ! in_array( $current_user->user_email, $users ) ) {
		return false;
	}

	?>

    <div class="helper-grid-toggle"></div>

	<?php // todo: don't load inline, move to script section ?>

    <script>
        const root = document.querySelector('html')
        const helperGridToggle = document.querySelector('.helper-grid-toggle')

        helperGridToggle.addEventListener('click', () => {
            if (root.classList.contains('helper-grid')) {
                root.classList.remove('helper-grid')
            } else {
                root.classList.add('helper-grid')
            }
        })
    </script>

	<?php
}

add_action( 'wp_footer', 'whitelabel__helper_grid_toggle' );