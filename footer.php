<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peruviptravel
 */

?>

<footer>
	<section class="footer py-10 px-5">
		<div class="container max-w-6xl">
			<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">
				<div>
					<img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/logo-pvt.png" class="w-32" alt="bg home">
					<ul>
						<li class="text-white py-1"><i class="far fa-envelope"></i> info@peruviptravel.com</li>
						<li class="text-white py-1"><i class="fas fa-map-marker-alt"></i> Cusco, Peru </li>
						<li class="text-white py-1"><i class="fas fa-map-marker-alt"></i> Chicago, USA</li>
						<li class="text-white py-1"><i class="fas fa-phone-alt"></i> +51 955 716 773 </li>
						<li class="text-white py-1"><i class="fas fa-phone-alt"></i> +51 (84) 267023 </li>

					</ul>
					<span class="line w-40 block mb-2"></span>
					<div class="flex">
						<a href="https://www.instagram.com/peruviptravell/" class="hover:translate-x-1 transition delay-150"><i class="fab text-2xl text-white pr-2 fa-instagram-square"></i></a>
						<a href="https://www.facebook.com/peruviptravell/" class="hover:translate-x-1 transition delay-150"><i class="fab text-2xl text-white pr-2 fa-facebook-square"></i></a>
						<a href="https://www.youtube.com/channel/UCBp8WSt7DjOSo0xlSZtKkQg" class="hover:translate-x-1 transition delay-150"><i class="fab text-2xl text-white pr-2 fa-youtube-square"></i></a>
						<a href="https://www.tiktok.com/@peruviptravel?lang=es" class="hover:translate-x-1 transition delay-150"><i class="fab text-2xl text-white pr-2 fa-tiktok"></i></a>
						<a href="https://www.tripadvisor.com/Attraction_Review-g294314-d11847321-Reviews-Machupicchu_Vip_Tours-Cusco_Cusco_Region.html" class="hover:translate-x-1 transition delay-150"><img class="" src="<?php echo esc_url(get_template_directory_uri()) ?>/img/tripadv.png" width="37" height="24" alt="icon trip"></a>
					</div>
				</div>
				<div>

					<?php
					$group1 = get_field('colum_1', 'option');
					$repeater = $group1['content_colum'];
					if ($group1) : ?>
						<span class="font-medium text-white font-raleway inline-block mb-3 line"><?php echo $group1['title']; ?></span>
						<ul class="list-disc list-inside">
							<?php
							foreach ($repeater as $value) { ?>
								<li class="text-white"><a class="hover:text-peruvip-400" href="<?php echo $value['link'] ?>"><?php echo $value['item'] ?></a></li>
							<?php  }
							?>
						</ul>
					<?php endif; ?>

				</div>
				<div>

					<?php
					$group2 = get_field('colum_2', 'option');
					$repeater = $group2['content_colum'];
					if ($group2) : ?>
						<span class="font-medium text-white font-raleway inline-block mb-3 line"><?php echo $group2['title']; ?></span>
						<ul class="list-disc list-inside">
							<?php
							foreach ($repeater as $value) { ?>
								<li class="text-white"><a class="hover:text-peruvip-400" href="<?php echo $value['link'] ?>"><?php echo $value['item'] ?></a></li>
							<?php  }
							?>
						</ul>
					<?php endif; ?>
				</div>
				<div>
					<?php if (ICL_LANGUAGE_CODE == 'en') { ?>
						<span class="font-medium text-white font-raleway inline-block mb-3 line">RECEIVE OUR OFFERS</span>
						<p class="text-white">Do you want to receive our promotions, leave us your email and we will send it to you. </p>
					<?php }
					if (ICL_LANGUAGE_CODE == 'es') { ?>
						<span class="font-medium text-white font-raleway inline-block mb-3 line">RECIBE NUESTRAS OFERTAS</span>
						<p class="text-white">Quieres recibir nuestras promociones, dejanos tu correo y te lo enviamos. </p>
					<?php } ?>



					<br>

					<?php if (ICL_LANGUAGE_CODE == 'en') { ?>
						<div class="flex">
							<?php echo do_shortcode(' [contact-form-7 id="3073" title="Ofertas"] '); ?>
						</div>
					<?php }
					if (ICL_LANGUAGE_CODE == 'es') { ?>
						<div class="flex">
							<?php echo do_shortcode(' [contact-form-7 id="3074" title="Ofertas_es"] '); ?>
						</div>
					<?php } ?>



					<?php if (ICL_LANGUAGE_CODE == 'en') { ?>
						<a href="/en/claim-book/">
							<div class="mt-5">

								<img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/libro-reclamos.png" class="w-56" alt="libro" style="width: 11rem" ;>
								<span class="text-white ml-10">claim book</span>
							</div>
						</a>
					<?php }
					if (ICL_LANGUAGE_CODE == 'es') { ?>
						<a href="/es/libro-de-reclamaciones/">
							<div class="mt-5">

								<img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/libro-reclamos.png" class="w-56" alt="libro" style="width: 11rem" ;>
								<span class="text-white ml-10">Libro de Reclamaciones</span>
							</div>
						</a>
					<?php } ?>


				</div>

			</div>
		</div>
	</section>
	<section class="text-center">
		<small>Copyright © 2023 Peru Vip Travel - Dpto. de Tecnologías de la Información </small>
	</section>
</footer>

<div class="fixed bottom-0 right-0 z-40 py-6 px-7 mb-0 sm:mb-0 sm:inline-flex">
<a href="https://api.whatsapp.com/send?phone=+51950701111" target="_blank">
<span class="flex relative h-10 w-10">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-gray-400 opacity-75"></span>
</span>
</a>
</div>

<div class="fixed bottom-0 right-0 z-40 py-5 px-4 mb-0 sm:mb-0 sm:inline-flex">
<a href="https://api.whatsapp.com/send?phone=+51950701111" target="_blank">
<img src="https://peruviptravel.com/wp-content/uploads/whatsapp-icon.png" alt="" class="w-16">
</a>
</div>


<?php wp_footer(); ?>

</body>

</html>