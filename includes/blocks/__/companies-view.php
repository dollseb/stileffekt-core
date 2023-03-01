<?php

/**
 * @var string $block_id
 * @var string $block_classes
 * @var string $headline
 * @var string $text
 * @var array  $companies
 *
 */

?>

<div id="<?= $block_id ?>" class="<?= $block_classes ?>">

    <div class="block-width">

        <div class="block-inner">

            <div class="block-header">

				<?php if ( ! empty( $headline ) ) : ?>
                    <div class="headline">
						<?= $headline ?>
                    </div>
				<?php endif; ?>

				<?php if ( ! empty( $text ) ) : ?>
                    <div class="text">
						<?= $text ?>
                    </div>
				<?php endif; ?>

            </div>

            <div class="companies">

                <div class="companies-row">

                    <div class="companies-column">

						<?php for ( $i = 0; $i < count( $companies ); $i++ ): ?>
							<?php if ( $i%2 != 0 ): ?>
								<?php include basename( __FILE__, '.php' ) . '-entry.php'; ?>
							<?php endif; ?>
						<?php endfor; ?>

                    </div>

                    <div class="companies-column">

						<?php for ( $i = 0; $i < count( $companies ); $i++ ): ?>
							<?php if ( $i%2 == 0): ?>
								<?php include basename( __FILE__, '.php' ) . '-entry.php'; ?>
							<?php endif; ?>
						<?php endfor; ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>