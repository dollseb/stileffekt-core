<div class="media__item">

	<?php if ( ! empty( $items[0]['image'] ) && $items[0]['media_type'] == 'image' ): ?>
        <div class="component__image">
			<?= $items[0]['image'] ?>
        </div>
	<?php endif; ?>

	<?php if ( ! empty( $items[0]['video_selfhosted'] ) && $items[0]['media_type'] == 'video-selhosted' ): ?>
        <div class="component__video">
			<?= $items[0]['video_selfhosted'] ?>
        </div>
	<?php endif; ?>

	<?php if ( ! empty( $items[0]['video_oembed'] ) && $items[0]['media_type'] == 'video-oembed' ): ?>
        <div class="component__video">
			<?= $items[0]['video_oembed'] ?>
        </div>
	<?php endif; ?>

</div>