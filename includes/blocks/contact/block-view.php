<div id="<?= $block_id ?>" class="<?= $block_classes ?>">

    <div class="block__width">

        <div class="block__inner">

            <div class="block__media">
				<?php if ( ! empty( $image ) ) : ?>
                    <div class="component__image">
						<?= $image ?>
                    </div>
				<?php endif; ?>
            </div>

            <div class="block__content">

				<?php if ( ! empty( $locations ) ) : ?>
                    <div class="content__locations">
						<?= $locations ?>
                    </div>
				<?php endif; ?>

                <div class="content__contact">
					<?php if ( ! empty( $phone ) ) : ?>
                        <div class="contact">
                            <span><?= /* translators: first letter of the word phone */
                                __( 'P', 'whitelabel' ); ?></span> <?= $phone ?>
                        </div>
					<?php endif; ?>
					<?php if ( ! empty( $fax ) ) : ?>
                        <div class="contact">
                            <span><?= /* translators: first letter of the word fax */
								__( 'F', 'whitelabel' ); ?></span> <?= $fax ?>
                        </div>
					<?php endif; ?>
					<?php if ( ! empty( $email ) ) : ?>
                        <div class="contact">
                            <span><?= /* translators: first letter of the word e-mail */
                                __( 'E', 'whitelabel' ); ?></span> <?= $email ?>
                        </div>
					<?php endif; ?>
                </div>

				<?php if ( ! empty( $button ) ) : ?>
                    <div class="content__button">
                        <div class="component__button">
							<?= $button ?>
                        </div>
                    </div>
				<?php endif; ?>

            </div>

        </div>

    </div>

</div>