<?php get_header(); ?>

<div class="product-pages">
	<?php get_sidebar(); ?>
</div><!-- end of sidebar area -->

<div class="product-category">
	<div class="column12 main prefix1">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h2><span><?php the_title(); ?></span></h2>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div><br/><br/>

			<?php edit_post_link('Edit this entry','','.'); ?>

	<?php endwhile; endif; ?>

	</div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>