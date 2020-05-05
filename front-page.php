<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fabien_Coo
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="bandeau" style="background-image: linear-gradient(to bottom, rgba(137,102,221,0.5) 0%,rgba(137,102,221,0.5) 85%,rgba(137,102,221,1) 100%), url('<?php the_post_thumbnail_url() ?>');">
			<?php the_custom_logo() ?>
			<h1 class="slogan"><?php echo str_replace(' | ', '<br />', get_bloginfo('description')); ?></h1>
			<p class="site"><?php bloginfo('name') ?></p>
		</div>

		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/content', 'page' );

			the_content();

			// If comments are open or we have at least one comment, load up the comment template.


		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
