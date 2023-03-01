<div id="<?= $block_id ?>" class="<?= $block_classes ?>">

    <div class="block-width">
        <div class="block-inner">
            <div class="block-header">

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

            </div>

            <div class="block-content">

				<?php if ( ! empty( $video_oembed ) || ! empty( $video_selfhosted )): ?>
                    <div class="g-video">
                        <div class="video-inner">

	                    <?php if ( ! empty( $video_oembed ) ): ?>
		                    <?= $video_oembed ?>
	                    <?php endif; ?>

	                    <?php if ( ! empty( $video_selfhosted ) && empty( $video_oembed ) ): ?>
		                    <?= $video_selfhosted ?>
	                    <?php endif; ?>

	                    <?php if ( ! empty( $image ) ): ?>
                            <div class="overlay">
                                <?= $image ?>
                            </div>
                            <div class="overlay-decoration">
                                <img class="rotate" src="<?= get_template_directory_uri() . '/assets/img/overlay_decoration_1.png' ?>" alt="" loading="lazy">
                                <img src="<?= get_template_directory_uri() . '/assets/img/overlay_decoration_2.png' ?>" alt="" loading="lazy">
                            </div>
	                    <?php endif; ?>

                        </div>
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

</div>
