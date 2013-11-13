<?php
function my_script() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.5.1.min.js', false, '1.5.1');
		wp_enqueue_script('jquery');

		wp_enqueue_script('superfish', get_bloginfo('template_url').'/js/superfish.js', array('jquery'), '1.4.8');
		wp_enqueue_script('prettyPhoto', get_bloginfo('template_url').'/js/jquery.prettyPhoto.js', array('jquery'), '3.0.3');
		wp_enqueue_script('loader', get_bloginfo('template_url').'/js/jquery.loader.js', array('jquery'), '1.0');
		wp_enqueue_script('bgstretcher', get_bloginfo('template_url').'/js/bgstretcher.js', array('jquery'), '1.2');
		//wp_enqueue_script('cufon_yui', get_bloginfo('template_url').'/js/cufon-yui.js', array('jquery'), '1.09i');
		wp_enqueue_script('Kozuka_Gothic', get_bloginfo('template_url').'/js/Kozuka_Gothic_Pro_OpenType_500.font.js', array('jquery'), '1.0');
		wp_enqueue_script('cufon_replace', get_bloginfo('template_url').'/js/cufon-replace.js', array('jquery'), '1.0');
	}
}
add_action('init', 'my_script');
?>