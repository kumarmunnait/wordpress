<?php 
function mytheme(){
	//style sheet
	wp_enqueue_style('wp_style',get_stylesheet_uri());
	wp_enqueue_style('boostap_file',get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('font_style',get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('theme_style',get_template_directory_uri().'/css/style.css');
}

add_action('wp_enqueue_scripts','mytheme');

?>