<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peruviptravel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>



	<div class="top-0 z-50" id="nav">
		<header class="relative z-10 w-full xl:absolute bg-front xl:px-0 px-3 header ">
			<div class="container max-w-6xl py-2">
				<div class="flex justify-between">
					<div class="site-branding flex items-center">
						<a href="/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/logo-pvtc.png" class="custom-logo log" alt="bg home"></a>
						<a href="/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/logo-pvt.png" class="custom-logo log1" alt="bg home"></a>
					</div>
					<div>
						<div class="top-menu hidden xl:flex justify-end">
							<span class="text-white menu-top font-abel font-medium pr-5 flex items-center"><span><span class="px-2">info@peruviptravel.com</span> <span class="px-2">PER: +51 955 716 773</span> <span class="px-2">USA +1 (678) 508-1656</span></span> <span><?php do_action('wpml_add_language_selector');  ?></span></span>
						</div>
						<div class="mt-2 menu-transparent z-50 relative" id="transp">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>