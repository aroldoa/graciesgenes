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
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
		</ul>
	</div>
</div><!-- end of featured products -->
<div class="products-slider row">
	<div class="column16">
		<h2><span>Sale Items</span></h2>
		<ul class="products">
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/product.jpg" width="190px" alt=""/></a></li>
		</ul>
	</div>
</div><!-- end of best sellers -->

<div class="promoarea row">
	<div class="column8">
		<img src="<?php bloginfo( 'template_directory' ); ?>/images/promo1.jpg" alt="promo1"/>
	</div>
	<div class="column8">
		<img src="<?php bloginfo( 'template_directory' ); ?>/images/promo2.jpg" alt="promo2"/>
	</div>
</div><!-- end of promo area -->

<?php get_footer(); ?>