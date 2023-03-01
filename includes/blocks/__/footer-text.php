<?php

//
// get block information

$block_name = 'footer_text';

if ( ! isset( $block ) ) {
	return;
}

$block_id = $block['id'] . '_' . str_replace('_', '-', $block_name);
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

$block_classes = 'block ' . str_replace('_', '-', $block_name);
if ( ! empty( $block['className'] ) ) {
	$block_classes .= ' ' . $block['className'];
}

//
// get acf data

$block_data = get_field( $block_name );

if ( ! isset( $block_data ) ) {
	return;
}

$headline = whitelabel__helper_headline( $block_data, 'h4' );
$text = whitelabel__helper_text( $block_data );

?>

<div id="<?= $block_id ?>" class="<?= $block_classes ?>">
    <div class="inner">

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
</div>
