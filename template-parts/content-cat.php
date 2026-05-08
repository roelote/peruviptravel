<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peruviptravel
 */

?>

<article class="mb-5 border border-gray-300 shadow" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="overflow-hidden">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('category',  array('alt' => get_the_title(), 'title' => get_the_title(), 'class' => 'w-full transform duration-200 hover:scale-110 cursor-pointer')); ?>
        </a>
    </div>
    <div class="pt-3 px-4">
        <small class="bg-top-300 py-1 px-2 rounded-sm"><i class="far fa-clock"></i> Post: <?php echo get_the_date('j M'); ?></small>
        <a href="<?php the_permalink(); ?>">
            <?php the_title('<h2 class="font-oswald text-2xl text-gray-800 font-medium my-2 hover:text-top-500 transition delay-100 cursor-pointer">', '</h2>'); ?>
        </a>
        <div class="my-2"><?php the_excerpt(); ?></div>
      
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
