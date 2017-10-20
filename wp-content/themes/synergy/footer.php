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

echo '<footer class="footer">';

  echo '<div class="row footer__inner">';

    echo '<div class="footer__right column column-6-tablet">';

      echo '<h1>Contact us</h1>';

    echo '</div>';

    echo '<div class="footer__left column column-6-tablet align-right">';
    
      echo '<a href="' . $classes . '" class="link link--primary underline action">' . 'Class schedules' . '</a>';
      
      echo '<a href="#" class="button button--primary action">' . 'Book an appointment' . '</a>';

    echo '</div>';

  echo '</div>';

  echo '<div class="row footer__inner">';

    get_template_part('partials/contact-locations');

    echo '<div class="footer__right footer__left column column-6-tablet ">';
    
      get_template_part('partials/contact-hours');

      get_template_part('partials/contact-notes');

      get_template_part('partials/contact-notes-location');

    echo '</div>';

  echo '</div>';

  echo '<div class="row footer__inner">';

    echo '<div class="footer__right column column-3-tablet ">';
  
      get_template_part('partials/contact-emails');
  
    echo '</div>';

    echo '<div class="footer__right column column-3-tablet ">';

      echo '<h3>Social</h3>';
    
      echo '<ul class="footer__list list list--small">';

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

    echo '<div class="footer__left column column-6-tablet">';
    
      echo '<h3 class="">Newsletter</h3>';

      get_template_part('partials/newsletter');
    
    echo '</div>';

  echo '</div>';

  echo '<div class="row footer__inner footer__section">';

    echo '<div class="column footer__right column-6-tablet">';

      echo '<ul class="list--small list footer__list">';

        wp_nav_menu( $nav_footer );

      echo '</ul>';

    echo '</div>';

    echo '<div class="footer__left column column-6-tablet">';

      echo '<p class="secondary note">' . $copyright . '</p>';
      
    echo '</div>';

  echo '</div>';

echo '</footer>';
?>