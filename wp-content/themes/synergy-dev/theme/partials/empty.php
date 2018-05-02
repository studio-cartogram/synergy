<?php

$title = get_field('title_404', 'options');
$subtitle = get_field('subtitle_404', 'options');
$help = get_field('help_404', 'options');
$links = get_field('links_404', 'options');

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="title secondary">'. $subtitle .'</h1>';

      echo '<h2 class="subtitle secondary">'. $subtitle .'</h2>';
      
  echo '</div>';

  echo '<div class="row links_404">';

      echo '<h2 class="centered">'. $help .'</h2>';
        
      if( have_rows('links_404', 'options') ):

	      echo '<h3 class="secondary feature__links">';

          while( have_rows('links_404', 'options') ): the_row(); 

            $text = get_sub_field('text');
            $link = get_sub_field('link');

            echo '<span class="feature__link">';

              echo '<a href="'. $link .'">';

              echo $text;

              echo '</a>';

            echo '</span>';

          endwhile;

        echo '</h3>';

      endif;
        
    echo '</div>';

  echo '</div>';

echo '</section>';

?>
