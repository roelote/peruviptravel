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


<section class="block sm:hidden" style="background-image: url(https://peruviptravel.com/wp-content/uploads/bg-mov3.png); background-position: center;background-size: cover;">
  <div class="mobiles relative">
    <div class="absolute z-20 w-full h-full "></div>

    <div class="absolute right-10 bottom-28 z-40">
      <div class="searchp">
        <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
          <?php echo do_shortcode('[ivory-search id="283" title="Default Search Form"]'); ?>
        <?php }
        if (ICL_LANGUAGE_CODE == 'es') { ?>
          <?php echo do_shortcode('[ivory-search id="3920" title="Default Search Form_es"]'); ?>
        <?php } ?>

      </div>
    </div>
  </div>
</section>

<section class="relative hidden md:block xl:block">
  <section class="relative flex items-center justify-center overflow-hidden sm:h-150 lg:h-150 xl:h-190 2xl:h-190">
    <div class="absolute z-20 w-full h-full "></div>

    <div class="absolute bottom-28 z-40">
      <div class="searchp">
        <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
          <?php echo do_shortcode('[ivory-search id="283" title="Default Search Form"]'); ?>
        <?php }
        if (ICL_LANGUAGE_CODE == 'es') { ?>
          <?php echo do_shortcode('[ivory-search id="3920" title="Default Search Form_es"]'); ?>
        <?php } ?>

      </div>
    </div>

    <video autoplay loop muted poster="<?php bloginfo('template_directory'); ?>/img/home.png" class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
      <source src="<?php bloginfo('template_directory'); ?>/video/videopvt.mp4" type="video/mp4" />
      Su navegador no soporta el video.
    </video>

  </section>
</section>



<section class="pt-10 px-5 homes">
  <div class="container max-w-6xl">
    <article class="px-5">
      <main id="primary" class="site-main">
        <?php
        while (have_posts()) :
          the_post();
          get_template_part('template-parts/content', 'page');
        endwhile;
        ?>

      </main>
    </article>
  </div>
</section>


<section class="bg-gray-100 py-14 px-5 homes">
  <div class="container max-w-6xl">
    <?php $section1 = get_field('top_desination');
    if ($section1) : ?>
      <h2><?php echo $section1['title']; ?></h2>
      <div class="mx-auto mb-8 max-w-3xl text-center">
        <p><?php echo $section1['description']; ?></p>
      </div>
      <div class="swiper top_dest px-2">
        <div class="swiper-wrapper">
          <?php $repeater = $section1['boxs'];
          foreach ($repeater as $value) { ?>
            <div class="swiper-slide">
              <div>
                <div class="box-home relative">
                  <?php $image = $value['image'];
                  $alt = $image['alt'];
                  $size = 'imgtour';
                  $thumb = $image['sizes'][$size];
                  ?>
                  <div class="overflow-hidden brightness-50">
                    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>" class="h-auto w-full transform duration-200 hover:scale-110" />
                  </div>
                  <div class="font-raleway absolute top-0 w-64 py-3 px-4 text-lg text-white xl:text-base"><?php echo $value['title_tour'] ?></div>
                  <div class="absolute top-3 -right-2 text-white">
                    <div class=" px-3 py-1 rojov"><?php echo $value['group'] ?></div>
                    <div style="border-color: rgb(131 0 0) transparent transparent;border-width: 8px 9px 0 0;border-style: solid;width: 0;height: 0;float: right;"></div>
                  </div>
                  <div class="absolute bottom-0 py-3 px-4">
                    <p class="font-raleway mb-1 text-base text-white"><?php echo $value['days'] ?></p>
                    <p class="font-raleway text-xs text-white"><?php echo $value['tags'] ?></p>
                  </div>
                </div>
                <div class="bg-white py-1 px-2">
                  <div class="flex justify-between">
                    <div class="flex items-center gap-3"><i class="fas text-gray-400 fa-user"></i> <i class="fas text-gray-400 fa-train"></i><i class="fas text-gray-400 fa-bed"></i><i class="fas text-gray-400 fa-ticket-alt"></i></div>
                    <div class="font-bold tracking-wide text-xl text-gray-900 font-hat"><?php echo $value['price'] ?></div>
                  </div>
                </div>
                <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
                  <a href="<?php echo $value['link'] ?>" class="block bg-peruvip-600 transition-all delay-150 p-1 text-lg text-center font-semibold text-white hover:bg-gray-700">See More</a>
                <?php }
                if (ICL_LANGUAGE_CODE == 'es') { ?>
                  <a href="<?php echo $value['link'] ?>" class="block bg-peruvip-600 transition-all delay-150 p-1 text-lg text-center font-semibold text-white hover:bg-gray-700">Ver Más</a>
                <?php } ?>


              </div>
            </div>
          <?php   } ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    <?php endif; ?>
  </div>
</section>

<section class="py-14 px-5 homes">
  <div class="container max-w-6xl">
    <?php $section2 = get_field('our_experiences');
    if ($section2) : ?>
      <h2><?php echo $section2['title']; ?></h2>
      <div class="mx-auto mb-8 max-w-3xl text-center">
        <p><?php echo $section2['description']; ?></p>
      </div>
      <div class="swiper top_dest bg-white px-2">
        <div class="swiper-wrapper">
          <?php $repeater = $section2['boxs'];
          foreach ($repeater as $value) { ?>
            <div class="swiper-slide">
              <div class="shadow-2xl">
                <div class="box-home relative">
                  <?php $image = $value['image'];
                  $alt = $image['alt'];
                  $size = 'imgtour';
                  $thumb = $image['sizes'][$size];
                  ?>
                  <div class="overflow-hidden brightness-50">
                    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>" class="h-auto w-full transform duration-200 hover:scale-110" />
                  </div>
                  <div class="font-raleway absolute top-0 w-64 py-3 px-4 text-lg text-white xl:text-base"><?php echo $value['title_tour'] ?></div>
                  <div class="absolute top-3 -right-2 text-white">
                    <div class="bg-peruvip-600 px-3 py-1"><?php echo $value['group'] ?></div>
                    <div style="border-color: rgb(159, 111, 10) transparent transparent;border-width: 8px 9px 0 0;border-style: solid;width: 0;height: 0;float: right;"></div>
                  </div>
                  <div class="absolute bottom-0 py-3 px-4">
                    <p class="font-raleway mb-1 text-base text-white"><?php echo $value['days'] ?></p>
                    <p class="font-raleway text-xs text-white"><?php echo $value['tags'] ?></p>
                  </div>
                </div>
                <div class="bg-white py-1 px-2">
                  <div class="flex justify-between">
                    <div class="flex items-center gap-3"><i class="fas text-gray-400 fa-user"></i> <i class="fas text-gray-400 fa-train"></i><i class="fas text-gray-400 fa-bed"></i><i class="fas text-gray-400 fa-ticket-alt"></i></div>
                    <div class="font-bold tracking-wide text-xl text-gray-900 font-hat"><?php echo $value['price'] ?></div>
                  </div>
                </div>
                <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
                  <a href="<?php echo $value['link'] ?>" class="block bg-peruvip-600 transition-all delay-150 p-1 text-lg text-center font-semibold text-white hover:bg-gray-700">See More</a>
                <?php }
                if (ICL_LANGUAGE_CODE == 'es') { ?>
                  <a href="<?php echo $value['link'] ?>" class="block bg-peruvip-600 transition-all delay-150 p-1 text-lg text-center font-semibold text-white hover:bg-gray-700">Ver Más</a>
                <?php } ?>

              </div>
            </div>
          <?php   } ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    <?php endif; ?>
  </div>
</section>

<section class="py-14 px-5 homes">
  <div class="container max-w-6xl">
    <?php $section3 = get_field('why_travel');
    if ($section3) : ?>
      <h2 class="pb-5"><?php echo $section3['title']; ?></h2>
      <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4 xl:gap-10">
        <?php $repeater = $section3['boxs'];
        foreach ($repeater as $value) { ?>
          <div>
            <div>
              <?php $image = $value['image'];
              $alt = $image['alt'];
              $size = 'smallt';
              $thumb = $image['sizes'][$size];
              ?>
              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>" class="inline-block" />
              <div class="font-raleway inline-block text-lg font-medium uppercase text-gray-800"><?php echo $value['title'] ?></div>
              <div class="mt-2">
                <p><?php echo $value['description'] ?></p>
              </div>
            </div>
          </div>
        <?php  } ?>

      </div>
    <?php endif; ?>
  </div>
</section>

<section class="bg-gray-100 py-14 px-5 homes">
  <div class="container max-w-6xl">
    <?php $section4 = get_field('destinations');
    if ($section4) : ?>
      <h2><?php echo $section4['title']; ?></h2>
      <div class="mx-auto mb-8 max-w-3xl text-center">
        <p><?php echo $section4['description']; ?></p>
      </div>
      <div class="grid grid-cols-1 gap-2 md:grid-cols-2 xl:grid-cols-3">
        <?php $repeater = $section4['boxs'];
        foreach ($repeater as $value) { ?>
          <div class="shadow-xl">
            <div class="box-city relative">
              <a href="<?php echo $value['link'] ?>">
                <div class="overflow-hidden brightness-75">
                  <?php $image = $value['image'];
                  $alt = $image['alt'];
                  $size = 'imgdestination';
                  $thumb = $image['sizes'][$size];
                  ?>
                  <img src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>" class="h-auto w-full transform duration-200 hover:scale-110" />
                </div>
                <div class="absolute bottom-0 z-20 w-full">
                  <div class="p-3 text-center">
                    <span class="font-abel block text-lg text-white"><?php echo $value['description'] ?></span>
                    <span class="font-raleway text-3xl font-extrabold text-white"><?php echo $value['title'] ?></span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        <?php  } ?>

      </div>
    <?php endif; ?>
  </div>
</section>

<section class="py-14 px-5 homes">
  <div class="container max-w-6xl">
    <?php $section5 = get_field('meet_our_staff');
    if ($section5) : ?>

      <div class="flex flex-wrap overflow-hidden flex-col-reverse xl:flex-row xl:-mx-2">
        <div class="w-full overflow-hidden xl:my-2 xl:w-1/2 xl:px-2">
          <img src="<?php echo $section5['image']; ?>" alt="team">
        </div>
        <div class="w-full overflow-hidden xl:my-2 xl:w-1/2 xl:px-2 mb-3 xl:mb-0">
          <h2><?php echo $section5['title']; ?></h2>
          <div class="text-center px-4 pb-4">
            <p><?php echo $section5['description']; ?></p>
          </div>
          <div class="text-center">
            <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
              <a href="<?php echo $section5['link']; ?>" class="bg-peruvip-500 transition delay-200 text-white px-5 py-1 inline-block mt-4 hover:bg-gray-700">READ MORE</a>
            <?php }
            if (ICL_LANGUAGE_CODE == 'es') { ?>
              <a href="<?php echo $section5['link']; ?>" class="bg-peruvip-500 transition delay-200 text-white px-5 py-1 inline-block mt-4 hover:bg-gray-700">LEER MAS</a>
            <?php } ?>


          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<section class="bg-gray-100 py-14 px-5 homes">
  <div class="container max-w-6xl">
    <h2>WHAT OUR CUSTOMERS SAY</h2>

    <div class="flex flex-wrap mt-10">
      <div class="w-full md:w-9/12 xl:w-9/12">
        <div class="px-5">
				<?php echo do_shortcode( '[trustindex no-registration=tripadvisor]' ); ?>

        </div>
      </div>
      <div class="w-full md:w-3/12 xl:w-3/12">
        <div class="box-video px-2">
          <a class="modal-open cursor-pointer bg-fixed text-gray-900 block text-center  font-oswald text-xl border border-white">
            <?php
            $vid = get_field('video', 'option');

            $image = get_field('image', 'option');
            if (!empty($image)) :
              $size = 'imgtour';
              $thumb = $image['sizes'][$size];
            endif;
            ?>
            <img src="<?php echo $thumb; ?>" alt="video" class="w-full" style="height:250px">
          </a>
        </div>
      </div>
    </div>

  </div>

  <!--Modal-->
  <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-6xl mx-auto rounded shadow-lg z-50 overflow-y-auto">
      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-2 text-left px-4">
        <!--Title-->
        <!--Body-->
        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/<?= $vid ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!--Footer-->
        <div class="flex justify-end">
          <button class="modal-close px-4 bg-mapi-500 p-2 rounded-lg text-gray-800 hover:bg-mapi-400">Cerrar</button>
        </div>

      </div>
    </div>
  </div>

</section>

<section class="py-14 px-5 homes">
  <div class="container max-w-6xl">
    <?php $section6 = get_field('trip_in_2_steps');
    if ($section6) : ?>
      <h2 class="mb-2"><?php echo $section6['title']; ?></h2>

      <div class="grid grid-cols-5 gap-5 mt-10 pt-5">

        <div class="text-center">
          <img src="<?php echo esc_url($section6['image_01']['sizes']['smallt']); ?>" class="mx-auto" alt="<?php echo $section6['image_01']['alt']; ?>">
          <p class="text-xl mt-3 font-bold"><?php echo $section6['title_01']; ?></p>
        </div>
        <div class="flex items-center justify-center">
          <i class="fas text-4xl text-gray-700 fa-plus"></i>
        </div>
        <div class="text-center">
          <img src="<?php echo esc_url($section6['image_02']['sizes']['smallt']); ?>" class="mx-auto" alt="<?php echo $section6['image_02']['alt']; ?>">
          <p class="text-xl mt-3 font-bold"><?php echo $section6['title_02']; ?></p>
        </div>
        <div class="flex items-center justify-center">
          <i class="fas text-4xl text-gray-700 fa-equals"></i>
        </div>
        <div class="text-center">
          <img src="<?php echo esc_url($section6['image_03']['sizes']['smallt']); ?>" class="mx-auto" alt="<?php echo $section6['image_03']['alt']; ?>">
          <p class="text-xl mt-3 font-bold"><?php echo $section6['title_03']; ?></p>
        </div>
      </div>

      <div class="text-center">

        <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
          <a href="<?php echo $section6['link']; ?>" class="bg-peruvip-500 text-white px-5 py-1 transition delay-200 inline-block mt-4 hover:bg-gray-700 rounded-lg font-medium text-lg">Click here for a free quote</a>
        <?php }
        if (ICL_LANGUAGE_CODE == 'es') { ?>
          <a href="<?php echo $section6['link']; ?>" class="bg-peruvip-500 text-white px-5 py-1 transition delay-200 inline-block mt-4 hover:bg-gray-700 rounded-lg font-medium text-lg">Click Aqui para una cotización</a>
        <?php } ?>


      </div>
    <?php endif; ?>
  </div>
</section>


<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 6,
  'orderby' => 'date',
  'order' => 'DESC'
);
?>

<section class="bg-gray-100 py-14 px-5 homes">
  <div class="container max-w-6xl">
    <h2>OUR BLOG</h2>
    <div class="mx-auto mb-8 max-w-3xl text-center">
      <p>Actividades especialmente diseñadas por Peru Vip Travel involucrando especialistas</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 grid-blog">

      <?php $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="relative shadow-lg rounded-lg ">
          <a href="<?php the_permalink(); ?>">
            <?php $thumbnail = get_the_post_thumbnail_url(); ?>
            <div class="bg-center bg-cover h-104" style="background-image: url(<?php echo $thumbnail ?>);"></div>
            <div class="absolute bottom-0 w-full px-6 py-1 bg-gradient-to-t from-gray-900 z-40 pb-2">
              <span class="text-white font-raleway text-xl font-semibold"><?php the_title() ?></span>
              <?php
              $excerpt = get_the_excerpt();

              $excerpt = substr($excerpt, 0, 60);
              $result = substr($excerpt, 0, strrpos($excerpt, ' '));

              ?>
              <p class="text-white text-sm"> <?php echo $result; ?></p>
            </div>
          </a>
        </div>
      <?php endwhile;
      wp_reset_postdata();
      ?>
    </div>

  </div>
</section>




<section class="py-14 px-5 homes">
  <div class="container max-w-6xl">
    <h2>Worldwide Partners</h2>

    <div class="swiper partners mt-10">
      <div class="swiper-wrapper">
		 
        <div class="swiper-slide">
          <img src="https://peruviptravel.com/wp-content/uploads/Certified_B.png" alt="bg home">
        </div>
        <div class="swiper-slide">
          <img src="https://peruviptravel.com/wp-content/uploads/connections.png" alt="bg home">
        </div>
       
        <div class="swiper-slide">
          <img src="https://peruviptravel.com/wp-content/uploads/oxprivate.png" alt="bg home">
        </div>
        <div class="swiper-slide">
          <img src="https://peruviptravel.com/wp-content/uploads/partners.png" alt="bg home">
        </div>
        <div class="swiper-slide">
          <img src="https://peruviptravel.com/wp-content/uploads/pure.png" alt="bg home">
        </div>
       
      </div>
    </div>
  </div>

</section>


<?php $section7 = get_field('contact');
if ($section7) : ?>

  <section class=" text-gray-800 bg-center" style="background-image: url( <?php echo $section7['image']; ?>) ;background-size: cover;background-position: revert;">
	  <div class="py-14 px-5 bg-white bg-opacity-30 w-full h-full">
    <div class="container max-w-lg">
      <h2 class="font-raleway text-center text-2xl font-medium uppercase mb-3"><?php echo $section7['title']; ?></h2>
      <div class="text-center">
        <p><?php echo $section7['description']; ?></p>
      </div>
      <div class="flex justify-around my-10">
        <a href="mailto:info@peruviptravel.com">
          <div class="rounded-full border-2 w-14 h-14 flex items-center p-6 justify-center bg-gray-600 hover:bg-gray-600 transition delay-200">
            <i class="far text-2xl text-white fa-envelope-open "></i>
          </div>
        </a>
        <a href="https://bit.ly/peruviptravel0">
          <div class="rounded-full border-2 w-14 h-14 flex items-center p-6 justify-center  bg-gray-600  hover:bg-gray-600 transition delay-200">
            <i class="fab text-3xl text-white fa-whatsapp "></i>
          </div>
        </a>
        <a href="https://bit.ly/peruviptravel0">
          <div class="rounded-full border-2 w-14 h-14 flex items-center p-6 justify-center  bg-gray-600  hover:bg-gray-600 transition delay-200">
            <i class="fas text-2xl text-white fa-phone-alt "></i>
          </div>
        </a>
      </div>
      <div class="text-center">
        <a href="https://bit.ly/peruviptravel0" class="bg-peruvip-500 text-white px-5 py-2 inline-block mt-4 transition delay-200 hover:bg-gray-700 rounded-lg font-medium text-lg">WE CAN CALL YOU</a>
      </div>
    </div>
	  </div>
  </section>
<?php endif; ?>


<?php

get_footer();
