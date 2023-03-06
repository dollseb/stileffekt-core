
<div class="glide">
    <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">

	        <?php foreach ( $items as $item ): ?>

		        <?php if ( ! empty( $item['image'] ) && $item['media_type'] == 'image' ): ?>
                    <div class="glide__slide component__image">
				        <?= $item['image'] ?>
                    </div>
		        <?php endif; ?>

		        <?php if ( ! empty( $item['video_selfhosted'] ) && $item['media_type'] == 'video-selfhosted' ): ?>
                    <div class="glide__slide component__video">
				        <?= $item['video_selfhosted'] ?>
                    </div>
		        <?php endif; ?>

		        <?php if ( ! empty( $item['video_oembed'] ) && $item['media_type'] == 'video-oembed' ): ?>
                    <div class="glide__slide component__video">
				        <?= $item['video_oembed'] ?>
                    </div>
		        <?php endif; ?>

	        <?php endforeach; ?>

        </ul>
    </div>

    <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;"><i class="icon arrow-left"></i></button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;"><i class="icon arrow-right"></i></button>
    </div>
</div>




