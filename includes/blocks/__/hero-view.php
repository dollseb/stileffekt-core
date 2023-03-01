<div id="<?= $block_id ?>" class="<?= $block_classes ?>">

	<?php if ( ! empty( $background_image ) ): ?>
        <div class="background">
			<?= $background_image ?>
        </div>
	<?php endif; ?>

    <div class="block-inner">

        <div class="block-content">

			<?php if ( ! empty( $headline ) ): ?>
                <div class="headline">
					<?= $headline ?>
                </div>
			<?php endif; ?>

			<?php if ( ! empty( $button ) ): ?>
                <div class="g-button">
					<?= $button ?>
                </div>
			<?php endif; ?>

        </div>

    </div>

</div>