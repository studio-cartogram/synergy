<?php
global $language;

$classes = get_field('class_schedules', 'options');

$nav_primary_right = array(
  'theme_location'  => 'header_nav_secondary',
  'container'       => false,
  'items_wrap'      => '%3$s',
);

$nav_primary_left = array(
  'theme_location'  => 'header_nav_primary',
  'container'       => false,
  'items_wrap'      => '%3$s',
);

get_template_part('partials/contact-announcement');

echo '<header role="banner" class="header">';

  echo '<div class="header__inner">';

    echo '<div class="header__logo">';

      echo '<a href="' . get_bloginfo('url') . '" class="">';

        echo '<span class="visuallyhidden">' . get_bloginfo('name') . '</span>';

        echo '<img src="' . get_bloginfo('stylesheet_directory') . '/assets/svg/logo.svg" />';
              
      echo '</a>';

    echo '</div>';

    echo '<ul class="header__nav list">';

      echo '<li class="">';

        echo '<a href="' . $classes . '" class="link link--primary link--external action">' . 'Class schedules';
      
          set_query_var( 'icon', 'arrow-external' );
          get_template_part('partials/icon');
      
        echo '</a>';

      echo '</li>';

      echo '<li class="">';

        echo '<a href="#locations" class="link link--primary">' . 'Book an appointment' . '</a>';  
      
      echo '</li>';

    echo '</ul>';

  echo '</div>';

  echo '<a href="#menu" data-toggle=".js-nav" data-toggle-class="is-active" class="header__toggle">';

    echo '<img src="' . get_bloginfo('stylesheet_directory') . '/assets/svg/hamburger.svg" />';

  echo '</a>';

  echo '<nav class="nav js-nav" role="navigation">';

    echo '<div class="row row--full nav__inner">';

      echo '<div class="nav__logo">';
    
        echo '<a href="' . get_bloginfo('url') . '" class="">';
  
          echo '<span class="visuallyhidden">' . get_bloginfo('name') . '</span>';
  
          echo '<img src="' . get_bloginfo('stylesheet_directory') . '/assets/svg/logo.svg" />';
                
        echo '</a>';
    
      echo '</div>';

      echo '<ul class="nav__list list">';

        wp_nav_menu( $nav_primary_left );

      echo '</ul>';

    echo '</div>';
  
  echo '</nav>';

echo '</header>';

