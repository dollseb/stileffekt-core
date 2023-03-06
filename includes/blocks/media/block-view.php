<div id="<?= $block_id ?>" class="<?= $block_classes ?>">

    <div class="block__width">

        <div class="block__inner">

            <div class="block__media">

				<?php if ( count( $items ) > 1 ): ?>

					<?php include "block-view-multiple.php"; ?>

				<?php else: ?>

					<?php include "block-view-single.php"; ?>

				<?php endif; ?>

            </div>

        </div>

    </div>

</div>