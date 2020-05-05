<?php
  $user = wp_get_current_user();
 if ( $user->roles[0] == 'um_formation-continue' && has_term('formation-continue','restriction') ) {
   get_template_part( 'template-parts/cours/cours', 'restreint' );
 }
 else {
   get_template_part( 'template-parts/cours/cours', 'open' );
 }
?>
