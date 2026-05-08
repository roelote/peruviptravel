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
	<meta name="facebook-domain-verification" content="jp75w85ra2z81sf0zecbhctkom9ja5" />

	<?php wp_head(); ?>
</head>
	
	<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '797590058428445');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=202829285457765&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K4G4PE8HG3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K4G4PE8HG3');
</script>

	
	<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "tygrgzh5b4");
</script>
	

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>



	<?php if (is_front_page()) : ?>

			<div class="relative md:absolute xl:absolute top-0 left-0 w-full z-50 stik" id="nav">
			<header class="relative z-10 w-full xl:absolute bg-front xl:px-0 px-3 header ">
				<div class="container max-w-6xl pb-3 mt-3.5">
					<div class="flex flex-wrap justify-between">
						<div class="site-branding flex items-center">
							<a href="/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/logo-pvtc.png" class="custom-logo log" alt="bg home"></a>
							<a href="/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/logo-pvt.png" class="custom-logo log1" alt="bg home"></a>
						</div>
						<div class="contents xl:block mt-2 menu-transparent">
							<div class="top-menu hidden xl:flex justify-end">
								<span class="text-white menu-top font-abel font-medium pr-5 flex items-center"><span><span class="px-2">info@peruviptravel.com</span> <span class="px-2">PER: +51 955 716 773</span> <span class="px-2">USA +1 (773)332-0207</span></span> <span><?php do_action('wpml_add_language_selector');  ?></span> <span><?php echo do_shortcode('[gtranslate]') ?></span></span>
							</div>
							
								<?php ubermenu('main'); ?>
							
						</div>
					</div>
				</div>
			</header>
		</div>



	<?php else : ?>

		<header class="bg-white border-b border-gray-200 shadow-lg top-0 z-50 header xl:px-0 px-3 stik" id="nav">
			<div class="container max-w-6xl">
				<div class="border-b ">
					<div class="container">
						<div class="flex flex-wrap justify-between">
							<div class="site-branding flex items-center">
								<a href="/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/logo-pvtc.png" alt="bg home" class="custom-logo"></a>
							</div>
							<div class="contents xl:block mt-2">
								<div class="top-menu hidden xl:flex justify-end">
									<span class="text-gray-700 font-abel flex items-center font-medium pr-5"><span><span class="px-2">info@peruviptravel.com</span> <span class="px-2">PER: +51 955 716 773</span> <span class="px-2">USA +1 (678) 508-1656</span></span> <span><?php do_action('wpml_add_language_selector');  ?></span><span><?php echo do_shortcode('[gtranslate]') ?></span></span>
								</div>
								<?php ubermenu('main'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

	<?php endif; ?>