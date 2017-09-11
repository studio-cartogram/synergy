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

set_query_var( 'context', 'footer' );
set_query_var( 'icon', 'logo-icon' );

echo '<footer class="footer">';

  echo '<div class="row footer__inner">';

    echo '<div class="footer__left column column-6-tablet ">';

      echo '<p class="p--hard p--large secondary ">';

        echo 'Still have questions?';

        echo ' <a href="' . get_bloginfo('url') . '/help" class="link link--primary">' . 'Visit our help center' . '</a>';

      echo '</p>';

      echo '<p class="p--hard p--large secondary ">';

        echo '<a class="link link--primary" href="javascript:Smooch.open()">Start a chat</a>';

        echo ' <em class="dashed serif">&mdash;or&mdash;</em> ';

        echo '<a href="mailto:' . 'hello@fondfolio.com' . '" class="link link--primary">' . 'Send us an email' . '</a>';

        echo '<br>We value your words.';

      echo '</p>';

    echo '</div>';

    echo '<div class="footer__right column column-6-tablet ">';

      get_template_part('partials/newsletter');

    echo '</div>';


  echo '</div>';

  echo '<a class="with-line footer__icon">';

    echo '<span class="logo__icon">';

      set_query_var( 'icon', 'logo-icon' );

      get_template_part('partials/icon');

    echo '</span>';

  echo '</a>';

  echo '<div class="row row--justify-center">';

  echo '<ul class="mono footer__list list--small list">';

    echo '<li>';

      echo '<span class="secondary ">' . $copyright . '</span>';

    echo '</li>';

  echo '</ul>';

  echo '<ul class="mono footer__list list--small list list--narrow">';

    wp_nav_menu( $nav_footer );

  echo '</ul>';

  echo '<ul class="mono footer__list list--small list">';

    echo '<li>';

      echo '<span class="secondary ">' . 'Made with love by <a href="http://cartogram.ca">Cartogram</a>' . '</span>';

    echo '</li>';

  echo '</ul>';

  echo '</div>';

  echo '<ul class="footer__list list list--small">';

    echo '<li><a class="button button--circle" href="' . $instagram . '">';

      set_query_var( 'icon', 'instagram' );
      get_template_part('partials/icon');

    echo '</a></li>';

    echo '<li><a class="button button--circle" href="' . $twitter . '">';

      set_query_var( 'icon', 'twitter' );
      get_template_part('partials/icon');

    echo '</a></li>';

    echo '<li><a class="button button--circle" href="' . $facebook . '">';

      set_query_var( 'icon', 'facebook' );
      get_template_part('partials/icon');

    echo '</a></li>';

  echo '</ul>';
echo '</footer>';
?>
