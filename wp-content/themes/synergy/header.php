<?php
global $language;

$booking_link_main = get_field('booking_link', 'options');
$booking_link_text = get_field('booking_link_text', 'options');


$classes = get_field('class_schedules', 'options');
$locations_overlay_toggle = get_field('locations_overlay_toggle', 'options');

$menu_object_services = wp_get_nav_menu_object( 104 );
$menu_title_services = $menu_object_services->name;

$menu_object_programs = wp_get_nav_menu_object( 105 );
$menu_title_programs = $menu_object_programs->name;

$menu_object_resources = wp_get_nav_menu_object( 106 );
$menu_title_resources = $menu_object_resources->name;

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

$nav_services = array(
  'theme_location'  => 'header_nav_services',
  'container'       => false,
  'items_wrap'      => '%3$s',
);

$nav_programs = array(
  'theme_location'  => 'header_nav_programs',
  'container'       => false,
  'items_wrap'      => '%3$s',
);

$nav_resources = array(
  'theme_location'  => 'header_nav_resources',
  'container'       => false,
  'items_wrap'      => '%3$s',
);

get_template_part('partials/contact-announcement');

echo '<header role="banner" class="header">';

  echo '<div class="header__inner">';

    echo '<div class="header__logo">';

      echo '<a href="' . get_bloginfo('url') . '" class="">';

        echo '<span class="visuallyhidden">' . get_bloginfo('name') . '</span>';

        echo '<img class="hide-when--nav--is-visible" src="' . get_bloginfo('stylesheet_directory') . '/assets/svg/logo.svg" />';
        
        echo '<img class="show-when--nav--is-visible" src="' . get_bloginfo('stylesheet_directory') . '/assets/svg/logo-white.svg" />';

      echo '</a>';

    echo '</div>';

    echo '<ul class="header__nav list nav__outside">';

      echo '<li class="">';

        echo '<a target="_blank" href="' . $classes . '" class="link link--primary action">' . 'Class schedules';
      
        echo '</a>';

      echo '</li>';

      echo '<li class="">';

        echo '<a href="#locations" data-toggle-locations class="link link--primary locations__toggle">' . $locations_overlay_toggle . '</a>';  
      
      echo '</li>';

      echo '<li class="">';

        echo '<a target="_blank" href="'. $booking_link_main .'" class="link link--primary">' . $booking_link_text . '</a>';  
      
      echo '</li>';

    echo '</ul>';

  echo '</div>';

  echo '<nav class="nav js-nav" role="navigation">';

    get_template_part('partials/blob');

    echo '<div class="row row--full nav__inner">';

      echo '<div class="nav__list nav__resources">';
      
        echo '<ul class="list list__inner list--large list--align-center">';

          wp_nav_menu( $nav_resources );

        echo '</ul>';

      echo '</div>';

    echo '</div>';
  
  echo '</nav>';

  echo '<div class="overlay js-locations locations">';

    echo '<div class="locations__inner">';

      get_template_part('partials/overlay-locations');
    
    echo '</div>';

  echo '</div>';

  echo '<a href="#menu" data-toggle-nav class="header__toggle hamburger--spin hamburger">';

    echo '<span class="hamburger-box">';
    
      echo '<span class="hamburger-inner"></span>';

    echo '</span>';
  
  echo '</a>';

echo '</header>';

