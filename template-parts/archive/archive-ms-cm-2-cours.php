<?php
  $user = wp_get_current_user();
 if ( $user->roles[0] == 'ms_cm_2' && has_term('ms-cm-2','restriction') ) {
   get_template_part( 'template-parts/cours/cours', 'restreint' );
 }
 else {
   get_template_part( 'template-parts/cours/cours', 'open' );
 }
?>