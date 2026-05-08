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


<section class="front-image flex items-center justify-center relative" style="height: 560px;">
    <div class="absolute top-0 bottom-0 w-full bg-black bg-opacity-20"></div>
    <div class="text-center z-40">
        <h1 class="block font-raleway text-4xl text-white mb-5 font-bold uppercase">Blog</h1>
    </div>
</section>

<section class="main-blog">
    <div class="container max-w-6xl py-5">

        <div class="flex flex-wrap overflow-hidden xl:-mx-3">
            <div class="w-full overflow-hidden xl:my-3 xl:px-3 xl:w-9/12">
                <div>
                    <input type="text" class="px-2 border appearance-none border-gray-300 rounded-sm focus:outline-none focus:ring-0 focus:border-peruvip-600 text-gray-700 w-full">
                </div>
                <div>
                    <article class="flex flex-wrap my-5 overflow-hidden border border-gray-300 shadow">
                        <div class="w-full overflow-hidden xl:my-2 xl:px-2 xl:w-4/12">
                            <img src="https://www.venturia.com.pe/wp-content/uploads/2019/12/ballestas-3.jpeg" class="h-40 w-full" alt="">
                        </div>
                        <div class="w-full overflow-hidden xl:my-2 xl:px-2 xl:w-8/12">
                            <div class="p-2 relative h-full">
                                <h2 class="font-raleway text-xl text-gray-800 font-semibold my-2">Flying Over the Nazca Lines</h2>
                                <p class="text-sm">The human mind and adaptation capacities never cease to surprise us, and the Nazca Lines are just another example of that. How did the inhabitants of these land</p>
                                <span class="absolute right-0 bottom-0 text-sm text-gray-600">miércoles 6 julio, 2022</span>
                            </div>
                        </div>
                    </article>
                    <article class="flex flex-wrap my-5 overflow-hidden border border-gray-300 shadow">
                        <div class="w-full overflow-hidden xl:my-2 xl:px-2 xl:w-4/12">
                            <img src="https://www.venturia.com.pe/wp-content/uploads/2019/12/ballestas-3.jpeg" class="h-40 w-full" alt="">
                        </div>
                        <div class="w-full overflow-hidden xl:my-2 xl:px-2 xl:w-8/12">
                            <div class="p-2 relative h-full">
                                <h2 class="font-raleway text-xl text-gray-800 font-semibold my-2">Flying Over the Nazca Lines</h2>
                                <p class="text-sm">The human mind and adaptation capacities never cease to surprise us, and the Nazca Lines are just another example of that. How did the inhabitants of these land</p>
                                <span class="absolute right-0 bottom-0 text-sm text-gray-600">miércoles 6 julio, 2022</span>
                            </div>
                        </div>
                    </article>
                    <article class="flex flex-wrap my-5 overflow-hidden border border-gray-300 shadow">
                        <div class="w-full overflow-hidden xl:my-2 xl:px-2 xl:w-4/12">
                            <img src="https://www.venturia.com.pe/wp-content/uploads/2019/12/ballestas-3.jpeg" class="h-40 w-full" alt="">
                        </div>
                        <div class="w-full overflow-hidden xl:my-2 xl:px-2 xl:w-8/12">
                            <div class="p-2 relative h-full">
                                <h2 class="font-raleway text-xl text-gray-800 font-semibold my-2">Flying Over the Nazca Lines</h2>
                                <p class="text-sm">The human mind and adaptation capacities never cease to surprise us, and the Nazca Lines are just another example of that. How did the inhabitants of these land</p>
                                <span class="absolute right-0 bottom-0 text-sm text-gray-600">miércoles 6 julio, 2022</span>
                            </div>
                        </div>
                    </article>

                    <main id="primary" class="site-main">

                        <?php
                        if (have_posts()) :

                            if (is_home() && !is_front_page()) :
                        ?>
                                <header>
                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                </header>
                        <?php
                            endif;

                            while (have_posts()) :
                                the_post();

                                get_template_part('template-parts/content', get_post_type());

                            endwhile;

                            the_posts_navigation();

                        else :

                            get_template_part('template-parts/content', 'none');

                        endif;
                        ?>

                    </main>



                </div>
            </div>
            <div class="w-full overflow-hidden xl:my-3 xl:px-3 xl:w-3/12">
                <div class="bg-gray-50 h-full mx-3">
                    <div class="text-center px-2">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/logo-pvtc.png" alt="bg home" class="mx-auto pt-3">
                        <p>The human mind and adaptation capacities never cease to surprise us, and the Nazca Lines are just another example of that.
                        </p>
                        <hr class="my-5">
                        <span class="inline-block text-lg text-gray-800 font-medium font-raleway linef relative">OUR TEAM</span>
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/team.png" alt="bg home" class="mx-auto pt-3">
                        <p>The human mind and adaptation capacities never cease to surprise us, and the Nazca Lines are just another example of that. </p>
                        <hr class="my-5">
                        <span class="inline-block text-lg text-gray-800 font-medium font-raleway linef relative">CERTIFICATIONS</span>
                        <p>The human mind and adaptation capacities never cease to surprise us, and the Nazca Lines are just another example of that. </p>
                        <hr class="my-5">
                        <span class="inline-block text-lg text-gray-800 font-medium font-raleway linef relative">TRIPADVISOR</span>

                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/trip1.png" alt="bg home" class="mx-auto pt-3">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/trip2.png" alt="bg home" class="mx-auto pt-3">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/trip3.jpg" alt="bg home" class="mx-auto pt-3">

                    </div>
                </div>
            </div>
        </div>

    </div>

</section>







<?php

get_footer();
