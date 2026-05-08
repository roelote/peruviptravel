<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peruviptravel
 */

get_header();
?>


<?php
$queried_object = get_queried_object();
$post_id = $queried_object->taxonomy . '_' . $queried_object->term_id;

$image2 = get_field('slider', $post_id);
$size = 'slider';
$thumb = $image2['sizes'][$size];


?>

<section class="flex items-center justify-center relative bg-cover" style="height: 450px;background-image:url(<?php echo $thumb; ?>);">
  <div class="absolute top-0 bottom-0 w-full bg-black bg-opacity-20"></div>
  <div class="text-center z-40">
    <h1 class="block font-raleway text-4xl text-white mb-5 font-bold uppercase text-shadow"><?php single_cat_title(); ?></h1>
  </div>
</section>
<section class="py-5 px-3 xl:px-0">
  <div class="container max-w-6xl">
    <div class="flex flex-wrap lg:-mx-2 xl:-mx-2">
      <div class="w-full lg:my-2 lg:w-9/12 lg:px-2 xl:my-2 xl:w-9/12 xl:px-2">
        <div class="category px-3 xl:px-14">

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

              <div class="box my-8 flex flex-wrap overflow-hidden rounded-md border border-gray-200 shadow-md xl:-mx-2">
                <div class="w-full overflow-hidden xl:w-4/12">

                  <?php the_post_thumbnail('category', array('class' => 'h-full transform duration-200 hover:scale-110 cursor-pointer w-full')); ?>
                </div>
                <div class="w-full overflow-hidden xl:my-2 xl:w-8/12 xl:px-2">
                  <div class="main-category relative px-3 h-full">
                    <h2 class="font-raleway font-semibold text-gray-700 text-lg mb-3 text-uppercase"><?php the_title(); ?></h2>
                    <span class="block my-3"><?php the_field('places'); ?></span>
                    <span class="font-raleway line-category my-2 inline-block font-semibold text-gray-800 border-b-2 pb-2 border-peruvip-500"><?php the_field('days'); ?></span>
                    <span class="text-xl  block text-peruvip-500"><?php the_field('price'); ?></span>
                    <a href="<?php the_permalink() ?>" class="absolute bottom-0 right-0 rounded-md bg-peruvip-500 px-4 py-1 text-white hover:bg-gray-700">Read more</a>
                  </div>
                </div>
              </div>


            <?php endwhile; ?>

          <?php else : ?>
          <?php endif; ?>

        </div>
      </div>

      <div class="w-full lg:my-2 lg:w-3/12 xl:my-2 xl:w-3/12">
        <aside class="top-28 sticky mb-8 px-3 xl:px-0 mr-0 xl:-mr-3">

          <div class="mt-8">
            <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
              <?php echo do_shortcode(' [contact-form-7 id="3086" title="Category"] '); ?>
            <?php }
            if (ICL_LANGUAGE_CODE == 'es') { ?>
              <?php echo do_shortcode(' [contact-form-7 id="3928" title="Category_es"] '); ?>
            <?php } ?>


          </div>


        </aside>
      </div>
    </div>
  </div>
</section>


<?php

get_footer();
