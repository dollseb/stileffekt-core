<?php

if ( ! is_active_sidebar( 'footer-1' ) && ! is_active_sidebar( 'footer-2' ) ) {
	return false;
}

?>

<div class="footer-areas">

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
        <div class="area">
			<?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
        <div class="area">
			<?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'footer' ) ): ?>
        <div class="area">

            <nav class="navigation-footer">
				<?php wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu'           => false,
					'menu_class'     => false,
					'menu_id'        => false,
					'container'      => false,
					'items_wrap'     => '<ul>%3$s</ul>'
				) ); ?>
            </nav>

        </div>
	<?php endif; ?>

</div>