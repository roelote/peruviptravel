<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peruviptravel
 */

?>

<article id="post-<?php the_ID(); ?>" class="border border-gray-200 shadow-lg" <?php post_class(); ?>>
	<header class="entry-header">


		<?php if ('post' === get_post_type()) : ?>
			<div class="entry-meta">
				<?php
				peruviptravel_posted_on();
				peruviptravel_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="overflow-hidden">
		<?php the_post_thumbnail('category', array('class' => 'h-full transform duration-200 hover:scale-110 cursor-pointer')); ?>
	</div>
	<?php the_title(sprintf('<h2 class="entry-title text-center text-base text-gray-700 py-1.5 font-semibold font-raleway"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

	<div class="entry-summary px-2 pb-2">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php peruviptravel_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->