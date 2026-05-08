<?php

/**
 * Gallery Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'gallerys-' . $block['id'];
if (!empty($block['anchor'])) {
   $id = $block['anchor'];
}


$className = 'gallerys';
if (!empty($block['className'])) {
   $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
   $className .= ' align' . $block['align'];
}


?>

<!--Markup for Gallery-->

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

   <?php
   $images = get_field('gallery');
   if ($images) : ?>
      <div class="swiper tour_gallery">
         <div class="swiper-wrapper">
            <?php foreach ($images as $image) : ?>
               <div class="swiper-slide">
                  <img src="<?php echo esc_url($image['sizes']['category']); ?>" class="w-full" alt="<?php echo esc_attr($image['alt']); ?>">
                  <span class="block text-center uppercase text-gray-700 font-abel"><?php echo esc_html($image['title']);?></span>
               </div>
            <?php endforeach; ?>

         </div>
      </div>
   <?php endif; ?>

</div>