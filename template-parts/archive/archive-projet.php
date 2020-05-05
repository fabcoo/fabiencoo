<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fabien_Coo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4'); ?> data-aos="fade-up">
			<div class="projet" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.25) 0%,rgba(0,0,0,0.85) 100%),url('<?php the_post_thumbnail_url() ?>')">
				<a href="<?php the_permalink() ?>">
	        <h3><?php the_title() ?></h3>
	      </a>
			</div>
</article><!-- #post-<?php the_ID(); ?> -->
