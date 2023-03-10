<footer class="footer">

    <div class="footer__inner">

        <div class="footer__widgets">

			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="footer-widgets-column">
					<?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <div class="footer-widgets-column">
					<?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
			<?php endif; ?>
        </div>

        <div class="footer__socket">
            <div class="footer__width">
            <div class="footer__socket__inner">

                <nav class="navigation">

					<?php if ( has_nav_menu( 'footer' ) ): ?>

						<?php wp_nav_menu( array(
							'theme_location' => 'footer',
							'menu'           => false,
							'menu_class'     => false,
							'menu_id'        => false,
							'container'      => false,
							'items_wrap'     => '<ul>%3$s</ul>'
						) ); ?>

					<?php endif; ?>
                </nav>

                <div class="copyright">
                    &copy; 2022 CoRE Solutions GmbH
                </div>

            </div>
            </div>
        </div>

        <div class="footer__brands">
            <div class="footer__inner">
				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <div class="footer-widgets-column">
						<?php dynamic_sidebar( 'footer-3' ); ?>
                    </div>
				<?php endif; ?>
            </div>
        </div>

    </div>

</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>