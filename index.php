<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peruviptravel
 */

get_header();
?>

<section class="flex items-center justify-center relative" style="height: 450px; background-image: url(https://www.wanderlustchloe.com/wp-content/uploads/2018/11/Blogging-1.jpg);">
	<div class="absolute top-0 bottom-0 w-full bg-black bg-opacity-50"></div>
	<div class="text-center z-40">
		<h1 class="block font-raleway text-4xl text-white mb-5 font-bold uppercase">Travel Blog </h1>
	</div>
</section>

<section class="mt-1">
	<div class="container max-w-6xl">
		<?php
		if (function_exists('yoast_breadcrumb')) {
			yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
		}
		?>
	</div>
</section>
<section class="main-blog">
	<div class="container max-w-6xl pb-5 mt-3">

		<div class="flex flex-wrap overflow-hidden xl:-mx-3">
			<div class="w-full overflow-hidden xl:my-3 xl:px-3 xl:w-9/12">
				<div class="blog-search">
					<?php echo do_shortcode('[ivory-search id="293" title="Search Blog en"]'); ?>
				</div>
				<div>
					<h2 class="font-raleway my-8 text-xl font-bold uppercase text-gray-700 relative blgline">Last Post Blog</h2>

					<main id="primary" class="site-main">
						<?php
						if (have_posts()) : ?>
							<div class="">
							<?php while (have_posts()) :
								the_post();
								get_template_part('template-parts/content-blog', get_post_type());
							endwhile;
							get_template_part('template-parts/pagination');
						else :
							get_template_part('template-parts/content', 'none');
						endif;
							?>
							</div>
					</main>

				</div>
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
							'posts_per_page' => 10
						);
						$lastposts = get_posts($args); ?>


						
						 <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
						  <span class="text-lg text-gray-800 font-semibold font-raleway linef table relative mx-auto my-5">NEWS TOURS</span>
						<?php }
						if (ICL_LANGUAGE_CODE == 'es') { ?>
						 <span class="text-lg text-gray-800 font-semibold font-raleway linef table relative mx-auto my-5">NUEVOS TOURS</span>
						<?php } ?>
						
						
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
