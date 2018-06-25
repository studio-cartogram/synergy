<?php

$title_services = get_field('title_services', 'options');
$subtitle_services = get_field('subtitle_services', 'options');
$link_services = get_field('link_services', 'options');
$services_link_text = get_field('services_link_text', 'options');

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="title">';

        // echo $title_services;

        echo wp_title('');

      echo '</h1>';

      echo '<h2 class="subtitle secondary">'. $subtitle_services .'</h2>';

      if ($link_services && $services_link_text) :

        echo '<p class="p--large secondary"><a href="' . $link_services .'" class="link link--underline">' . $services_link_text . '</a></p>';
    
      endif;

      if ( is_tax() ) :
        
        echo '<a href="' . get_post_type_archive_link( 'services' ) .'" class="secondary link link--back">';
        
        set_query_var( 'icon', 'arrow-left' );
        get_template_part('partials/icon');
        
        echo 'All services</a>';          
        
      endif;

    echo '</div>';

  echo '</div>';

echo '</section>';

?>
