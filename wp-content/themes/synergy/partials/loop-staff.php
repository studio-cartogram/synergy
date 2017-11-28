<?php

$context = get_query_var( 'context' );
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$post_type = ($context == 'staff' ? 'staff' : 'services');
$modifications['post_type'] = array($post_type);
$modifications = array(
  'paged' => $paged,
);

$args = array_merge(
  $wp_query->query_vars,
  $modifications 
);


$the_query = new WP_Query($args);

if ( $the_query->have_posts() ) :

  while ( $the_query->have_posts() ) : $the_query->the_post();

    set_query_var( 'item', $post );

    get_template_part('partials/item', $context);

  endwhile;

    get_template_part('partials/pagination');

else :

  get_template_part('partials/empty');

endif;

?>


