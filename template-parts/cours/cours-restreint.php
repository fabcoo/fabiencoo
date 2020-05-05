<div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-sm-6 restreint'); ?>>
  <a>
    <article style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.25) 0%,rgba(0,0,0,0.85) 100%),url('<?php the_post_thumbnail_url() ?>')">
        <i class="fas fa-lock fa-2x"></i>
        <h3>Chapitre <?php the_field('numero_exercice') ?></h3>
        <?php the_title('<h2>','</h2>') ?>
    </article>
  </a>
</div>
