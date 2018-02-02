<?php

$profession = get_field('profession');
$credentials = get_field('credentials');
$image = get_post_thumbnail_id();
$hasimage = has_post_thumbnail();
$size = 'full';
$services = get_field('related_services');
$cv_document = get_field('cv_document');

get_template_part('partials/head');

get_template_part('partials/analytics');

get_header();

echo '<main id="main" role="main" class="main">';

  echo '<div id="barba-wrapper">';

    echo '<div class="barba-container" data-namespace="single">';

      while ( have_posts() ) : the_post();

        echo '<div class="row">';

          echo '<div class="mast mast-single">';

            echo '<a href="' . get_post_type_archive_link( 'staff' ) .'" class="secondary link link--back">';

            set_query_var( 'icon', 'arrow-left' );
            get_template_part('partials/icon');
            
            echo 'All staff</a>';

            echo '<div class="mast-text">';

              echo '<h1 class="item__title">' . get_the_title() . '</h1>';
          
              echo '<h2 class="secondary">' . $profession . '</h2>';

            echo '</div>';

          echo '</div>';

          echo '<div class="page__background">';

            echo '<div class="page__content">';

              echo '<div class="sidebar">';

                if($credentials) :

                echo '<div class="sidebar__section">';
              
                  echo '<h3 class="secondary sidebar__heading">Credentials</h3>';

                  echo '<p class="small">' . $credentials . '</p>';
              
                echo '</div>';
              
                endif;
              
                if( have_rows('specializations') ):

                  echo '<div class="sidebar__section">';

                    echo '<div class="revealer">';

                      echo '<input id="specializations" type="checkbox" name="tabs">';
                    
                      echo '<label class="gamma secondary" for="specializations">Specializations';
                      
                      echo '</label>';

                      echo '<div class="revealer__content">';

                        echo '<ul class="list list-sidebar list--medium list--spaced-vertical specializations">';
                        
                          while ( have_rows('specializations') ) : the_row();
                      
                            $specialization = get_sub_field('specialization');
                            
                            echo '<li class="list-item">' . $specialization . '</li>';
                      
                          endwhile;

                        echo '</ul>';
                      
                      echo '</div>';

                    echo '</div>';

                  echo '</div>';
                  
                endif;
                
                if( have_rows('education_experience') ):

                  echo '<div class="sidebar__section">';

                    echo '<div class="revealer">';
                    
                      echo '<input id="experience" type="checkbox" name="tabs">';
                    
                      echo '<label class="gamma secondary" for="experience">Experience';
                      
                      echo '</label>';

                      echo '<div class="revealer__content">';

                        echo '<ul class="list list-sidebar list--medium list--spaced-vertical experience">';
                        
                        while ( have_rows('education_experience') ) : the_row();
                    
                          $experience = get_sub_field('experience');
                          
                          echo '<li class="list-item">' . $experience . '</li>';
                    
                        endwhile;

                        echo '</ul>';
                      
                      echo '</div>';

                    echo '</div>';

                  echo '</div>';
                    
                endif;

                if( $cv_document ):

                echo '<div class="sidebar-action">';

                  $url = wp_get_attachment_url( $cv_document );
                
                  echo '<a class="button button--down button--tertiary" href="' . $url .'">Download Full CV';

                  set_query_var( 'icon', 'arrow-down' );
                  get_template_part('partials/icon');
                  
                  echo '</a>';
                
                echo '</div>';
              
                endif;
              
              echo '</div>';

              echo '<div class="primary__content">';

                echo '<div class="primary__image">';
                
                  echo wp_get_attachment_image( $image, $size );
                
                echo '</div>';

                echo '<div class="primary__text">';
                
                  echo get_the_content();

                echo '</div>';

                if( has_term('','categories') ):

                  echo '<div class="categories-assigned border-top">';

                    echo '<div class="categories-label">';

                      echo '<h5 class="secondary">Categories:</h5>';

                    echo '</div>';

                    echo '<div>';

                      get_template_part('partials/taxonomy-list');

                    echo '</div>';

                  echo '</div>';

                endif;

              echo '</div>';

            echo '</div>';

            echo '<div class="prevnext__page">';

              get_template_part('partials/prevnext');

            echo '</div>';

          echo '</div>';

          echo '<div class="tertiary__content">';
          
            if( $services ):

              echo '<div class="related-header">';

                echo '<h3 class="secondary">Related Services</h3>';

                echo '<a href="' . get_post_type_archive_link( 'services' ) .'" class="secondary link link--all link--underline">All services</a>';

              echo '</div>';

              echo '<div class="related">';

                foreach( $services as $service):

                  $serviceimage = get_post_thumbnail_id($service->ID);
                  $serviceimagesize = 'large';

                  echo '<div class="related__item item item--services">';

                    echo '<a href="' . get_the_permalink($service->ID) . '">';

                      echo '<div class="item__image">';
                    
                        echo wp_get_attachment_image( $serviceimage, $serviceimagesize );
                    
                      echo '</div>';

                      echo '<div class="item__text">';

                        echo '<h3 class="item__title">'. get_the_title($service->ID) .'</h3>';

                        echo '<h3 class="secondary">'. get_the_excerpt($service->ID) .'</h3>';

                      echo '</div>';
                      
                    echo '</a>';

                  echo '</div>';

                endforeach;

              echo '</div>';

            endif;
          
          echo '</div>';

        echo '</div>';

      endwhile;

      get_template_part('partials/blob');

    echo '</div>';

  echo '</div>';

echo '</main>';

get_footer();

get_template_part('partials/loader');

get_template_part('partials/foot');

?>
