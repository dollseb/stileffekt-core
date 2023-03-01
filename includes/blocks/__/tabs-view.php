<div id="<?= $block_id ?>" class="<?= $block_classes ?> block-background-blue-60">

    <div class="block-width">

        <div class="block-inner">

            <div class="block-header">

				<?php if ( ! empty( $headline ) ): ?>
                    <div class="headline">
						<?= $headline ?>
                    </div>
				<?php endif; ?>
            </div>

            <div class="block-body">

				<?php if ( ! empty( $tabs ) ): ?>
                    <div class="tabs">
                        <div class="tabs-inner">
                            <div class="tab-navigation">
                                <ul>
									<?php $i = 0;
									foreach ( $tabs as $tab ): ?>
                                        <div class="tab-title" data-tab-id="tab-<?= $i ?>" data-active="<?= $i == 0 ? 'true' : 'false' ?>">
											<?= $tab['title'] ?>
                                            <div class="decoration"></div>
                                        </div>
										<?php $i ++;endforeach; ?>
                                </ul>
                            </div>

                            <div class="tab-content">
								<?php $i = 0;
								foreach ( $tabs as $tab ): ?>
                                    <div class="tab" data-tab-id="tab-<?= $i ?>" data-active="<?= $i == 0 ? 'true' : 'false' ?>">
                                        <div class="tab-text">
											<?= $tab['text'] ?>
                                        </div>
                                    </div>
									<?php $i ++;endforeach; ?>
                            </div>
                        </div>
                    </div>
				<?php endif; ?>

            </div>

        </div>

    </div>

</div>