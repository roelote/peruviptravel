<?php



if (!defined('ABSPATH')) {

    exit;
}





if ($wp_query->max_num_pages <= 1) return;



$args = array(

    'mid_size'           => 1,

    'prev_text'          => __('&laquo;', 'bootstrap-starter'),

    'next_text'          => __('&raquo;', 'bootstrap-starter'),

    'type'               => 'array',

);



$links = paginate_links($args);



?>

<div class="clearfix"></div>



<div class="container flex justify-center mx-auto py-7">



    <ul class="flex">
        <?php
        foreach ($links as $key => $link) : ?>
            <li class="py-1 px-4 mx-1 text-gray-700 bg-gray-100 border  <?php echo strpos($link, 'current') ? 'active-pag' : '' ?>">
                <?php echo str_replace('page-numbers', 'page-link', $link); ?>
            </li>
        <?php endforeach; ?>
    </ul>



</div>