
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

	function register_styles(){
		wp_enqueue_style('fonts-googleapi', "https://fonts.googleapis.com",array(),'5.2.0','all');
		wp_enqueue_style('fonts-gstatic', "https://fonts.gstatic.com",array(),'5.2.0','all');
		wp_enqueue_style('bootstrap-css', get_template_directory_uri()."/assets/vendor/bootstrap/css/bootstrap.min.css",array(),'5.2.0','all');
		wp_enqueue_style('bootstrap-icon', get_template_directory_uri()."/assets/vendor/bootstrap-icons/bootstrap-icons.css",array(),'5.2.0','all');
		wp_enqueue_style('swiper-bundle', get_template_directory_uri()."/assets/vendor/swiper/swiper-bundle.min.css",array(),'5.2.0','all');
		wp_enqueue_style('glightbox-css', get_template_directory_uri()."/assets/vendor/glightbox/css/glightbox.min.css",array(),'5.2.0','all');
		wp_enqueue_style('aos-css', get_template_directory_uri()."/assets/vendor/aos/aos.css",array(),'5.2.0','all');

		wp_enqueue_style('variable-css', get_template_directory_uri()."/assets/css/variables.css",array(),'5.2.0','all');
		wp_enqueue_style('style-css', get_template_directory_uri()."/style.css",array(),'1.0','all');

	}
	add_action('wp_enqueue_scripts', 'register_styles');

	function register_scripts(){
		wp_enqueue_script('bootstrap-bundle-script', get_template_directory_uri()."/assets/vendor/bootstrap/js/bootstrap.bundle.min.js",array(),'5.2.0',true);
		wp_enqueue_script('swiper-bundle-script', get_template_directory_uri()."/assets/vendor/swiper/swiper-bundle.min.js",array(),'5.2.0',true);
		wp_enqueue_script('glightbox-script', get_template_directory_uri()."/assets/vendor/glightbox/js/glightbox.min.js",array(),'5.2.0',true);
		wp_enqueue_script('aos-script', get_template_directory_uri()."/assets/vendor/aos/aos.js",array(),'5.2.0',true);	
		wp_enqueue_script('php-email-form-script', get_template_directory_uri()."/assets/vendor/php-email-form/validate.js",array(),'5.2.0',true);
	}
	add_action('wp_enqueue_scripts', 'register_scripts');
	
	
	
	
	
?>
