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

    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

	add_action('woo_product_tabs', 'woocommerce_output_product_data_tabs');



    //Two images per item in category
    function woocommerce_remove_product_thumbnail(){
        remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
    }

    add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_remove_product_thumbnail');

    function woocommerce_custom_product_category(){
        global $post;
        global $product;

        $size = 'shop_catalog';
        $opening_container = '<div class="overlay">';
        $attachment_ids = $product->get_gallery_attachment_ids();
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size);

         if(has_post_thumbnail() && ($attachment_ids)){
            $attrs = array(
                'id'    => 'product_category_image_0',
                'src'   => $src[0],
                'class' => "attachment-$size",
                'alt'   => trim(strip_tags( $attachment->post_excerpt )),
                'title' => trim(strip_tags( $attachment->post_title )),
            );
            $img_tags = (get_the_post_thumbnail( $post->ID, $size, $attrs));
        }

        if($attachment_ids){
            for($i=0; $i<=0;$i++){
                $image_link = wp_get_attachment_url( $attachment_ids[$i] );
                $image_metadata = wp_get_attachment_metadata( $attachment_ids[$i]);
                if(isset($image_metadata['sizes'])){
                    $image_size = $image_metadata['sizes'][$size];
                }
<<<<<<< HEAD

                $img_tags .= '<img id="product_category_image_'. $i .'" src="' . $image_link . '" width="'. $image_size['width'] .'" height="'. $image_size['height'] .'"  />';
=======
                
                $img_tags .= '<img id="product_category_image_'. ($i+1) .'" src="' . $image_link . '" width="'. $image_size['width'] .'" height="'. $image_size['height'] .'"  />';
>>>>>>> FETCH_HEAD
            }
            $closing_container = '</div>';
            $images = $opening_container . $img_tags . $closing_container;
            echo($images);

        }elseif(has_post_thumbnail()){
            echo (get_the_post_thumbnail( $post->ID, $size ));
        }
        elseif ( wc_placeholder_img_src() )
            echo (wc_placeholder_img( $size ));
    }

    add_action( 'woo_custom_product_category', 'woocommerce_custom_product_category' );



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