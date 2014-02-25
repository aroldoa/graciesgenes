<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="upperdeck">
	<div class="container16">
		<div class="column6 gethelp">
			Help Placing an Order?  <span><strong>210-222-2222</strong></span>
		</div>
		<div class="column10 upperdecklinks">
			<ul id="toplinks">
				<li><a href="#">My Account</a></li>
				<li><a href="#">Create an Account</a></li>
				<li><a href="#">Contact Us</a></li>
				<li class="carticon"><a href="#">$0.00</a></li>
			</ul>
		</div>
	</div>
</div><!-- end of the upper top area -->
<div class="container16 wrap shadow">
	<header class="row">
		<div class="column4 prefix6">
			<a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png" alt="Gracies Genes"/></a>
		</div>
		<div class="column4 prefix2 search">
			<form>
				<input class="mainsearch" type="text" value="SEARCH HERE"/>
				<input type="button" class="searchicon" value=""/>
			</form>
		</div>
	</header><!-- end of header area -->
	<nav class="row">
		<ul>
			<li><a href="#">New Arrivals</a></li>
			<li class="drop"><a href="#">Clothing</a></li>
			<li><a href="#">Jewelry</a></li>
			<li class="drop"><a href="#">Baby Wear</a></li>
			<li><a href="#">Gift Ideas</a></li>
			<li><a href="#">On Sale</a></li>
			<li class="last"><a href="#">Look Book</a></li>
		</ul>
	</nav><!-- end of main naviation -->