<div id="<?= $block_id ?>" class="<?= $block_classes ?>">

    <div class="block__width">

        <div class="block__inner">

            <div class="block__row">

                <div class="contact__icon">
                    <img src="<?= get_template_directory_uri() . '/assets/img/decoration.svg' ?>" alt="">
                </div>

				<?php if ( ! empty( $headline ) ) : ?>
                    <div class="contact__headline">
						<?= $headline ?>
                    </div>
				<?php endif; ?>

				<?php if ( ! empty( $text ) ) : ?>
                    <div class="contact__text">
						<?= $text ?>
                    </div>
				<?php endif; ?>

            </div>

        </div>

    </div>

</div>