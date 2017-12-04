<?php

  $subtitle_staff = get_field('subtitle_staff', 'options');
  $select_staff = get_field('select_staff', 'options');

  $subtitle_services = get_field('subtitle_services', 'options');

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="title">';

        echo wp_title('');

      echo '</h1>';

      echo '<h2 class="subtitle secondary">';

      if(is_archive('staff') ) : 
      
        echo $subtitle_staff;
        
        // set_query_var( 'icon', 'arrow-down' );
        // get_template_part('partials/icon');
      
      elseif(is_archive('services') ) : 

        echo $subtitle_services;

      elseif(is_archive('faq') ) : 
        
        echo $subtitle_faq;

      endif;
            
      echo '</h2>';

      if(is_archive('staff') ) : 

        echo '<a href="#filter" data-toggle-filter class="button button--primary button--large">'. $select_staff .'';

        set_query_var( 'icon', 'toggle-down' );
        get_template_part('partials/icon');
        
        echo'</a>';        

      endif;

    echo '</div>';

  echo '</div>';

echo '</section>';

?>
