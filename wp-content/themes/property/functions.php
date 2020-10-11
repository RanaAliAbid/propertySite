
<?php


function load_stylesheets()

{


	wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style('bootstrap'); 

	wp_register_style('fontawesome', get_template_directory_uri() . '/css/fonts/font-awesome/css/font-awesome.css', array(), 1, 'all');
	wp_enqueue_style('fontawesome'); 


wp_register_style('owlcarousel', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css', array(), 1, 'all');
	wp_enqueue_style('owlcarousel'); 


wp_register_style('owlcarouseltheme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css', array(), 1, 'all');
	wp_enqueue_style('owlcarouseltheme'); 

	wp_register_style('flexslider', get_template_directory_uri() . '/vendor/flexslider/flexslider.css', array(), 1, 'all');
	wp_enqueue_style('flexslider'); 

	wp_register_style('chosen', get_template_directory_uri() . '/vendor/chosen/chosen.css', array(), 1, 'all');
	wp_enqueue_style('chosen'); 


	wp_register_style('themeanimate', get_template_directory_uri() . '/css/theme-animate.css', array(), 1, 'all');
	wp_enqueue_style('themeanimate'); 

	wp_register_style('themeelements', get_template_directory_uri() . '/css/theme-elements.css', array(), 1, 'all');
	wp_enqueue_style('themeelements'); 

	wp_register_style('themeblog', get_template_directory_uri() . '/css/theme-blog.css', array(), 1, 'all');
	wp_enqueue_style('themeblog'); 

wp_register_style('thememap', get_template_directory_uri() . '/css/theme-map.css', array(), 1, 'all');
	wp_enqueue_style('thememap'); 

	wp_register_style('theme', get_template_directory_uri() . '/css/theme.css', array(), 1, 'all');
	wp_enqueue_style('theme'); 

	wp_register_style('prism', get_template_directory_uri() . '/css/prism.css', array(), 1, 'all');
	wp_enqueue_style('prism'); 

	wp_register_style('slider', get_template_directory_uri() . '/css/slider.css', array(), 1, 'all');
	wp_enqueue_style('slider'); 

	wp_register_style('main', get_template_directory_uri() . '/css/main.min.css', array(), 1, 'all');
	wp_enqueue_style('main'); 



	wp_register_style('stylesswitcher', get_template_directory_uri() . '/style-switcher/css/style-switcher.css', array(), 1, 'all');
	wp_enqueue_style('stylesswitcher'); 

	wp_register_style('colors', get_template_directory_uri() . '/css/colors/red/style.html', array(), 1, 'all');
	wp_enqueue_style('colors'); 

wp_register_style('themeresponsive', get_template_directory_uri() . '/css/theme-responsive.css', array(), 1, 'all');
	wp_enqueue_style('themeresponsive'); 


	wp_register_style('slick', get_template_directory_uri() . '/css/slick.css', array(), 1, 'all');
	wp_enqueue_style('slick'); 

	wp_register_style('slick-theme', get_template_directory_uri() . '/css/slick.css', array(), 1, 'all');
	wp_enqueue_style('slick-theme'); 



	wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
	wp_enqueue_style('custom'); 

}

add_action('wp_enqueue_scripts', 'load_stylesheets');















//Load Scripts

function addjs()
{
	wp_register_script('jquery', get_template_directory_uri() . '/vendor/jquery.min.js', array() , 1 , 1 , 1);
	wp_enqueue_script('jquery');


	wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array() , 1, 1, 1);
	wp_enqueue_script('bootstrap');

	wp_register_script('owlcarousel', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.js', array() , 1, 1, 1);
	wp_enqueue_script('owlcarousel');

wp_register_script('flexslider', get_template_directory_uri() . '/vendor/flexslider/jquery.flexslider-min.js', array() , 1, 1, 1);
	wp_enqueue_script('flexslider');

	wp_register_script('chosen', get_template_directory_uri() . '/vendor/chosen/chosen.jquery.min.js', array() , 1, 1, 1);
	wp_enqueue_script('chosen');



  

	wp_register_script('gmap', get_template_directory_uri() . 'http://maps.google.com/maps/api/js?sensor=false', array() , 1, 1, 1);
	wp_enqueue_script('gmap');

		wp_register_script('gmapp', get_template_directory_uri() . '/vendor/jquery.gmap.js', array() , 1, 1, 1);
	wp_enqueue_script('gmapp');




	// wp_register_script('gmap', get_template_directory_uri() . '/vendor/gmap/gmap3.infobox.min.js', array() , 1, 1, 1);
	// wp_enqueue_script('gmap');

wp_register_script('themeplugins', get_template_directory_uri() . '/js/theme.plugins.js', array() , 1, 1, 1);
	wp_enqueue_script('themeplugins');

	wp_register_script('theme', get_template_directory_uri() . '/js/theme.js', array() , 1, 1, 1);
	wp_enqueue_script('theme');

wp_register_script('sliderscript', get_template_directory_uri() . '/js/slider-script.min.js', array() , 1, 1, 1);
	wp_enqueue_script('sliderscript');

	wp_register_script('prism', get_template_directory_uri() . '/js/prism.js', array() , 1, 1, 1);
	wp_enqueue_script('prism');


wp_register_script('slider', get_template_directory_uri() . '/js/slider.js', array() , 1, 1, 1);
	wp_enqueue_script('slider');


wp_register_script('slick', get_template_directory_uri() . '/js/slick.js', array() , 1, 1, 1);
	wp_enqueue_script('slick');


	wp_register_script('custom', get_template_directory_uri() . '/custom.js', array() , 1, 1, 1);
	wp_enqueue_script('custom');





}



add_action('wp_enqueue_scripts', 'addjs');


//Menu Support
add_theme_support('menus');


//Register Menus
register_nav_menus(
	array(
		'top-menu' => __('Top Menu', 'theme'),
	)
);