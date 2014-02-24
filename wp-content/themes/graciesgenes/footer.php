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
			<h5>Customer Support</h5>
			<ul>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Shipping & Returns</a></li>
				<li><a href="#">Our Locations</a></li>
				<li><a href="#">Help with an Order</a></li>
			</ul>
		</div>
		<div class="column4">
			<h5>Recent Articles</h5>
			<ul class="recentarticles">
				<li><a href="#">
					<div class="post-title">How to dress up and go to the radio but make sure you stand out from the crowd!</div>
					<div class="post-date">1.31.2014</div>
				</a></li>
				<li><a href="#">
					<div class="post-title">How to dress up and go to the radio but make sure you stand out from the crowd!</div>
					<div class="post-date">1.31.2014</div>
				</a></li>
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
</script>
<!-- End Document
================================================== -->


	<?php wp_footer(); ?>

	<!-- Don't forget analytics -->

</body>
</html>
