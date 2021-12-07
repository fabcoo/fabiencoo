<?php
  $user = wp_get_current_user();
 if ( $user->roles[0] == 'imep' && has_term('imep','restriction') ) {
   get_template_part( 'template-parts/cours/cours', 'restreint' );
 }
 else {
   get_template_part( 'template-parts/cours/cours', 'open' );
 }
?>