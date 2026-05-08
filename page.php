<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peruviptravel
 */

get_header();
?>

<?php
$image = get_field('slider');
if (!empty($image)) :
	$size = 'slider';
	$thumb = $image['sizes'][$size];
endif;
?>
<section class="flex items-center justify-center relative" style="height: 450px;background-image:url(<?php echo $thumb; ?>);">
	<div class="absolute top-0 bottom-0 w-full bg-black bg-opacity-40"></div>
	<div class="text-center z-40">
		<?php the_title('<h1 class="block font-raleway text-4xl text-white mb-5 font-bold uppercase">', '</h1>'); ?>
	</div>
</section>

<section class="px-5 py-10">
	<div class="container max-w-6xl">
		<main id="primary" class="plan homes">

			<?php
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/content', 'page');

				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div>
</section>

<?php

get_footer();
