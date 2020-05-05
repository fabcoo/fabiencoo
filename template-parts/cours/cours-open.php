<div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-sm-6'); ?>>
  <a href="<?php the_permalink() ?>">
    <article style="background-image: linear-gradient(to bottom, rgba(137,102,221,0.25) 0%,rgba(137,102,221,0.85) 100%),url('<?php the_post_thumbnail_url() ?>')">
        <h3>Chapitre <?php the_field('numero_exercice') ?></h3>
        <?php the_title('<h2>','</h2>') ?>
    </article>
  </a>
</div>
