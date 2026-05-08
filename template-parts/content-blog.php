<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peruviptravel
 */

?>

<article class="flex flex-wrap mb-5 overflow-hidden shadow" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="w-full overflow-hidden xl:my-2 xl:px-2 xl:w-4/12">
        <div class="overflow-hidden">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('blogs',  array('alt' => get_the_title(), 'title' => get_the_title(), 'class' => 'w-full transform duration-200 hover:scale-110 cursor-pointer')); ?>
            </a>
        </div>
    </div>
    <div class="w-full overflow-hidden xl:my-2 xl:px-2 xl:w-8/12">
        <div class="p-2 relative h-full">
            <a href="<?php the_permalink(); ?>">
                <?php the_title('<h2 class="font-raleway text-xl text-gray-800 font-semibold my-2 hover:text-peruvip-500 transition delay-100 cursor-pointer">', '</h2>'); ?>
            </a>
            <p class="text-sm"><?php the_excerpt(); ?></p>
            <span class="absolute right-0 bottom-0 text-sm text-gray-600"><?php echo get_the_date('l j F, Y'); ?></span>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->