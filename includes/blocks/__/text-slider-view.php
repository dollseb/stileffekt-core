<div id="<?= $block_id ?>" class="<?= $block_classes ?> block-background-blue-60">

    <div class="block-width">

        <div class="block-content">

            <?php if (!empty($headline)) : ?>
                <div class="headline">
                    <?= $headline ?>
                </div>
            <?php endif; ?>

        </div>

        <div class="block-slider glide">

            <div class="glide__counter">
                <div class="counter">
                    <span class="current">1</span><span class="separator">/</span><span class="max">4</span>
                </div>
            </div>

            <div class="glide__track" data-glide-el="track">

                <ul class="glide__slides">
                    <?php foreach ($slides as $slide) : ?>
                        <li class="glide__slide">
                            <div class="headline">
                                <?= $slide['headline'] ?>
                            </div>
                            <div class="text">
                                <?= $slide['text'] ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="glide__controls" data-glide-el="controls">
                    <button data-glide-dir="&lt;"><i class="icon icon-arrow-left"></i></button>
                    <button data-glide-dir="&gt;"><i class="icon icon-arrow-right"></i></button>
                </div>

            </div>

        </div>

    </div>

</div>