<?php

$image = get_post_thumbnail_id();
$hasimage = has_post_thumbnail();
$size = 'full';

$areas = get_field('areas_treated');
$faqs = get_field('related_faq');
$fees = get_field('related_fees');

$services = get_field('related_services');
$staff = get_field('related_staff');

get_template_part('partials/head');

get_template_part('partials/analytics');

get_header();

echo '<main id="main" role="main" class="main">';

  echo '<div id="barba-wrapper">';

    echo '<div class="barba-container" data-namespace="single">';

      while ( have_posts() ) : the_post();

        echo '<div class="row">';

          echo '<div class="mast mast-single">';

            echo '<a href="' . get_post_type_archive_link( 'services' ) .'" class="secondary link link--back">';

            set_query_var( 'icon', 'arrow-left' );
            get_template_part('partials/icon');
            
            echo 'All services</a>';

            echo '<div class="mast-text">';

              echo '<h1 class="item__title">' . get_the_title() . '</h1>';
          
            echo '</div>';

          echo '</div>';

          echo '<div class="page__background">';

            echo '<div class="page__content">';

              echo '<div class="sidebar">';
              
                if( have_rows('areas_treated') ):

                  echo '<div class="sidebar__section">';

                    echo '<div class="revealer">';

                      echo '<input id="areas_treated" type="checkbox" name="tabs">';
                    
                      echo '<label class="gamma secondary" for="areas_treated">Issues/Areas Treated';
                      
                      echo '</label>';

                      echo '<div class="revealer__content">';

                        echo '<ul class="list list-sidebar list--medium list--spaced-vertical areas_treated">';
                        
                          while ( have_rows('areas_treated') ) : the_row();
                      
                            $area = get_sub_field('area');
                            
                            echo '<li class="list-item">' . $area . '</li>';
                      
                          endwhile;

                        echo '</ul>';
                      
                      echo '</div>';

                    echo '</div>';

                  echo '</div>';
                  
                endif;

                if( $faqs ):
                  
                  echo '<div class="sidebar__section">';

                    echo '<div class="revealer">';

                      echo '<input id="related_faqs" type="checkbox" name="tabs">';
                    
                      echo '<label class="gamma secondary" for="related_faqs">FAQ';
                      
                      echo '</label>';

                      echo '<div class="revealer__content">';

                        echo '<ul class="list list-sidebar list--medium list--spaced-vertical related_faqs">';
                        
                        foreach( $faqs as $faq ):
                          
                          echo '<li class="list-item">';
        
                            echo '<a href="' . get_the_permalink($faq->ID) . '">';
        
                              echo get_the_title($faq->ID);
                                    
                            echo '</a>';
        
                          echo '</li>';
        
                        endforeach;

                        echo '</ul>';
                      
                      echo '</div>';

                    echo '</div>';

                  echo '</div>';
                  
                endif;

                if( $fees ):
                  
                  echo '<div class="sidebar__section">';

                    echo '<div class="revealer">';

                      echo '<input id="related_fees" type="checkbox" name="tabs">';
                    
                      echo '<label class="gamma secondary" for="related_fees">Fees';
                      
                      echo '</label>';

                      echo '<div class="revealer__content">';

                        echo '<div class="table related_fees">';
                        
                          foreach( $fees as $fee ):

                            if( have_rows('breakdown', $fee->ID) ):
                                                        
                              while ( have_rows('breakdown', $fee->ID) ) : the_row();
                            
                                $time = get_sub_field('time', $fee->ID);
                                $type = get_sub_field('type', $fee->ID);
                                $cost = get_sub_field('cost', $fee->ID);
                                
                                echo '<div class="table__row fee">';
                                
                                  echo '<h6 class="fee__time">' . $time . '';
                          
                                  echo '<span class="fee__type secondary">' . $type . '</span></h6>';
                          
                                  echo '<h6 class="fee__cost">' . $cost . '</h6>';

                                  echo '</h6>';
                            
                                echo '</div>';
                            
                              endwhile;
                                                      
                            endif;
          
                          endforeach;

                        echo '</div>';
                      
                      echo '</div>';

                    echo '</div>';

                  echo '</div>';
                  
                endif;
              
              echo '</div>';

              echo '<div class="primary__content">';

                echo '<div class="primary__image">';
                
                  echo wp_get_attachment_image( $image, $size );
                
                echo '</div>';

                echo '<div class="primary__text">';
                
                  echo get_the_content();

                  if( has_term('','tags') ):

                    echo '<div class="categories-assigned">';

                      echo '<h5 class="secondary border-top">Service Categories</h5>';

                      get_template_part('partials/taxonomy-list-services');

                    echo '</div>';

                  endif;

                echo '</div>';

              echo '</div>';

            echo '</div>';

            echo '<div class="prevnext__page">';

              get_template_part('partials/prevnext');

            echo '</div>';

          echo '</div>';

          echo '<div class="tertiary__content">';

            if( $staff ):
              
              echo '<div class="related-header">';

                echo '<h3 class="secondary">Related staff</h3>';

                echo '<a href="' . get_post_type_archive_link( 'staff' ) .'" class="secondary link link--all link--underline">All staff</a>';

              echo '</div>';

              echo '<div class="related">';

                foreach( $staff as $staff):

                  $staffImage = get_post_thumbnail_id($staff->ID);
                  $staffImageSize = 'large';
                  $profession = get_field('profession', $staff->ID);

                  echo '<div class="related__item item item--staff">';

                    echo '<a href="' . get_the_permalink($staff->ID) . '">';

                      echo '<div class="item__image">';
                    
                        echo wp_get_attachment_image( $staffImage, $staffImageSize );
                    
                      echo '</div>';

                      echo '<div class="item__text">';

                        echo '<h3 class="item__title">'. get_the_title($staff->ID) .'</h3>';

                        echo '<h3 class="secondary">' . $profession . '</h3>';

                      echo '</div>';
                      
                    echo '</a>';

                  echo '</div>';

                endforeach;

              echo '</div>';

            endif;
          
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

                      echo '</div>';
                      
                    echo '</a>';

                  echo '</div>';

                endforeach;

              echo '</div>';

            endif;

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
