<?php

/** * Template Name: Page Destiny */

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

<section class="front-image flex items-center justify-center relative" style="height: 450px;background-image:url(<?php echo $thumb; ?>);">
      <div class="absolute top-0 bottom-0 w-full bg-black bg-opacity-40"></div>

      <div class="text-center z-40">
            <?php the_title('<h1 class="block font-raleway text-4xl text-white mb-5 font-bold uppercase">', '</h1>'); ?>
      </div>


</section>

<section class="px-5 my-10">
      <div class="container max-w-6xl">
            <main id="primary" class="homes">

                  <?php
                  while (have_posts()) :
                        the_post();
                        get_template_part('template-parts/content', 'destiny');
                  endwhile; // End of the loop.
                  ?>
            </main><!-- #main -->
      </div>
</section>

<section class="px-5 my-10 bg-gray-100 py-10 ">
      <div class="container max-w-6xl">
            <div class="flex flex-wrap">
                  <div class="w-full xl:w-1/2 px-2">
                        <div>
							  <?php $map = get_field('mapa'); ?>
                              <?php echo do_shortcode($map); ?>

                        </div>
                  </div>
                  <div class="w-full xl:w-1/2 px-2">
                        <div class="grid grid-cols-3 gap-2">

                              <?php

                              if (have_rows('box')) :

                                    while (have_rows('box')) : the_row(); ?>


                                          <div>
                                                <a href="<?= get_sub_field('link'); ?>" class="group">
                                                      <diV class="border rounded bg-white shadow-md">
                                                            <div class="overflow-hidden">
                                                                  <?php
                                                                  $image = get_sub_field('image');
                                                                  $alt = $image['alt'];
                                                                  $size = 'destiny';
                                                                  $thumb = $image['sizes'][$size];
                                                                  ?>
                                                                  <img src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>" class="transform duration-200 hover:scale-110" alt="bg home">
                                                            </div>
                                                            <span class="block text-center text-base font-medium text-gray-700 font-raleway group-hover:text-peruvip-500"><?= get_sub_field('title'); ?></span>
                                                      </diV>
                                                </a>

                                          </div>

                              <?php endwhile;

                              // No value.
                              else :
                              // Do something...
                              endif; ?>

                        </div>
                  </div>
            </div>
      </div>

</section>
<section class="mb-10 homes">

      <div class="container max-w-6xl">
            <article class="main-tour">
                  <h2>TOP IDEAS</h2>

                  <div>
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-3 my-3">

                              <?php

                              if (have_rows('top')) :

                                    while (have_rows('top')) : the_row(); ?>

                                          <div class="border border-gray-200 shadow-sm">
                                                <a href="<?= get_sub_field('link'); ?>" class="group">
                                                      <div class="related-box hover:shadow-lg hover:border-gray-100 transition-all delay-150 border">
                                                            <div class="overflow-hidden">
                                                                  <?php
                                                                  $image = get_sub_field('image');
                                                                  $alt = $image['alt'];
                                                                  $size = 'imgdestination';
                                                                  $thumb = $image['sizes'][$size];
                                                                  ?>

                                                                  <img src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>" class="w-full transform duration-200 hover:scale-110" alt="bg home">
                                                            </div>
                                                            <span class="text-center block font-semibold text-lg  text-gray-700  p-1 font-raleway "><?= get_sub_field('title'); ?></span>
                                                      </div>
                                                </a>
                                          </div>


                              <?php endwhile;

                              // No value.
                              else :
                              // Do something...
                              endif; ?>


                        </div>
                  </div>
            </article>

      </div>

</section>






<?php

get_footer();
