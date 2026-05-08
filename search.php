<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package peruviptravel
 */

get_header();
?>
<section class="front-image flex items-center justify-center relative" style="height: 250px;">
	<div class="absolute top-0 bottom-0 w-full bg-black bg-opacity-20"></div>
	<div class="text-center z-40">
		<h1 class="block font-raleway text-4xl text-white mb-5 font-bold uppercase text-shadow">
			<?php printf(esc_html__('Search Results for: %s', 'peruviptravel'), '<span>' . get_search_query() . '</span>'); ?>
		</h1>
	</div>
</section>


<section class="py-10">
	<div class="container max-w-6xl">
		<main id="primary" class="site-main">

			<div class="grid grid-cols-4 gap-4">
				<?php if (have_posts()) : ?>

				<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part('template-parts/content', 'search');

					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>
			</div>

		</main>
	</div>
</section>

<?php

get_footer();
