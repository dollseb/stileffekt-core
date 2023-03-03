<div id="<?= $block_id ?>" class="<?= $block_classes ?>">

    <div class="block__width">

        <div class="block__inner">

            <div class="block__row">

				<?php if ( ! empty( $text ) ) : ?>
                    <div class="brands__text">
						<?= $text ?>
                    </div>
				<?php endif; ?>

				<?php if ( ! empty( $logos ) ) : ?>
                    <div class="brands__items">
						<?php foreach ( $logos as $logo ): ?>
							<?= $logo ?>
						<?php endforeach; ?>
                    </div>
				<?php endif; ?>

            </div>

        </div>

    </div>

</div>