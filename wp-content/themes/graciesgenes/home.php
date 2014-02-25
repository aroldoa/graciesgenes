<?php
/**
 * Template Name: Custom Home Page
 *
 * A custom Home Page Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */
get_header(); ?>

<div class="slideshow row">
	<div class="column16">
		<?php putRevSlider("home") ?>
	</div>
</div><!-- end of slideshow area -->

<div class="promobanner row">
	<div class="column16">
		<div class="title">FREE SHIPPING ON ALL ORDERS OVER $100</div>
	</div>
</div><!-- end of promo banner -->

<div class="products-slider row">
	<div class="column16">
		<h2><span>Featured Products</span></h2>
		<ul class="products">
		<?php  
		    $args = array( 'post_type' => 'product', 'posts_per_page' => 10,'meta_key' => '_featured',  'meta_value' => 'yes' );

		    $loop = new WP_Query( $args );

		    while ( $loop->have_posts() ) : $loop->the_post(); 
			    global $product; 
			 	echo '<li><a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.the_title().'</a></li>';
		    endwhile; 

		    wp_reset_query(); 

		?>
		</ul>
	</div>
</div><!-- end of featured products -->
<div class="products-slider row">
	<div class="column16">
		<h2><span>Sale Items</span></h2>
		<ul class="products">
		<?php  
		    $args = array(
		    	'post_type' => 'product', 
		    	'posts_per_page' => 10,
		    	'meta_key' => '_sale_price',  
		    	'meta_query' => array(
					array(
						'key' => '_sale_price',
						'value' => 0,
						'compare' => '>',
						'type' => 'numeric'
					)
				)
		    );

		    $loop = new WP_Query( $args );
		    print_r($loop);

		    while ( $loop->have_posts() ) : $loop->the_post(); 
			    global $product; 
			 	echo '<li><a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.the_title().'</a></li>';
		    endwhile; 

		    wp_reset_query(); 

		?>
		</ul>
	</div>
</div><!-- end of best sellers -->

<div class="promoarea row">

<?php

$args = array(
	'post_type' => 'promotions',
	'posts_per_page' => 2,
	'order' => 'ASC'
);

$query = new WP_Query ($args); ?>

<?php if ( $query->have_posts() ) : ?>

<?php while ( $query->have_posts() ) : $query->the_post(); ?>

 <div class="column8">
		<a href="<?php the_permalink(); ?>">

			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail('', array('class' => 'scale-with-grid alignleft ')); } ?>

		</a>
	</div>

<?php endwhile; ?>

<?php else:  ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div><!-- end of promo area -->
<?php get_footer(); ?>