<?php
function elegance_widgets_init() {
	
	// Header Widget
	// Location: right after the navigation
	register_sidebar(array(
		'name'					=> 'Header Widget',
		'id' 						=> 'header-widget',
		'description'   => __( 'Located at the top of pages.'),
		'before_widget' => '<div id="%1$s" class="widget-header">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Sidebar',
		'id' 						=> 'main-sidebar',
		'description'   => __( 'Located at the right side of pages.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	// Content Widget 1
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Content Widget 1',
		'id' 						=> 'content-widget-1',
		'description'   => __( 'Located in content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Content Widget 2
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Content Widget 2',
		'id' 						=> 'content-widget-2',
		'description'   => __( 'Located in content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Content Widget 3
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Content Widget 3',
		'id' 						=> 'content-widget-3',
		'description'   => __( 'Located in content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Newsletter Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Newsletter Widget',
		'id' 						=> 'newsletter-widget',
		'description'   => __( 'Located in content.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Social Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Social Widget',
		'id' 						=> 'social-widget',
		'description'   => __( 'Located in content.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	));

}
/** Register sidebars by running elegance_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'elegance_widgets_init' );
?>