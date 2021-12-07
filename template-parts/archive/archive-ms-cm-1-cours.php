<?php
  $user = wp_get_current_user();
 if ( $user->roles[0] == 'ms_cm_1' && has_term('ms-cm-1','restriction') ) {
   get_template_part( 'template-parts/cours/cours', 'restreint' );
 }
 else {
   get_template_part( 'template-parts/cours/cours', 'open' );
 }
?>