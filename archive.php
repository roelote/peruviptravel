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

<section class="my-5">
    <div class="container max-w-6xl">
        <main id="primary" class="site-main">

            <?php if (have_posts()) : ?>
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-5">
                    <?php while (have_posts()) :
                        the_post();
                        get_template_part('template-parts/content-cat', get_post_type());

                    endwhile; ?>
                </div>
            <?php the_posts_navigation();

            else :
                get_template_part('template-parts/content', 'none');

            endif;
            ?>

        </main><!-- #main -->
    </div>
</section>

<?php
get_footer();
