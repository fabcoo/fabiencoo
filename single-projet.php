<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fabien_Coo
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" style="background-image:linear-gradient(to bottom, rgba(137,102,221,0.3) 0%,rgba(137,102,221,1) 50%,rgba(137,102,221,1) 100%),url('<?php the_post_thumbnail_url() ?>')">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/single/single', get_post_type() );

			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
