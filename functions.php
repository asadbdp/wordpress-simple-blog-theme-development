<?php 
	
	add_action('after_setup_theme', 'basictheme');

	function basictheme(){
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support('custom-background', array(
			'default-image' => get_template_directory_uri().'/images/background.png'			
		));

		add_theme_support('custom-header', array(			
			'default-image' => get_template_directory_uri().'/images/anoceanofsky.jpg'
		));

		load_theme_textdomain('firsttheme', get_template_directory().'/lan');

		register_nav_menu('main-menu', __('Main Menu', 'firsttheme'));

		

			if(current_user_can('manage_options')){
			register_post_type('testmonial', array(
			'labels' => array(
			'name' => 'Testmonials',
			'add_new_item' => 'Add New Testimonials',
			'not_found' => 'Testimonials Not Found',
			'search_items' => 'Search Testimonials',
			'featured_image' => 'Testimonials images',
			'view_item' => 'View Testimonials',
			'all_items' => 'All Testimonials',


			),
			'public' => true,
			'menu_icon' => 'dashicons-edit',
			'menu_position' => 5,
			'supports' => array('title', 'thumbnail', 'revisions'),

		));

		}

		

	}

	add_action('widgets_init', 'sitebar');

	function sitebar(){
		register_sidebar(array(
			'name' => 'Right Sidebar',
			'description' => 'Insert your Right Sidebar',
			'id' => 'right-sidebar',
			'before_widget' => '<div class="calendar">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="title">',
			'after_title' => '</h3>',

	));

	}

	



	add_action('wp_enqueue_scripts', 'themestyle');

	function themestyle(){
		wp_enqueue_style('style', get_template_directory_uri().'/style.css');
	}

	remove_action ('welcome_panel', 'wp_welcome_panel'); 

/* start add action */
	add_action('something', 'yesFunctions');

	function yesFunctions(){
		echo "create By Asad";
	} 

/* end add action */

/* start apply add filter */
	/*add_filter('the_title', 'aftertitlefunction');
	function aftertitlefunction($newtitle){
		return "New title ".$newtitle;
	}

	add_filter('some', function($something){
		return "my new filter ".$something;
	})

	*/

/* custom meta box*/
	if(file_exists(dirname(__FILE__).'/metabox/init.php')){
		require_once(dirname(__FILE__).'/metabox/init.php');
	}

	if(file_exists(dirname(__FILE__).'/metabox/custom.php')){
		require_once(dirname(__FILE__).'/metabox/custom.php');
	}
	


?>