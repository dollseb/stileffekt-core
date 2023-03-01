<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<?php wp_head(); ?>

</head>
<body>

<div class="site">

    <header id="header" class="header">

        <div class="header__width">

            <div class="header__inner">

                <div class="header__logo">
		            <?php echo whitelabel__return_custom_logo() ?>
                </div>

                <?php get_template_part( 'parts/header', 'navigation' ); ?>

                <div class="header__toggle">
                    <button><span></span><span></span></button>
                </div>

            </div>

        </div>

    </header>
