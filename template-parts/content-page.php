<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fabien_Coo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="bandeau" style="background-image:linear-gradient(to bottom, rgba(137,102,221,0.5) 0%,rgba(137,102,221,0.5) 85%,rgba(137,102,221,1) 100%),url('<?php the_post_thumbnail_url() ?>');">

	</div>
	<?php the_title( '<h1>', '</h1>' ); ?>

	<div class="entry-content">
		<?php the_content();	?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
