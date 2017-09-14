<?php
echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="">' . (get_search_query() ? 'Search Results for &ldquo;' . get_search_query() . '&rdquo;' : 'How can we help?') . '</h1>';

    echo '</div>';

  echo '</div>';

echo '</section>';

?>
