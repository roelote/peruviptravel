<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package peruviptravel
 */

get_header();
?>

<section class="mt-1">
	<div class="container max-w-6xl">
		<?php
		if (function_exists('yoast_breadcrumb')) {
			yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
		}
		?>
	</div>
</section>
<section class="mb-5">
	<div class="container max-w-6xl">
		<div class="flex flex-wrap overflow-hidden xl:-mx-3">

			<?php the_title('<h1 class="text-3xl font-raleway font-bold text-gray-800 pt-5 px-3 mb-3">', '</h1>'); ?>
			<div class="w-full overflow-hidden  xl:px-3 xl:w-9/12">

				<header class="entry-header">
					<?php
					if ('post' === get_post_type()) :
					?>
						<div class="entry-meta">
							<?php
							peruviptravel_posted_on();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->


				<main id="primary" class="site-main blog-post">
					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', get_post_type());



					endwhile; // End of the loop.
					?>

				</main>
			</div>
			<div class="w-full overflow-hidden xl:my-3 xl:px-3 xl:w-3/12">
				<div class="bg-gray-50 h-full mx-3">
					<div class="text-center px-3">

						
						 <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
						   <span class="text-lg text-gray-800 font-semibold font-raleway linef table relative mx-auto my-5">BLOG CATEGORYS</span>
						<?php }
						if (ICL_LANGUAGE_CODE == 'es') { ?>
						  <span class="text-lg text-gray-800 font-semibold font-raleway linef table relative mx-auto my-5">CATEGORIAS DE BLOG</span>
						<?php } ?>
						
						<div class="text-left">
							<ul class="list-inside list-disc">
								<?php
						
						$categories = get_categories();
foreach($categories as $category) {
   echo '<li class="text-gray-700 border-b py-1.5 hover:text-peruvip-500 transition delay-150 cursor-pointer"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
}
						
						?>
								
							</ul>
						</div>


						<?php
						$args = array(
							'post_type' => 'tour',
							'posts_per_page' => 6
						);
						$lastposts = get_posts($args); ?>



						<span class="text-lg text-gray-800 font-semibold font-raleway linef table relative mx-auto my-5">TOP TOURS</span>
						<div class="text-left">
							<ul class="list-inside list-disc">
								<?php foreach ($lastposts as $post) :
									setup_postdata($post); ?>
									<li class="text-gray-700 border-b py-1.5 hover:text-peruvip-500 transition delay-150 cursor-pointer"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

								<?php endforeach;
								wp_reset_postdata();
								?>

							</ul>
						</div>

						 <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
						   <span class="text-lg text-gray-800 font-semibold font-raleway linef table relative mx-auto my-5">CERTIFICATIONS</span>
						<?php }
						if (ICL_LANGUAGE_CODE == 'es') { ?>
						  <span class="text-lg text-gray-800 font-semibold font-raleway linef table relative mx-auto my-5">CERTIFICADOS</span>
						<?php } ?>

						<img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/trip1.png" alt="bg home" class="mx-auto">

						<!-- <span class="inline-block text-lg text-gray-800 font-semibold font-raleway linef relative">TRIPADVISOR</span> -->
						<span class="inline-block text-lg text-gray-800 font-semibold font-raleway linef mb-2 relative my-5">TRIPADVISOR</span>

						<div class="my-5">
							<div id="TA_selfserveprop184" class="TA_selfserveprop">
								<ul id="aQMILHDNd" class="TA_links hGc4kWBsX1Mg">
									<li id="mmuo4TBt9" class="2MymduuWO"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g294314-d11847321-Reviews-Machupicchu_Vip_Tours-Cusco_Cusco_Region.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-11900-2.svg" alt="TripAdvisor" /></a></li>
								</ul>
							</div>
							<script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=184&amp;locationId=11847321&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
						</div>




					</div>
					<br>

				</div>

			</div>
		</div>
	</div>
</section>

<?php

get_footer();
