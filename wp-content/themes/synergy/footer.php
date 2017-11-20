<?php

$nav_footer = array(
  'theme_location'  => 'nav_footer',
  'container'       => false,
  'items_wrap'      => '%3$s',
);

$copyright = get_field('copyright', 'options');
$facebook = get_field('facebook', 'options');
$instagram = get_field('instagram', 'options');
$twitter = get_field('twitter', 'options');
$classes = get_field('class_schedules', 'options');

set_query_var( 'context', 'footer' );

echo '<footer class="footer container">';

echo '<div class="row row--align-center soft-bottom--quin">';

    echo '<div class="column column-grow">';

      echo '<h1 class="text--inverted">Contact us</h1>';

    echo '</div>';

    echo '<div class="column column-auto">';
    
      echo '<a href="' . $classes . '" class="link link--inverted link--primary link--external action">' . 'Class schedules';

      set_query_var( 'icon', 'arrow-external' );
      get_template_part('partials/icon');

      echo '</a>';

    echo '</div>';

    echo '<div class="column column-tablet-auto">';
    
      echo '<a href="#locations" data-toggle-locations class="link link--primary link--inverted locations__toggle">' . 'Book an appointment' . '</a>';

    echo '</div>';

  echo '</div>';

  echo '<div class="row">';

    get_template_part('partials/contact-locations');

    echo '<div class="column column-6-tablet">';
    
      get_template_part('partials/contact-hours');

      echo '<div class="notes soft-bottom--trio">';

        get_template_part('partials/contact-notes');

        get_template_part('partials/contact-notes-location');

      echo '</div>';

    echo '</div>';

  echo '</div>';

  echo '<div class="row">';

    echo '<div class="column column-6-mobile column-3-tablet ">';
  
      get_template_part('partials/contact-emails');
  
    echo '</div>';

    echo '<div class="column column-6-mobile column-3-tablet ">';

      echo '<h3 class="footer__heading">Social</h3>';
    
      echo '<ul class="list soft-bottom--trio list--nowrap list--spaced-horizontal">';

        if( $instagram ):

          echo '<li><a class="button button--circle" href="' . $instagram . '">';
      
            set_query_var( 'icon', 'instagram' );
            get_template_part('partials/icon');
      
          echo '</a></li>';

        endif;

        if( $twitter ):
    
          echo '<li><a class="button button--circle" href="' . $twitter . '">';
      
            set_query_var( 'icon', 'twitter' );
            get_template_part('partials/icon');
      
          echo '</a></li>';
        
        endif;

        if( $facebook ):
    
          echo '<li><a class="button button--circle" href="' . $facebook . '">';
      
            set_query_var( 'icon', 'facebook' );
            get_template_part('partials/icon');
      
          echo '</a></li>';

        endif;
      
      echo '</ul>';
    
    echo '</div>';

    echo '<div class="column column-6-tablet">';
    
      echo '<h3 class="footer__heading">Newsletter</h3>';

      get_template_part('partials/newsletter');
    
    echo '</div>';

  echo '</div>';

  echo '<div class="row footer__bottom">';

    echo '<div class="column column-6-tablet">';

      echo '<ul class="list--small list list--spaced-horizontal text--inverted soft-bottom--duo">';

        wp_nav_menu( $nav_footer );

      echo '</ul>';

    echo '</div>';

    echo '<div class="column column-6-tablet">';

      echo '<p class="note">' . $copyright . '</p>';
      
    echo '</div>';

  echo '</div>';

  echo '<div class="overlay js-locations locations locations-footer">';
  
    echo '<div class="locations__inner">';

      get_template_part('partials/overlay-locations');
    
    echo '</div>';

  echo '</div>';

echo '</footer>';
?>