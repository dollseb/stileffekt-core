<div id="<?= $block_id ?>" class="<?= $block_classes ?>">

    <div class="block-width">

        <div class="block-header">

            <div class="spinner">

				<?php if ( ! empty( $spinner ) ): ?>
					<?= $spinner ?>
				<?php endif; ?>
            </div>

			<?php if ( ! empty( $headline ) ): ?>
                <div class="headline">
					<?= $headline ?>
                </div>
			<?php endif; ?>

        </div>

        <div class="block-content">
			<?php if ( ! empty( $text ) ): ?>
                <div class="text">
					<?= $text ?>
                </div>
			<?php endif; ?>

	        <?php if ( ! empty( $link ) ) : ?>
                <div class="g-link">
			        <?= $link ?>
                </div>
	        <?php endif; ?>

        </div>

	    <?php if ( ! empty( $video_oembed ) || ! empty( $video_selfhosted )): ?>
            <div class="block-video">
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
            </div>
		<?php endif; ?>

    </div>

</div>
