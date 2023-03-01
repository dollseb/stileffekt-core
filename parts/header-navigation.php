<?php if ( has_nav_menu( 'header' ) ): ?>

    <div class="header__navigation navigation">
        <div class="navigation__inner">
            <nav>
				<?php wp_nav_menu( array(
					'theme_location' => 'header',
					'menu'           => false,
					'menu_class'     => false,
					'menu_id'        => false,
					'container'      => false,
					'items_wrap'     => '<ul>%3$s</ul>'
				) ); ?>
            </nav>
        </div>
    </div>

<?php endif; ?>