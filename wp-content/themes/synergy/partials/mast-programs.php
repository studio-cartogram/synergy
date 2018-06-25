<?php

$title_programs = get_field('title_programs', 'options');
$subtitle_programs = get_field('subtitle_programs', 'options');
$link_programs = get_field('link_programs', 'options');
$programs_link_text = get_field('programs_link_text', 'options');

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="title">';

        // echo $title_prorgams;

        echo wp_title('');

      echo '</h1>';

      echo '<h2 class="subtitle secondary">'. $subtitle_programs .'</h2>';

      if ($link_programs && $programs_link_text) :

        echo '<p class="p--large secondary"><a href="' . $link_programs .'" class="link link--underline">' . $programs_link_text . '</a></p>';
    
      endif;

      if ( is_tax() ) :
        
        echo '<a href="' . get_post_type_archive_link( 'programs' ) .'" class="secondary link link--back">';
        
        set_query_var( 'icon', 'arrow-left' );
        get_template_part('partials/icon');
        
        echo 'All programs</a>';
        
      endif;

    echo '</div>';

  echo '</div>';

echo '</section>';

?>
