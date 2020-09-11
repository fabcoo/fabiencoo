<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'extension-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'extension';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> row">
    <div class="col-md-2">
        <p><strong><?php the_field('nom_extension') ?></strong></p>
    </div>
    <div class="col-md-8">
        <p><?php the_field('description_extension') ?></p>
    </div>
    <div class="col-md-2">
        <?php
            // Check rows exists.
            if( have_rows('liens_extensions') ):

                // Loop through rows.
                while( have_rows('liens_extensions') ) : the_row(); ?>

                    <a href="<?php the_sub_field('lien_extension') ?>" target="_blank" rel="noopener noreferrer"><?php the_sub_field('icone_extension')?></a>

            <?php endwhile;

            // No value.
            else :
                // Do something...
            endif;
        ?>
    </div>
</div>