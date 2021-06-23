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
    <main id="main" class="site-main"
        style="background-image:linear-gradient(to bottom, rgba(137,102,221,0.3) 0%,rgba(137,102,221,1) 50%,rgba(137,102,221,1) 100%),url('<?php echo home_url() ?>/wp-content/uploads/2020/02/18697-scaled.jpg')">
        <?php if ( have_posts() ) : ?>
        <div class="container">

            <header class="page-header">
                <h1>Mon portfoli<span>oo</span> </h1>
                <?php the_field('description_portfolio','option') ?>
            </header>
            <section class="derniersProjets row">
                <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/archive/archive', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
            </section>
        </div>

    </main>
</div>

<?php
get_footer();