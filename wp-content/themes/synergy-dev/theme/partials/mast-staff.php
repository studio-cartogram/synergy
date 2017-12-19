<?php

$title_staff= get_field('title_staff', 'options');
$subtitle_staff = get_field('subtitle_staff', 'options');

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="title">';

        // echo $title_staff;

        echo wp_title('');

      echo '</h1>';

      echo '<h2 class="subtitle secondary">'. $subtitle_staff .'</h2>';

      if ( is_tax() ) :
        
        echo '<a href="' . get_post_type_archive_link( 'staff' ) .'" class="secondary link link--back">';
        
        set_query_var( 'icon', 'arrow-left' );
        get_template_part('partials/icon');
        
        echo 'All staff</a>';          
        
      endif;

      get_template_part('partials/filter-staff');      
              
    echo '</div>';

  echo '</div>';

echo '</section>';

?>
