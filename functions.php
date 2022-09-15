
<?php

	function title_theme_support(){

		//Adds dynamic title support 
		add_theme_support('title-tag');		
		add_theme_support('custom-logo');
		//add post support
		add_theme_support('post-thumbnails');
	}
	add_action('after_setup_theme','title_theme_support');

	//create menu options
	function register_menus(){
		$locations = array(
			'primary' => "Main menu at the top",
			'body' => "Body Menu Items"
		);
		register_nav_menus($locations);
	}
	add_action('init', 'register_menus');

	//add anchor class to menus
	// function add_menuclass($ulclass) {
	//     return preg_replace('/<a/', '<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"', $ulclass, -1);
	// }
	// add_filter('wp_nav_menu','add_menuclass');

	function register_styles(){

		wp_enqueue_style('bootstrap-css', get_template_directory_uri()."/assets/css/bootstrap.min.css",array(),'5.2.0','all');
		wp_enqueue_style('templatemo-css', get_template_directory_uri()."/assets/css/templatemo.css",array(),'1.2.0','all');
		wp_enqueue_style('custom-css', get_template_directory_uri()."/assets/css/custom.css",array(),'1.0','all');
		
		wp_enqueue_style('fonts-googleapi', "https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap",array(),'1.0.0','all');
		wp_enqueue_style('fontawesome-css', get_template_directory_uri()."/assets/css/fontawesome.min.css",array(),'5.2.0','all');

	}
	add_action('wp_enqueue_scripts', 'register_styles');

	function register_scripts(){
		wp_enqueue_script('jquery-js', get_template_directory_uri()."/assets/js/jquery-1.11.0.min.js",array(),'1.11.0',true);
		wp_enqueue_script('jquery-migrate-js', get_template_directory_uri()."/jquery-migrate-1.2.1.min.js",array(),'1.2.1',true);
		wp_enqueue_script('bootstrap-js', get_template_directory_uri()."/assets/js/bootstrap.bundle.min.js",array(),'5.2.0',true);
		wp_enqueue_script('templatemo-js', get_template_directory_uri()."/assets/js/templatemo.js",array(),'5.2.0',true);	
		wp_enqueue_script('custom-js', get_template_directory_uri()."/assets/js/custom.js",array(),'5.2.0',true);
	}
	add_action('wp_enqueue_scripts', 'register_scripts');
	
	
	
	function wpb_total_posts() { 
	$total = wp_count_posts()->publish;
		return $total; 
	} 
	add_shortcode('total_posts','wpb_total_posts');
	// add_action('total_posts','wpb_total_posts');

	
?>
