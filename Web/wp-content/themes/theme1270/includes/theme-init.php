<?php

add_action( 'after_setup_theme', 'my_setup' );

if ( ! function_exists( 'my_setup' ) ):

function my_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 250, 114, true ); // Normal post thumbnails
		add_image_size( 'portfolio-post-thumbnail', 290, 150, true ); // Portfolio Thumbnail
		add_image_size( 'small-post-thumbnail', 78, 77, true ); // Small Thumbnail
	}

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// custom menu support
	add_theme_support( 'menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	  	register_nav_menus(
	  		array(
	  		  'header_menu' => 'Header Menu',
	  		  'footer_menu' => 'Footer Menu'
	  		)
	  	);
	}
}
endif;



/* Gallery */
function my_post_type_portfolio() {
	register_post_type( 'portfolio',
                array( 
				'label' => __('Gallery'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'rewrite' => true,
				'hierarchical' => true,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'revisions')
					) 
				);
	register_taxonomy('portfoliocat', 'portfolio', array('hierarchical' => true, 'label' => 'Gallery Categories', 'singular_name' => 'Category'));
}

add_action('init', 'my_post_type_portfolio');



/* Custom Posts */
function my_post_type_custom() {
	register_post_type( 'custom',
                array( 
				'label' => __('Custom'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'revisions')
					) 
				);
}

add_action('init', 'my_post_type_custom');



/* Charity */
function my_post_type_testi() {
	register_post_type( 'testi',
                array( 
				'label' => __('Charity'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'custom-fields',
						'excerpt')
					) 
				);
}

add_action('init', 'my_post_type_testi');



?>