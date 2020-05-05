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

		<?php if ( have_posts() ) : ?>

			<header class="container page-header">
				<?php if (is_user_logged_in() && taxonomy_exists( 'matiere' )) : ?>
					<h1><?php echo single_term_title() ?></h1>
				<?php else: ?>
					<h1>Contenu restreint</h1>
					<p>Les contenus de ce type ne sont pas accessible aux utilisateurs non enregistrés. Merci de vous <a href="<?php echo home_url() ?>/inscription">inscrire</a> préalablement</p>
			<?php endif; ?>
				<?php
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="container">
				<div class="row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				 $user = wp_get_current_user();
				 if ( $user->roles[0] == 'administrator' ) {
					get_template_part( 'template-parts/archive/archive-fc', get_post_type() );
				 }
				 elseif ($user->roles[0] == 'apprentissage') {
					get_template_part( 'template-parts/archive/archive-apprentissage', get_post_type() );
				 }
				 elseif ($user->roles[0] == 'um_formation-continue') {
					get_template_part( 'template-parts/archive/archive-fc', get_post_type() );
				 }

			endwhile;

			//the_posts_navigation();
			?>

			<div class="col-md-12 navigation">
				<?php wp_pagenavi(); ?>
			</div>

		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
