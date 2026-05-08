<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peruviptravel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
	</header>

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div>


</article><!-- #post-<?php the_ID(); ?> -->
