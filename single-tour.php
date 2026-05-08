<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
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

<section class="px-3 xl:px-5">

    <div class="container max-w-6xl">

        <div class="flex flex-wrap lg:-mx-1 xl:-mx-1">

            <div class="w-full lg:my-1 lg:px-1 lg:w-9/12 xl:my-1 xl:px-1 xl:w-9/12">
                <article class="xpx-2 xl:px-5">
                    <main id="primary" class="main-tour mr-0 xl:mr-3">
                        <?php
                        while (have_posts()) :
                            the_post();

                            get_template_part('template-parts/content-tour', get_post_type());

                        endwhile; // End of the loop.
                        ?>
                    </main><!-- #main -->
                </article>
            </div>

            <div class="w-full lg:my-1 lg:px-1 lg:w-3/12 xl:my-1 xl:px-1 xl:w-3/12">
                <aside class="top-28 sticky mr-0 xl:-mr-6">
                    <div class="mt-5">
                        <section class="border border-gray-300 rounded-t">
                            <div class="bg-peruvip-400 rounded-t-lg p-2 text-center text-white">
                                <span class="block font-raleway text-xl">Book Now</span>
                                <span class="block text-2xl relative font-hat tracking-wide font-semibold"><?php the_field('price'); ?> </span>
                            </div>
                        </section>
						
						 <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
						    <?php echo do_shortcode(' [contact-form-7 id="3087" title="Tours"] '); ?>
						<?php }
						if (ICL_LANGUAGE_CODE == 'es') { ?>
						  <?php echo do_shortcode(' [contact-form-7 id="5270" title="Tours_es"] '); ?>
						<?php } ?>

                      

                    </div>
                </aside>
            </div>

        </div>

        <article class="main-tour">
            <h2>WHAT OUR CUSTOMERS SAY</h2>
            <div class="flex flex-wrap mt-10">
                <div class="w-full md:w-9/12 xl:w-9/12">
                    <div class="px-5">
                        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                        <div class="elfsight-app-e5f3191e-dfe2-4994-bda8-bc6093ed7684"></div>
                       
                    </div>
                </div>
                <div class="w-full md:w-3/12 xl:w-3/12">

                    <div class="box-video px-2 mt-3">
                        <a class="modal-open cursor-pointer bg-fixed text-gray-900 block text-center  font-oswald text-xl border border-white">
                            <?php
                            $vid = get_field('video', 'option');

                            $image = get_field('image', 'option');
                            if (!empty($image)) :
                                $size = 'imgtour';
                                $thumb = $image['sizes'][$size];
                            endif;
                            ?>
                            <img src="<?php echo $thumb; ?>" alt="video" class="w-full">
                        </a>
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

            <h2>RECOMMENDS TOURS</h2>

            <div class="mb-10">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-3 my-3">

                    <?php
                    //get the taxonomy terms of custom post type
                    $customTaxonomyTerms = wp_get_object_terms($post->ID, 'tour_category', array('fields' => 'ids'));

                    //query arguments
                    $args = array(
                        'post_type' => 'tour',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'orderby' => 'rand',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'tour_category',
                                'field' => 'id',
                                'terms' => $customTaxonomyTerms
                            )
                        ),
                        'post__not_in' => array($post->ID),
                    );

                    //the query
                    $relatedPosts = new WP_Query($args);
                    //loop through query
                    if ($relatedPosts->have_posts()) {
                        while ($relatedPosts->have_posts()) {
                            $relatedPosts->the_post();
                    ?>

                            <div class=" shadow-sm">
                                <a href="<?php the_permalink() ?>" class="group">
                                    <div class="related-box hover:shadow-lg hover:border-gray-100 transition-all delay-150">
                                        <div class="overflow-hidden">
                                            <?php the_post_thumbnail('imgdestination', array('class' => 'w-full h-auto transform hover:scale-110 duration-200')); ?>
                                        </div>
                                        <span class="text-center block font-semibold text-lg  text-gray-700  p-1 font-raleway "><?php the_title(); ?></span>
                                    </div>
                                </a>
                            </div>
                    <?php
                        }
                    } else {
                        //no posts found
                    }
                    wp_reset_postdata();

                    ?>


                </div>
            </div>
        </article>





    </div>

</section>

<script>
    function openModal(key) {
        document.getElementById(key).showModal();
        document.body.setAttribute('style', 'overflow: hidden;');
        document.getElementById(key).children[0].scrollTop = 0;
        document.getElementById(key).children[0].classList.remove('opacity-0');
        document.getElementById(key).children[0].classList.add('opacity-100')
    }

    function modalClose(key) {
        document.getElementById(key).children[0].classList.remove('opacity-100');
        document.getElementById(key).children[0].classList.add('opacity-0');
        setTimeout(function() {
            document.getElementById(key).close();
            document.body.removeAttribute('style');
        }, 100);
    }
</script>

<?php

get_footer();
