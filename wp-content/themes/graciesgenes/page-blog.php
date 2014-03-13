<?php
/**
 * Template Name: Blog
 *
 * A custom Home Page Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */
get_header(); ?>

<div class="product-pages">
	<?php get_sidebar('post'); ?>
</div><!-- end of sidebar area -->

<div class="product-category">
	<div class="column12 main prefix1">

	<h2><span>Fashion Blog</span></h2>


<?php

$args = array(
	'post_type' => 'post'
);

 // the query
 $the_query = new WP_Query( $args ); ?>

  <?php if ( $the_query->have_posts() ) : ?>

  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  	<div class="post-entry">
		<h3><?php the_title(); ?></h3>
		<?php the_excerpt(); ?>
		<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

		<a href="<?php the_permalink() ?>">Read More</a>

		<hr/>
	</div>
  <?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php else:  ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

	</div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>
