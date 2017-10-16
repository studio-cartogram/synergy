<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$type = get_sub_field('type');

echo '<section class="grid">';

  echo '<div class="row">';

    echo '<div class="column intro">';

      echo '<h2>' . $title . '</h2>';

      echo '<p class="secondary">' . $subtitle . '</p>';

    echo '</div>';

  echo '</div>';

  if( have_rows('blocks') ):

    echo '<div class="row">';

      while ( have_rows('blocks') ) : the_row();

        set_query_var( 'type', $type );

        get_template_part('partials/block', $type);

      endwhile;

    echo '</div>';

  endif;


echo '</section>';

?>
