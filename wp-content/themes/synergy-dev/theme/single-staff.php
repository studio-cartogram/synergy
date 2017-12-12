<?php

$profession = get_field('profession');
$credentials = get_field('credentials');
$image = get_post_thumbnail_id();
$hasimage = has_post_thumbnail();
$size = 'full';

get_template_part('partials/head');

get_template_part('partials/analytics');

get_header();

echo '<main id="main" role="main" class="main">';

echo '<div id="barba-wrapper">';

  echo '<div class="barba-container" data-namespace="single">';

  while ( have_posts() ) : the_post();

    echo '<div class="row">';

      echo '<div class="mast mast-single">';

        echo '<a href="#back" class="link link--back">Back</a>';

        echo '<div class="mast-text">';

          echo '<h1 class="item__title">' . get_the_title() . '</h1>';
      
          echo '<h2 class="secondary">' . $profession . '</h2>';

        echo '</div>';

      echo '</div>';

      echo '<div class="content-single">';

        echo '<div class="single__sidebar">';

          echo '<div class="sidebar-section">';
        
            if( have_rows('specializations') ):

              echo '<h3 class="secondary">Specializations</h3>';

              echo '<ul class="list list-medium list--spaced-vertical specializations">';
              
              while ( have_rows('specializations') ) : the_row();
          
                $specialization = get_sub_field('specialization');
                
                echo '<li class="list-item">' . $specialization . '</li>';
          
              endwhile;

              echo '</ul>';
              
            endif;

          echo '</div>';

          echo '<div class="sidebar-section">';

            echo '<h3 class="secondary">Credentials</h3>';

            echo '<p class="small">' . $credentials . '</p>';

          echo '</div>';

          echo '<div class="sidebar-section">';
          
            if( have_rows('education_experience') ):

              echo '<h3 class="secondary">Experience</h3>';

              echo '<ul class="list list-medium list--spaced-vertical experience">';
              
              while ( have_rows('education_experience') ) : the_row();

                $experience = get_sub_field('experience');
          
                echo '<li class="list-item">' . $experience . '</li>';
          
              endwhile;

              echo '</ul>';
              
            endif;
  
          echo '</div>';
        
        echo '</div>';

        echo '<div class="primary__content">';

          echo '<div class="primary__image">';
          
            echo wp_get_attachment_image( $image, $size );
          
          echo '</div>';

          echo '<div class="primary__text">';
          
            echo get_the_content();
          
          echo '</div>';

        echo '</div>';

      echo '</div>';

      get_template_part('partials/prevnext');

      echo '</div>';

    echo '</div>';

  endwhile;

  echo '</div>';

echo '</div>';

echo '</main>';

get_footer();

get_template_part('partials/loader');

get_template_part('partials/foot');

?>
