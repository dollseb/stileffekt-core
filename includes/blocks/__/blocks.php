<?php


//
// register custom block editor category
//
function whitelabel__register_block_categories( $categories ) {
	return array_merge( $categories, array(
		array(
			'slug'  => 'gellert',
			'title' => 'Gellert Marketing',
		),
	) );
}

add_filter( 'block_categories_all', 'whitelabel__register_block_categories', 10, 2 );

//
// register custom block editor element
//
function whitelabel__register_blocks() {

	if ( function_exists( 'acf_register_block_type' ) ) {

		acf_register_block_type( array(
			'name'            => 'hero',
			'title'           => __( 'Hero', 'whitelabel' ),
			'description'     => '',
			'category'        => 'gellert',
			'icon'            => 'smiley',
			'keywords'        => array( 'hero', ),
			'align'           => 'full',
			'mode'            => 'edit',
			'supports'        => array(
				'mode'   => false,
				'align'  => false,
				'anchor' => true,
				'jsx'    => true,
			),
			'render_template' => 'includes/blocks/hero.php',
		) );
		acf_register_block_type( array(
			'name'            => 'section-headline',
			'title'           => __( 'Section Headline', 'whitelabel' ),
			'description'     => '',
			'category'        => 'gellert',
			'icon'            => 'smiley',
			'keywords'        => array( 'section', 'headline', ),
			'align'           => 'full',
			'mode'            => 'edit',
			'supports'        => array(
				'mode'   => false,
				'align'  => false,
				'anchor' => true,
				'jsx'    => true,
			),
			'render_template' => 'includes/blocks/section-headline.php',
		) );

		acf_register_block_type( array(
			'name'            => 'intro',
			'title'           => __( 'Intro', 'whitelabel' ),
			'description'     => '',
			'category'        => 'gellert',
			'icon'            => 'smiley',
			'keywords'        => array( 'intro', ),
			'align'           => 'full',
			'mode'            => 'edit',
			'supports'        => array(
				'mode'   => false,
				'align'  => false,
				'anchor' => true,
				'jsx'    => true,
			),
			'render_template' => 'includes/blocks/intro.php',
		) );
		acf_register_block_type( array(
			'name'            => 'text',
			'title'           => __( 'Text', 'whitelabel' ),
			'description'     => '',
			'category'        => 'gellert',
			'icon'            => 'smiley',
			'keywords'        => array( 'text',),
			'align'           => 'full',
			'mode'            => 'edit',
			'supports'        => array(
				'mode'   => false,
				'align'  => false,
				'anchor' => true,
				'jsx'    => true,
			),
			'render_template' => 'includes/blocks/text.php',
		) );

		acf_register_block_type( array(
			'name'            => 'tabs',
			'title'           => __( 'Tabs', 'whitelabel' ),
			'description'     => '',
			'category'        => 'gellert',
			'icon'            => 'smiley',
			'keywords'        => array( 'tabs',),
			'align'           => 'full',
			'mode'            => 'edit',
			'supports'        => array(
				'mode'   => false,
				'align'  => false,
				'anchor' => true,
				'jsx'    => true,
			),
			'render_template' => 'includes/blocks/tabs.php',
		) );

		acf_register_block_type( array(
			'name'            => 'posts',
			'title'           => __( 'Posts', 'whitelabel' ),
			'description'     => '',
			'category'        => 'gellert',
			'icon'            => 'smiley',
			'keywords'        => array( 'posts',),
			'align'           => 'full',
			'mode'            => 'edit',
			'supports'        => array(
				'mode'   => false,
				'align'  => false,
				'anchor' => true,
				'jsx'    => true,
			),
			'render_template' => 'includes/blocks/posts.php',
		) );
		acf_register_block_type( array(
			'name'            => 'jobs',
			'title'           => __( 'Jobs', 'whitelabel' ),
			'description'     => '',
			'category'        => 'gellert',
			'icon'            => 'smiley',
			'keywords'        => array( 'jobs',),
			'align'           => 'full',
			'mode'            => 'edit',
			'supports'        => array(
				'mode'   => false,
				'align'  => false,
				'anchor' => true,
				'jsx'    => true,
			),
			'render_template' => 'includes/blocks/jobs.php',
		) );

		acf_register_block_type( array(
			'name'            => 'text-slider',
			'title'           => __( 'Text Slider', 'whitelabel' ),
			'description'     => '',
			'category'        => 'gellert',
			'icon'            => 'smiley',
			'keywords'        => array( 'jobs',),
			'align'           => 'full',
			'mode'            => 'edit',
			'supports'        => array(
				'mode'   => false,
				'align'  => false,
				'anchor' => true,
				'jsx'    => true,
			),
			'render_template' => 'includes/blocks/text-slider.php',
		) );
		acf_register_block_type( array(
			'name'            => 'text-media',
			'title'           => __( 'Text / Media', 'whitelabel' ),
			'description'     => '',
			'category'        => 'gellert',
			'icon'            => 'smiley',
			'keywords'        => array( 'text', ',media' ),
			'align'           => 'full',
			'mode'            => 'edit',
			'supports'        => array(
				'mode'   => false,
				'align'  => false,
				'anchor' => true,
				'jsx'    => true,
			),
			'render_template' => 'includes/blocks/text-media.php',
		) );

		acf_register_block_type( array(
			'name'            => 'companies',
			'title'           => __( 'Companies', 'whitelabel' ),
			'description'     => '',
			'category'        => 'gellert',
			'icon'            => 'smiley',
			'keywords'        => array( 'companies', 'logos' ),
			'align'           => 'full',
			'mode'            => 'edit',
			'supports'        => array(
				'mode'   => false,
				'align'  => false,
				'anchor' => true,
				'jsx'    => true,
			),
			'render_template' => 'includes/blocks/companies.php',
		) );

		acf_register_block_type( array(
			'name'            => 'video',
			'title'           => __( 'Video', 'whitelabel' ),
			'description'     => '',
			'category'        => 'gellert',
			'icon'            => 'smiley',
			'keywords'        => array( 'video', 'media' ),
			'align'           => 'full',
			'mode'            => 'edit',
			'supports'        => array(
				'mode'   => false,
				'align'  => false,
				'anchor' => true,
				'jsx'    => true,
			),
			'render_template' => 'includes/blocks/video.php',
		) );

		acf_register_block_type( array(
			'name'            => 'footer-text',
			'title'           => __( 'Footer Text', 'whitelabel' ),
			'description'     => '',
			'category'        => 'gellert',
			'icon'            => 'smiley',
			'keywords'        => array( 'footer', 'text', ),
			'align'           => 'full',
			'mode'            => 'edit',
			'supports'        => array(
				'mode'   => false,
				'align'  => false,
				'anchor' => true,
				'jsx'    => true,
			),
			'render_template' => 'includes/blocks/footer-text.php',
		) );

	}
}

add_action( 'acf/init', 'whitelabel__register_blocks' );


/**
 * filter allowed blocks
 *
 */
function whitelabel__allowed_blocks( $allowed_block_types, $block_editor_context ) {

	$allowed_block_types = array(
		'acf/hero',
		'acf/section-headline',
		'acf/intro',
		'acf/text',
		'acf/text-media',
		'acf/video',
		'acf/companies',
		'acf/tabs',
		'acf/posts',
		'acf/jobs',
		'acf/text-slider',
	);

	if ( 'core/customize-widgets' === $block_editor_context->name || 'core/edit-widgets' === $block_editor_context->name ) {
		$allowed_block_types = array(
			'acf/footer-text',
		);
	}

	return $allowed_block_types;
}

add_filter( 'allowed_block_types_all', 'whitelabel__allowed_blocks', 10, 2 );