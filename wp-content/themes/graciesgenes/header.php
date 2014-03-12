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
	<link href='http://fonts.googleapis.com/css?family=Gafata' rel='stylesheet' type='text/css'>

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
				<?php global $woocommerce; ?>
				<li class="carticon"><a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a></li>
			</ul>
		</div>
	</div>
</div><!-- end of the upper top area -->
<div class="container16 wrap shadow">
	<header class="row">
		<div class="column4 prefix6">
			<a href="/graciesgenes"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png" alt="Gracies Genes"/></a>
		</div>
		<div class="column4 prefix2 search">
			<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
				<input class="mainsearch" type="text" name="s" value="SEARCH HERE" />
				<input type="submit" class="searchicon" value="" id="searchsubmit"/>
			</form>
		</div>
	</header><!-- end of header area -->
	<?php
		$defaults = array(
			'theme_location'  => 'primary',
			'menu'            => '',
			'container'       => 'nav',
			'container_class' => 'row',
			'container_id'    => '',
			'menu_class'      => '',
			'menu_id'         => 'nav',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
		);?>

		<?php wp_nav_menu( $defaults );?>

	<?php
	add_filter( 'wp_nav_menu_objects', 'add_menu_parent_class' );
	function add_menu_parent_class( $items ) {

		$parents = array();
		foreach ( $items as $item ) {
			if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
				$parents[] = $item->menu_item_parent;
			}
		}

		foreach ( $items as $item ) {
			if ( in_array( $item->ID, $parents ) ) {
				$item->classes[] = 'menu-parent-item';
			}
		}

		return $items;
	}

	?>
