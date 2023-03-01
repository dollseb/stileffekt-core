<div id="<?= $block_id ?>" class="<?= $block_classes ?>">

    <div class="block-width">

        <div class="block-content">

	        <?php if ( ! empty( $headline ) ): ?>
                <div class="headline">
			        <?= $headline ?>
                </div>
	        <?php endif; ?>

	        <?php if ( ! empty( $text ) ): ?>
                <div class="text">
			        <?= $text ?>
                </div>
	        <?php endif; ?>

	        <?php if ( ! empty( $link ) ): ?>
                <div class="g-link">
			        <?= $link ?>
                </div>
	        <?php endif; ?>

        </div>

    </div>

</div>
