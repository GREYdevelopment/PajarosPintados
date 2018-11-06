<?php

$post = $wp_query->post;
if ( in_category('5') ){
 include(TEMPLATEPATH . '/single.php');
}

?>
