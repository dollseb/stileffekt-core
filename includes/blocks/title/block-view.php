<div id="<?= $block_id ?>" class="<?= $block_classes ?>">

    <div class="block__width">

        <div class="block__inner">

            <div class="block__headline">
				<?php if ( ! empty( $headline ) ) : ?>
                    <div class="component__headline">
						<?= $headline ?>
                    </div>
				<?php endif; ?>
            </div>

            <div class="block__content">
				<?php if ( ! empty( $text ) ) : ?>
                    <div class="component__text">
						<?= $text ?>
                    </div>
				<?php endif; ?>
            </div>

        </div>

    </div>

</div>