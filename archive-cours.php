<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fabien_Coo
 */

get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" style="background-image:linear-gradient(to bottom, rgba(137,102,221,0.3) 0%,rgba(137,102,221,1) 50%,rgba(137,102,221,1) 100%),url('<?php echo home_url() ?>/wp-content/uploads/2020/02/18697-scaled.jpg')">
			<?php if (is_user_logged_in()) : ?>
		<?php if ( have_posts() ) : ?>


			<header class="container page-header">
				<h1>Prêts à c<span>oo</span>der ?</h1>
				<?php
					//the_archive_description( '<div class="archive-description">', '</div>' );
					the_field('description_cours','option')
				?>
			</header><!-- .page-header -->
			<div class="container">
				<div class="row">
			<?php

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */

$taxonomy = 'matiere';
$terms = get_terms($taxonomy); // Get all terms of a taxonomy

if ( $terms && !is_wp_error( $terms ) ) :
?>
        <?php foreach ( $terms as $term ) { ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-md-6'); ?>>
							<a href="<?php echo get_term_link($term->slug, $taxonomy); ?>">
								<article style="background-image: linear-gradient(to bottom, rgba(137,102,221,0.25) 0%,rgba(137,102,221,0.85) 100%),url('<?php the_post_thumbnail_url() ?>')">
						        <h2><?php echo $term->name; ?></h2>
						    </article>
							</a>
						</div>
        <?php } ?>
<?php endif;




			//the_posts_navigation();
			?>

			<!-- <div class="col-lg-12 navigation"> -->
				<?php// wp_pagenavi(); ?>
			<!-- </div> -->


		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
				</div>
			</div>
<?php else: ?>
	<header class="container page-header">
	<h1>Contenu restreint</h1>
	<p>Les contenus de ce type ne sont pas accessible aux utilisateurs non enregistrés. Merci de vous <a href="<?php echo home_url() ?>/inscription">inscrire</a> préalablement</p>
</header><!-- .page-header -->
<?php endif; ?>
</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
