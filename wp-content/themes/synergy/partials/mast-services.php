<?php

$title_services = get_field('title_services', 'options');
$subtitle_services = get_field('subtitle_services', 'options');

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="title">';

        // echo $title_services;

        echo wp_title('');

      echo '</h1>';

      echo '<h2 class="subtitle secondary">'. $subtitle_services .'</h2>';

      if ( is_tax() ) :
        
        echo '<a href="' . get_post_type_archive_link( 'services' ) .'" class="secondary link link--back">';
        
        set_query_var( 'icon', 'arrow-left' );
        get_template_part('partials/icon');
        
        echo 'All services</a>';          
        
      endif;

      get_template_part('partials/filter-services');

    echo '</div>';

  echo '</div>';

echo '</section>';

?>
