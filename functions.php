<?php 

//ad style sheet into header section
function mytheme(){

	//style sheet
	wp_enqueue_style('wp_style',get_stylesheet_uri());
	wp_enqueue_style('boostap_file',get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('font_style',get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('theme_style',get_template_directory_uri().'/css/style.css');
}

add_action('wp_enqueue_scripts','mytheme');






//add menu bar in wordpress admin panel 


function Add_menu_bar(){
     // menu register code
  register_nav_menus(
            array(
                'primary-menu' => __('Primary  Menu Bar'),  // Id and Name
                'footer-menu' => __('Footer Menu Bar')     // Id and Name
            )
    );
  }
// After making menus registration function next we have to attach with action hook as 'init'.
// attach with action hook
add_action('init', 'Add_menu_bar'); 





?>



