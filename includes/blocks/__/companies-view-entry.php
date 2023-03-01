<?php

/**
 * @var int   $i ;
 * @var array $companies
 */

?>

<div class="company">

    <div class="company-media">

		<?php if ( ! empty( $companies[ $i ]['logo'] ) ): ?>

            <div class="logo">
				<?= $companies[ $i ]['logo'] ?>
            </div>

		<?php endif; ?>

    </div>

    <div class="company-content">

		<?php if ( ! empty( $companies[ $i ]['headline'] ) ): ?>

            <div class="headline">
				<?= $companies[ $i ]['headline'] ?>
            </div>

		<?php endif; ?>

		<?php if ( ! empty( $companies[ $i ]['text'] ) ): ?>

            <div class="text">
				<?= $companies[ $i ]['text'] ?>
            </div>

		<?php endif; ?>

		<?php if ( ! empty( $companies[ $i ]['link'] ) ): ?>

            <div class="g-link">
				<?= $companies[ $i ]['link'] ?>
            </div>

		<?php endif; ?>

		<?php if ( ! empty( $companies[ $i ]['contact'] ) ): ?>
            <div class="contact">

                <div class="contact-text" data-visible="false">
					<?= $companies[ $i ]['contact'] ?>
                </div>

                <div class="g-toggle">
                    <div class="toggle">

                        <div class="text">
                            <span class="open"><?= __( 'Kontaktdaten', 'whitelabel' ) ?></span>
                            <span class="close"><?= __( 'Kontaktdaten schließen', 'whitelabel' ) ?></span>
                            <div class="decoration"></div>
                        </div>

                        <i class="icon icon-arrow-down"></i>
                    </div>
                </div>
            </div>
		<?php endif; ?>


    </div>

</div>


