<?php
/**
 * This is the FAQ taxonomy archive
 *
*/

get_template_part('partials/head');

get_template_part('partials/analytics');

get_header();

get_template_part('partials/nav');

echo '<main id="main" role="main" class="main">';

echo '<div id="barba-wrapper">';

  echo '<div class="barba-container">';

    get_template_part('partials/mast-faqs');
    
    echo '<div class="scene__item scene__item--fadinup row row--justify-center">';

    echo '<div class="items__faqs">';

      get_template_part('partials/loop');

    echo '</div>';

    echo '</div>';

  echo '</div>';

echo '</div>';

echo '</main>';

get_template_part('partials/blob');

get_footer();

get_template_part('partials/loader');

get_template_part('partials/foot');
