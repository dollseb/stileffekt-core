<div id="<?= $block_id ?>" class="<?= $block_classes ?>">
    <div class="block__width">
		<?php if ( ! empty( $image ) && empty( $video ) ) : ?>
            <div class="hero__image">
				<?= $image ?>
                <div class="hero__overlay"></div>
            </div>
		<?php endif; ?>

		<?php if ( ! empty( $video ) ) : ?>
            <div class="hero__video">
				<?= $video ?>
                <div class="hero__overlay"></div>
            </div>

		<?php endif; ?>

        <div class="hero__scroll">
            <i class="icon icon-arrow-down"></i>
        </div>

        <div class="block__inner">

            <div class="hero__content">

				<?php if ( ! empty( $headline ) ) : ?>
                    <div class="component__headline">
						<?= $headline ?>
                    </div>
				<?php endif; ?>

            </div>

        </div>

    </div>

</div>