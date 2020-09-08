<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fabien_Coo
 */

?>

	</div><!-- #content -->
	<footer id="contact" class="site-footer">
		<div class="container">
			<div class="row reverse">
				<div class="col-lg-6 slogan">
					<div class="row">
						<div class="col-lg-12">
							<h4>Faisons <span>coo</span>naissance...</h4>
						</div>
						<div class="col-lg-12">
							<?php echo do_shortcode('[contact-form-7 id="61" title="Formulaire de contact footer"]') ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12 text-center">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-footer.svg" alt="">
						</div>
						<div class="col-lg-12">
							<p>Formateur Web depuis 8 ans, développeur web front-end & CMS à Lille depuis près de 10 ans, et spécialisé dans la construction de sites WordPress sur-mesure. N'hésitez pas à me contacter pour vos différents besoins, je ferais le maximum pour vous répondre le plus rapidement possible.</p>
						</div>
						<div class="col-lg-12">
							<nav>
								<h5>Explorez le site</h5>
								<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );
								?>
								<?php if (is_user_logged_in()): ?>
									<h5>Espace formation (Amigraf)</h5>
									<?php
									wp_nav_menu ( array (
										'theme_location' => 'formation-menu',
										'menu_id'        => 'formation-menu',
									) ); ?>
								<?php endif; ?>
							</nav>
							<p>Retrouvez moi sur mes autres réseaux</p>
							<p class="reseauxFooter">
								<?php
									if( have_rows('reseaux_sociaux', 'option') ):
									    while ( have_rows('reseaux_sociaux', 'option') ) : the_row(); ?>
									      <a href="<?php the_sub_field('lien_footer'); ?>" target="_blank" rel="noreferrer" rel="noopener"><?php the_sub_field('icone_footer'); ?></a>
								<?php endwhile;
									else :
									endif;
									?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row site-info">
				<div class="col-lg-12">
					<p>
						&copy;<?php echo do_shortcode('[year]'); ?> -
						<?php bloginfo('name') ?> -
						<?php bloginfo('description') ?>
					</p>
					<p>
						Design by  Jérémy Leclerc - <a href="https://batfolio.fr" target="_blank" rel="noreferrer" rel="noopener">batfolio.fr</a>
					</p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
