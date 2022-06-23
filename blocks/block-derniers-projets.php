<section class="derniersProjets row">
    <?php
// WP_Query arguments
$post_count = block_value( 'nombre-darticles' );
$args = array(
	'post_type'      => array( 'projet' ),
	'posts_per_page' => $post_count,
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {?>
    <?php while ( $query->have_posts() ) {
		$query->the_post(); ?>
    <article class="col-md-4" data-aos="fade-up">
        <div class="projet"
            style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.25) 0%,rgba(0,0,0,0.85) 100%),url('<?php the_post_thumbnail_url() ?>')">
            <a href="<?php the_permalink() ?>">
                <h3><?php the_title() ?></h3>
            </a>
        </div>
    </article>
    <?php }
} else {
	// no posts found
}?>

    <?php // Restore original Post Data
wp_reset_postdata();
 ?>
    <article class="col-md-4 voirPortfolio" data-aos="fade-up">
        <div class="projet">
            <a href="<?php echo home_url() ?>/portfolio">
                <h3>Voir mes autres projets <i class="fas fa-arrow-right"></i></h3>
            </a>
        </div>
    </article>
</section>