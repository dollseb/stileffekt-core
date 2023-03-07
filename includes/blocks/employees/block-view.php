<div id="<?= $block_id ?>" class="<?= $block_classes ?>">

    <div class="block__width">

        <div class="block__inner">

            <div class="block__content">

				<?php if ( ! empty( $overline ) ) : ?>
                    <div class="component__overline">
						<?= $overline ?>
                    </div>
				<?php endif; ?>

				<?php if ( ! empty( $headline ) ) : ?>
                    <div class="component__headline">
						<?= $headline ?>
                    </div>
				<?php endif; ?>

				<?php if ( ! empty( $text ) ) : ?>
                    <div class="component__text">
						<?= $text ?>
                    </div>
				<?php endif; ?>

            </div>

			<?php if ( ! empty( $employees ) ): ?>
                <div class="block__employees">

					<?php foreach ( $employees as $employee ): ?>

                        <div class="employee">

                            <div class="employee__media">

								<?php if ( ! empty( $employee['image'] ) ): ?>

                                    <div class="manager__image">
										<?= $employee['image'] ?>
                                    </div>
								<?php endif; ?>

                            </div>

                            <div class="employee__content">

                                <div class="employee__name">
									<?php if ( ! empty( $employee['firstname'] ) ) : ?>

										<?= $employee['firstname'] ?>

									<?php endif; ?>

									<?php if ( ! empty( $employee['lastname'] ) ) : ?>

                                        <span><?= $employee['lastname'] ?></span>

									<?php endif; ?>

                                </div>

                                <div class="employee__contact">
									<?php if ( ! empty( $employee['phone'] ) ) : ?>
                                        <div class="contact">
                                            <span><?= /* translators: first letter of the word phone */
	                                        __( 'P', 'whitelabel' ); ?></span> <?= $employee['phone'] ?>
                                        </div>
									<?php endif; ?>
									<?php if ( ! empty( $employee['fax'] ) ) : ?>
                                        <div class="contact">
                                            <span><?= /* translators: first letter of the word fax */
	                                        __( 'F', 'whitelabel' ); ?></span> <?= $employee['fax'] ?>
                                        </div>
									<?php endif; ?>
									<?php if ( ! empty( $employee['email'] ) ) : ?>
                                        <div class="contact">
                                            <span><?= /* translators: first letter of the word e-mail */
	                                        __( 'E', 'whitelabel' ); ?></span> <?= $employee['email'] ?>
                                        </div>
									<?php endif; ?>
                                </div>

								<?php if ( ! empty( $employee['description'] ) ) : ?>
                                    <div class="employee__description">
										<?= $employee['description'] ?>
                                    </div>
								<?php endif; ?>

                            </div>

                        </div>

					<?php endforeach; ?>

                </div>
			<?php endif; ?>
        </div>

    </div>

</div>