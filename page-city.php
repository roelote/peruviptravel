<?php

/** * Template Name: Page City */

/**
 
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

<section class="front-city flex relative" style="height: 450px;background-image:url(<?php echo $thumb; ?>);">
  <div class="absolute top-0 bottom-0 w-full bg-black bg-opacity-60"></div>
  <div class="container max-w-6xl z-40 py-10 flex items-center relative">
    <div>
      <span class="block text-2xl text-white">Destination</span>
      <?php the_title('<h1 class="font-raleway text-6xl text-white mb-5 font-bold uppercase">', '</h1>'); ?>
    </div>
    <div class="absolute bottom-0 right-0">
      <div class="flex gap-1 flex-col m-5 text-white font-raleway">
        <?php $section0 = get_field('city_details');
        if ($section0) : ?>
          <span class="text-lg"><i class="fas fa-mountain"></i> <?php echo $section0['elevation']; ?></span>
          <span class="text-lg"><i class="fas fa-users"></i> <?php echo $section0['population']; ?></span>
          <span class="text-lg"><i class="fas fa-cloud-moon-rain"></i> <?php echo $section0['climate']; ?></span>
          <span class="text-lg"><i class="fas fa-hands-helping"></i> <?php echo $section0['best_time_to_visit']; ?></span>
        <?php endif; ?>
      </div>
    </div>
  </div>

</section>

<section class="px-5 mb-10 py-10">
  <div class="container max-w-6xl">
    <main id="primary" class="city">

      <?php
      while (have_posts()) :
        the_post();
        get_template_part('template-parts/content', 'page');
      endwhile; // End of the loop.
      ?>
    </main><!-- #main -->
  </div>
</section>


<section class="py-10 mt-5" style="background-color:#29373E">
  <div class="container max-w-6xl">
    <?php $section3 = get_field('activities');
    if ($section3) : ?>

      <h2 class="font-medium text-2xl uppercase text-white font-raleway mb-8 text-center"><?php echo $section3['title']; ?></h2>

      <div class="grid grid-cols-6 gap-5">
        <?php $repeater = $section3['boxs'];
        foreach ($repeater as $value) { ?>
          <div class="text-center">
            <?php $image = $value['image'];
            $alt = $image['alt'];
            $size = 'imgdestination';
            $thumb = $image['sizes'][$size];
            ?>
            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>" class="mx-auto" />
            <span class="block my-2 text-white"> <?php echo $value['title'] ?></span>
          </div>
        <?php   } ?>
      </div>
    <?php endif; ?>
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
                  <div class="font-raleway absolute top-0 w-64 py-3 px-4 text-lg font-semibold text-white xl:text-xl"><?php echo $value['title_tour'] ?></div>
                  <div class="absolute top-3 -right-2 text-white">
                    <div class="bg-peruvip-600 px-3 py-1">Small Groups</div>
                    <div style="border-color: rgb(159, 111, 10) transparent transparent;border-width: 8px 9px 0 0;border-style: solid;width: 0;height: 0;float: right;"></div>
                  </div>
                  <div class="absolute bottom-0 py-3 px-4">
                    <p class="font-raleway mb-1 text-xl text-white"><?php echo $value['days'] ?></p>
                    <p class="font-raleway text-sm text-white"><?php echo $value['tags'] ?></p>
                  </div>
                </div>
                <div class="bg-white py-1.5 px-2">
                  <div class="flex justify-between">
                    <div class="flex items-center gap-3"><i class="fas text-gray-400 fa-user"></i> <i class="fas text-gray-400 fa-train"></i><i class="fas text-gray-400 fa-bed"></i><i class="fas text-gray-400 fa-ticket-alt"></i></div>
                    <div class="font-bold tracking-wide text-xl text-gray-900"><?php echo $value['price'] ?></div>
                  </div>
                </div>
                <a href="<?php echo $value['link'] ?>" class="block bg-peruvip-600 transition-all delay-150 p-1.5 text-lg text-center font-semibold text-white hover:bg-gray-700">See More</a>
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
                  <div class="font-raleway absolute top-0 w-64 py-3 px-4 text-lg font-semibold text-white xl:text-xl"><?php echo $value['title_tour'] ?></div>
                  <div class="absolute top-3 -right-2 text-white">
                    <div class="bg-peruvip-600 px-3 py-1">Small Groups</div>
                    <div style="border-color: rgb(159, 111, 10) transparent transparent;border-width: 8px 9px 0 0;border-style: solid;width: 0;height: 0;float: right;"></div>
                  </div>
                  <div class="absolute bottom-0 py-3 px-4">
                    <p class="font-raleway mb-1 text-xl text-white"><?php echo $value['days'] ?></p>
                    <p class="font-raleway text-sm text-white"><?php echo $value['tags'] ?></p>
                  </div>
                </div>
                <div class="bg-white py-1.5 px-2">
                  <div class="flex justify-between">
                    <div class="flex items-center gap-3"><i class="fas text-gray-400 fa-user"></i> <i class="fas text-gray-400 fa-train"></i><i class="fas text-gray-400 fa-bed"></i><i class="fas text-gray-400 fa-ticket-alt"></i></div>
                    <div class="font-bold tracking-wide text-xl text-gray-900"><?php echo $value['price'] ?></div>
                  </div>
                </div>
                <a href="<?php echo $value['link'] ?>" class="block bg-peruvip-600 transition-all delay-100 p-1.5 text-lg text-center font-semibold text-white hover:bg-gray-700">See More</a>
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
        <p>Actividades especialmente diseñadas por Venturia involucrando especialistas</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 grid-blog">

        <?php $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post(); ?>
          <div class="relative shadow-lg rounded-lg ">
            <a href="<?php the_permalink(); ?>">
              <?php $thumbnail = get_the_post_thumbnail_url(); ?>
              <div class="bg-center" style="height:250px;background-image: url(<?php echo $thumbnail ?>);"></div>
              <div class="absolute bottom-0 w-full px-6 py-1 bg-gradient-to-t from-gray-900 z-40 pb-2">
              <span class="text-white font-raleway text-xl font-semibold"><?php the_title() ?></span>

              <p class="text-white text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis, qui!</p>
              </div>
            </a>
          </div>
        <?php endwhile;
        wp_reset_postdata();
        ?>
      </div>

    </div>
  </section>







<?php

get_footer();
