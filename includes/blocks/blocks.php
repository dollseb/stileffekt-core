<?php

//
// register custom block editor category
//
function whitelabel__register_block_categories($categories)
{
    return array_merge($categories, array(
        array(
            'slug' => 'stileffekt-all',
            'title' => 'Stileffekt',
        ),
    ));
}

add_filter('block_categories_all', 'whitelabel__register_block_categories', 10, 2);


//
// register custom block editor element
//
function whitelabel__register_blocks()
{

    if (function_exists('acf_register_block_type')) {

	    acf_register_block_type(array(
		    'name' => 'hero',
		    'title' => __('Hero', 'whitelabel'),
		    'description' => '',
		    'category' => 'stileffekt-all',
		    'icon' => 'smiley',
		    'keywords' => array('title', 'hero'),
		    'align' => 'full',
		    'mode' => 'edit',
		    'supports' => array(
			    'mode' => false,
			    'align' => false,
			    'anchor' => true,
			    'jsx' => true,
		    ),
		    'render_template' => 'includes/blocks/hero/block.php',
	    ));

	    acf_register_block_type(array(
		    'name' => 'text',
		    'title' => __('Text', 'whitelabel'),
		    'description' => '',
		    'category' => 'stileffekt-all',
		    'icon' => 'smiley',
		    'keywords' => array('text'),
		    'align' => 'full',
		    'mode' => 'edit',
		    'supports' => array(
			    'mode' => false,
			    'align' => false,
			    'anchor' => true,
			    'jsx' => true,
		    ),
		    'render_template' => 'includes/blocks/text/block.php',
	    ));

	    acf_register_block_type(array(
		    'name' => 'text-media',
		    'title' => __('Text/Media', 'whitelabel'),
		    'description' => '',
		    'category' => 'stileffekt-all',
		    'icon' => 'smiley',
		    'keywords' => array('text', 'media'),
		    'align' => 'full',
		    'mode' => 'edit',
		    'supports' => array(
			    'mode' => false,
			    'align' => false,
			    'anchor' => true,
			    'jsx' => true,
		    ),
		    'render_template' => 'includes/blocks/text-media/block.php',
	    ));

	    acf_register_block_type(array(
		    'name' => 'widget-text',
		    'title' => __('Text', 'whitelabel'),
		    'description' => '',
		    'category' => 'stileffekt-all',
		    'icon' => 'smiley',
		    'keywords' => array('text',),
		    'align' => 'full',
		    'mode' => 'edit',
		    'supports' => array(
			    'mode' => false,
			    'align' => false,
			    'anchor' => true,
			    'jsx' => true,
		    ),
		    'render_template' => 'includes/blocks/widget-text/block.php',
	    ));
    }
}

add_action('acf/init', 'whitelabel__register_blocks');


/**
 * return allowed block editor elements
 */
function whitelabel__allowed_blocks($allowed_block_types, $block_editor_context)
{
    if ('core/edit-widgets' === $block_editor_context->name || 'core/customize-widgets' === $block_editor_context->name) {
        return array(
	        'acf/widget-text',
	        'acf/widget-languages',
	        'acf/widget-navigation',
        );
    }

    return array(
	    'acf/hero',
	    'acf/text',
	    'acf/text-media',
    );
}

add_filter('allowed_block_types_all', 'whitelabel__allowed_blocks', 10, 2);
