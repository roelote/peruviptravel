<?php

/** * Template Name: Page About Us */

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

<section class="flex items-center justify-center relative bg-center bg-cover" style="height: 450px;background-image:url(<?php echo $thumb; ?>);">
  <div class="absolute top-0 bottom-0 w-full bg-black bg-opacity-20"></div>
  <div class="text-center z-40">
    <?php the_title('<h1 class="block font-raleway text-4xl text-white mb-5 font-bold uppercase text-shadow">', '</h1>'); ?>
  </div>
</section>

<section class="py-10 px-5">
  <div class="container max-w-6xl">
    <main id="primary" class="site-main about ">

      <?php
      while (have_posts()) :
        the_post();
        get_template_part('template-parts/content', 'page');
      endwhile; // End of the loop.
      ?>
    </main><!-- #main -->
  </div>
</section>


<section class="py-14 px-5 bg-gray-100 homes">
  <div class="container max-w-6xl">
    <?php $section1 = get_field('why_travel');
    if ($section1) : ?>
      <h2 class="pb-5"><?php echo $section1['title']; ?></h2>
      <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3 xl:gap-10">
        <?php $repeater = $section1['boxs'];
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




<section class="pt-14 px-5 homes" id="meet">
  <div class="container max-w-6xl">

    <?php $section2 = get_field('family');
    if ($section2) : ?>

      <h2 class="font-raleway text-center text-2xl font-medium uppercase text-gray-600 lines"><?php echo $section2['title']; ?></h2>
      <div class="mx-auto mb-8 max-w-3xl text-center">
        <p><?php echo $section2['description']; ?></p>
      </div>

      <div class="flex justify-items-center justify-center flex-wrap gap-5">

        <?php $repeater = $section2['founders'];
        foreach ($repeater as $value) { ?>
          <div class="text-center px-16">
            <?php $image = $value['image'];
            $alt = $image['alt'];
            $size = 'imgtour';
            $thumb = $image['sizes'][$size];
            ?>
            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>" class="mx-auto mb-3 w-64 rounded-full border-8 border-gray-100 hover:border-yellow-500 delay-150 transition-all ">
            <h3 class="font-raleway text-2xl font-semibold text-yellow-600"><?php echo $value['title'] ?></h3>
            <span class="font-raleway text-xl text-gray-700"><?php echo $value['position'] ?></span>
          </div>
        <?php  } ?>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-2 xl:grid-cols-3 gap-5 my-14">

        <?php $repeater2 = $section2['workers'];
        foreach ($repeater2 as $value) { ?>
          <div class="text-center">
            <?php $image = $value['image'];
            $alt = $image['alt'];
            $size = 'imgtour';
            $thumb = $image['sizes'][$size];
            ?>
            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>" class="w-60 mb-3 rounded-full border-8 mx-auto border-gray-100 hover:border-yellow-500 delay-150 transition-all ">
            <h3 class="font-raleway text-2xl font-semibold text-yellow-600"><?php echo $value['title'] ?></h3>
            <span class="font-raleway text-xl text-gray-700"><?php echo $value['position'] ?></span>
          </div>
        <?php  } ?>

      </div>
    <?php endif; ?>

  </div>
</section>



<section class="py-10 homes bg-gray-50">

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

<?php $section3 = get_field('sustainability');
if ($section3) : ?>

  <section class="mb-10 py-48 relative flex" id="social" style="background-image: url(<?php echo $section3['image']; ?>);">
    <div class="absolute top-0 bottom-0 w-full bg-black bg-opacity-40"></div>
    <div class="container max-w-6xl z-40">
      <span class="text-white text-4xl font-raleway font-bold soste relative"><?php echo $section3['title']; ?></span>
    </div>

  </section>

  <section class="py-8 px-5">
    <div class="container max-w-6xl">

      <div class="flex flex-wrap my-5">
        <div class="w-full md:w-1/2 xl:w-1/2 px-5  md:px-10 xl:px-12">
          <h3 class="font-raleway text-lg font-medium uppercase text-gray-600 why relative mb-6"><?php echo $section3['title_01']; ?></h3>
          <p><?php echo $section3['text_left']; ?></p>
        </div>
        <div class="w-full md:w-1/2 xl:w-1/2 px-5  md:px-10 xl:px-12">

          <?php $image = $section3['image_right'];
          $alt = $image['alt'];
          $size = 'imgtours';
          $thumb = $image['sizes'][$size];
          ?>

          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $alt ?>" class="w-full" />
        </div>
      </div>

      <div class="flex flex-wrap my-10 flex-col-reverse xl:flex-row">
        <div class="w-full md:w-1/2 xl:w-1/2 px-5  md:px-10 xl:px-12">
          <?php $image = $section3['image_left'];
          $alt = $image['alt'];
          $size = 'imgtours';
          $thumb = $image['sizes'][$size];
          ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $alt ?>" class="w-full" />
        </div>
        <div class="w-full md:w-1/2 xl:w-1/2 px-5  md:px-10 xl:px-12">
          <h3 class="font-raleway text-lg font-medium uppercase text-gray-600 why relative mb-6"><?php echo $section3['title_02']; ?></h3>
          <?php echo $section3['text_right']; ?>
        </div>

      </div>



    </div>
  </section>
<?php endif; ?>





<?php

get_footer();
