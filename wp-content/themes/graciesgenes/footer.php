<div class="clear"></div>
	<div class="socialarea row">
		<div class="column5 prefix6">
			<ul class="socialbuttons">
				<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/facebook.png" alt="Facebook"/></a></li>
				<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/twitter.png" alt="Facebook"/></a></li>
				<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/linkedin.png" alt="Facebook"/></a></li>
				<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/pinterest.png" alt="Facebook"/></a></li>
				<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/google+.png" alt="Facebook"/></a></li>
			</ul>
		</div>
	</div><!-- end of social area -->
	<div class="pre-footer row">
		<div class="column4">
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Sidebar')) : else : ?>
			<?php endif; ?>
		</div>
		<div class="column4">
			<h5>Recent Articles</h5>


			<?php

$args = array(
	'post_type' => 'post',
	'showposts' => '2'
);

 // the query
 $the_query = new WP_Query( $args ); ?>



			<ul class="recentarticles">

	  <?php if ( $the_query->have_posts() ) : ?>

  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<li><a href="<?php the_permalink() ?>">
					<div class="post-title"><?php the_title();?></div>
					<div class="post-date"><?php the_date();?></div>
				</a></li>
<?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php else:  ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

			</ul>



		</div>
		<div class="column4">
			<h5>Instagram</h5>
		</div>
		<div class="column4">
			<h5>Join Our Newsletter</h5>
			<form>
				<input class="field" type="text" value="" name="firstname"/>
				<input class="field" type="text" value="" name="lastname"/>
				<input class="btn" type="submit" value="Submit" name="submit" />
			</form>
		</div>
	</div><!-- end of pre-footer area -->
<div class="clear"></div>
	<footer>
	<div class="container16">
		<div class="column14 copyright">
			<p>&copy; Copyright 2014 - Gracie's Genes Boutique</p>
		</div>
		<div class="column2 primo">
			<a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/primo.png" alt="San Antonio Web Design Agency"/></a>
		</div>
	</div>
	</footer><!-- end of footer area -->
</div><!-- end of the entire wrapper -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/inc/bxslider/jquery.bxslider.min.js"></script>

<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.elevateZoom-3.0.8.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.products').bxSlider({
			slideWidth: 1120,
			minSlides: 5,
			maxSlides: 20,
			hideControlOnEnd: true,
			responsive: true,
			touchEnabled: true,
			speed: 2500
		});
	});


	(function(){
		var navLi = $('nav li').children('ul').hide().end();

		navLi.hover(function(){
			$(this).find('> ul').stop(true, true).slideDown(250);
		},function(){
			$(this).find('> ul').stop(true, true).hide();
		});

		//zoom photo
		$("#zoom").elevateZoom();

	  	$('.overlay').hover(
			function(){
				$div = $(this);
				$div.find('#product_category_image_0').stop(true, true).fadeTo(100,0);
				$div.find('#product_category_image_1').stop(true, true).fadeIn(200);
			},
			function(){
				$div.find('#product_category_image_1').stop(true, true).fadeOut(100);
				$div.find('#product_category_image_0').stop(true, true).fadeTo(200,1);



			}
		);
	})();
</script>
<!-- End Document
================================================== -->


	<?php wp_footer(); ?>

	<!-- Don't forget analytics -->

</body>
</html>