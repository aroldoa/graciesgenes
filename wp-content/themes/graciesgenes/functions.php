<?php

	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );

	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}


	//Reposition WooCommerce breadcrumb 
    function woocommerce_remove_breadcrumb(){
        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    }

    add_action('woocommerce_before_main_content', 'woocommerce_remove_breadcrumb');

    function woocommerce_custom_breadcrumb(){
        $args = array(
            'delimiter'   => ' &#47; ',
            'wrap_before' => '<div class="custom_breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</div>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
        woocommerce_breadcrumb($args);
    }

    add_action( 'woo_custom_breadcrumb', 'woocommerce_custom_breadcrumb' );

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    register_nav_menus( array(
    	'primary' => 'Primary Navigation',
    	'pages' => 'Pages Navigation',
		'footer' => 'Footer Navigation'

    	) );

    add_theme_support('post-thumbnails');

    add_action('init', 'promotions');

    function promotions()
    {
    	register_post_type('promotions',
    		array(
    			'labels' => array(
    				'name' => __('Promotions'),
    				'singular_name' => __('Promotion'),
    				'all_items' => __('All Promotions'),
    				'add_new' => __('Add New Promotion'),
    				'add_new_item' => __('Add A New Promotion'),
    				'new_item' => __('Add Promotion'),
    				'edit_item' => __('Edit Promotion'),
    			),
    			'description' => 'Use this panel to add images to the site Promotions',
    			'public' => true,
    			'exclude_from_search' => true,
    			'menu_position' => 26,
    			'supports' => array(
    				'title',
    				'editor',
    				'custom-fields',
    				'excerpt',
    				'thumbnail',
    				'page-attributes'
    			),
    			// 'hierarchical' => true,
    			'show_in_nav_menus' => false,
    		)
    	);
    }


    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }


  if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Page Sidebar',
    		'id'   => 'page-sidebar',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

     if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer Sidebar',
    		'id'   => 'footer-sidebar',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h5>',
    		'after_title'   => '</h5>'
    	));
    }

    //breadcrumb
   

?>