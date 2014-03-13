<?php get_header(); ?>

<div class="product-pages">
	<?php get_sidebar('page'); ?>
</div><!-- end of sidebar area -->

<div class="product-category">
	<div class="column12 main prefix1">

	<?php if (have_posts()) : ?>

		<h2><span>Search Results</span></h2>

		<?php while (have_posts()) : the_post(); ?>

				<h3><?php the_title(); ?></h3>

				<div class="post-entry">

					<?php the_excerpt(); ?><br/>
					<p><a href="<?php the_permalink() ?>">Read More...</a></p>

					<hr/>

				</div>

		<?php endwhile; ?>


	<?php else : ?>

		<h2><span>No posts found.</span></h2>

	<?php endif; ?>

	</div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>