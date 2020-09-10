<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fabien_Coo
 */

?>

<?php $user = wp_get_current_user();
if ( $user->roles[0] == 'um_formation-continue' && has_term('formation-continue','restriction') ): ?>
<header class="container page-header">
		<h1>Contenu restreint</h1>
		<p>Le formateur n'a pas encore autorisé l'accès à ce cours pour le moment.</p>
</header>
<?php elseif ( $user->roles[0] == 'apprentissage' && has_term('apprentissage','restriction') ):?>
	<header class="container page-header">
			<h1>Contenu restreint</h1>
			<p>Le formateur n'a pas encore autorisé l'accès à ce cours pour le moment.</p>
	</header>
<?php else: ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
	<div class="row">

		<div class="col-sm-8">
			<p class="numero">Chapitre <?php the_field('numero_exercice') ?></p>
			<h1><?php the_title() ?></h1>
		</div>
		<div class="col-sm-4">
			<?php
				$matiere = wp_get_object_terms( $post->ID,  'matiere' );
				if ( ! empty( $matiere ) ) {
					if ( ! is_wp_error( $matiere ) ) {
						 foreach( $matiere as $term ) {
								 echo '<a class="retour" href="' . esc_url( get_term_link( $term->slug, 'matiere' ) ) . '"><i class="fas fa-arrow-left"></i> Retour vers ' . esc_html( $term->name ) . '</a>';
						 }
					}
				} ?>
		</div>
		<div class="col-sm-8">
			<h2>Notions</h2>
			<?php the_field('notions') ?>
			<h2>Instructions</h2>
			<?php the_field('instructions') ?>
		</div>
		<div class="col-sm-4 galerie">
			<?php
				$images = get_field('galerie');
				if( $images ): ?>
        <?php foreach( $images as $image ): ?>
          <a data-fancybox="galerie" href="<?php echo esc_url($image['url']); ?>">
               <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          </a>
      	<?php endforeach; ?>
			<?php endif; ?>
			<?php if(get_field('sources')): ?>
				<a href="<?php the_field('sources') ?>" class="sources">Télécharger les sources</a>
			<?php endif; ?>
			<!-- Affichage conditionnel de la correction -->
			<?php if(get_field('mot_de_passe_correction')): ?>
				<!-- Affichage du mot de passe si la case est coché et que le rôle est "formation continue" -->
				<?php if($user->roles[0] == 'um_formation-continue' && get_field('correction_formation_continue') == true ): ?>
					<a href="<?php the_field('correction') ?>" class="correction">Télécharger la correction</a>
					<p class="mdp">Mot de passe :<br /><strong><?php the_field('mot_de_passe_correction') ?></strong></p>
				<?php endif; ?> 
				<!-- Affichage du mot de passe si la case est coché et que le rôle est "apprentissage" -->
				<?php if($user->roles[0] == 'apprentissage' && get_field('correction_apprentissage') == true ): ?>
					<a href="<?php the_field('correction') ?>" class="correction">Télécharger la correction</a>
					<p class="mdp">Mot de passe :<br /><strong><?php the_field('mot_de_passe_correction') ?></strong></p>
				<?php endif; ?> 
				<?php if(  get_field('correction_apprentissage') ||  get_field('correction_formation_continue')): ?>
					<?php if($user->roles[0] == 'administrator' ): ?>
						<a href="<?php the_field('correction') ?>" class="correction">Télécharger la correction</a>
						<p class="mdp">Mot de passe :<br /><strong><?php the_field('mot_de_passe_correction') ?></strong></p>
					<?php endif; ?> 
				<?php endif; ?> 
			<?php endif; ?>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
<?php endif; ?>
