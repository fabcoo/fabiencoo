<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fabien_Coo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
	<header class="entry-header row">
		<div class="col-md-9">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
		<div class="col-md-3">
			<a href="<?php echo home_url() ?>/portfolio"><i class="fas fa-briefcase"></i> Retour au portfolio</a>			
		</div>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<div class="row">
			<div class="col-md-9">
				<a class="visiteSite" href="<?php the_field('lien_du_projet') ?>" target="_blank"><i class="fas fa-link"></i> Visiter le site</a>
				<h2>Type de projet</h2>
				<p><?php the_field('type_de_projet') ?></p>
				<h2>Description</h2>
				<?php the_field('description_du_projet') ?>
				<h2>Détails</h2>
				<?php the_field('details_du_projet') ?>
			</div>
			<div class="col-md-3">
				<?php
				$images = get_field('galerie_du_projet');
				if( $images ): ?>
	        <?php foreach( $images as $image ): ?>
            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="galerieProjet">
              <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
            </a>
	        <?php endforeach; ?>
				<?php endif; ?>
			</div>
			<div class="contenuDetail col-md-12">
				<?php if (get_field('details_a_afficher')): ?>
					<h2>Contenu en détail</h2>
					<?php else: ?>
				<?php endif; ?>
				<div class="galerieDetail">
					<?php
					$i = 0;
					if( have_rows('galerie_projet_detail') ):

					    while ( have_rows('galerie_projet_detail') ) : the_row(); ?>

							<a data-fancybox="detailsProjet" data-src="#detail<?php echo $i ?>" data-modal="true" href="javascript:;">
								<img src="<?php the_sub_field('image_projet_detail') ?>" alt="">
							</a>
							<div class="modalFB" id="detail<?php echo $i ?>" style="display: none; max-width: 1110px;">
								<div class="row">
									<div class="col-md-3">
										<a data-fancybox="projet<?php echo $i ?>" href="<?php the_sub_field('image_projet_detail') ?>">
											<img src="<?php the_sub_field('image_projet_detail') ?>" alt="" loading="lazy">
										</a>
									</div>
									<div class="col-md-9">
										<h3><?php the_sub_field('titre_projet_detail') ?></h3>
										<?php the_sub_field('texte_projet_detail') ?>
									</div>
								</div>
								<button class="btnModalClose" data-fancybox-close="">Fermer</button>
							</div>

					    <?php
							$i++;
						endwhile;

					else :

					endif; ?>
				</div>
			</div>
			<?php the_post_navigation( array(
            'prev_text'                  => __( '<i class="fas fa-arrow-left"></i> Projet précédent : %title' ),
            'next_text'                  => __( 'Projet suivant : %title <i class="fas fa-arrow-right"></i>' )
					) ); ?>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
