<div id="<?= $block_id ?>" class="<?= $block_classes ?>">

    <div class="block-width">

        <div class="posts">

			<?php foreach ( $posts as $post ): ?>

                <div class="post">

                    <div class="post-image">
						<?= $post['image'] ?>
                    </div>

                    <div class="post-content">
                        <div class="post-content-inner">
                            <div class="post-headline">
								<?= $post['headline'] ?>
                            </div>

                            <div class="post-text" data-visible="false">
								<?= $post['text'] ?>
                            </div>

                            <div class="g-toggle">
                                <div class="toggle">

                                    <div class="text">
                                        <span class="open"><?= __( 'jetzt lesen', 'whitelabel' ) ?></span>
                                        <span class="close"><?= __( 'schließen', 'whitelabel' ) ?></span>
                                        <div class="decoration"></div>
                                    </div>
                                    <i class="icon icon-arrow-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

			<?php endforeach; ?>

        </div>

    </div>

</div>
