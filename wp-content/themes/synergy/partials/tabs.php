<?php

$nav_tabs = array(
  'theme_location'  => 'nav_tabs',
  'container'       => false,
  'items_wrap'      => '%3$s',
);

echo '<nav class="tabs">';

  echo '<ul class="tabs__nav">';

    wp_nav_menu( $nav_tabs );

  echo '</ul>';

echo '</nav>';

?>
