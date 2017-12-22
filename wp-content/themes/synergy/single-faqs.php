<?php

$faqs = get_field('related_faqs');

get_template_part('partials/head');

get_template_part('partials/analytics');

get_header();

echo '<main id="main" role="main" class="main">';

  echo '<div id="barba-wrapper">';

    echo '<div class="barba-container" data-namespace="single">';

      while ( have_posts() ) : the_post();

        echo '<div class="row">';

          echo '<div class="mast mast-single">';

            echo '<a href="' . get_post_type_archive_link( 'faqs' ) .'" class="secondary link link--back">';

            set_query_var( 'icon', 'arrow-left' );
            get_template_part('partials/icon');
            
            echo 'All faqs</a>';

            echo '<div class="mast-text">';

              echo '<h1 class="item__title">' . get_the_title() . '</h1>';
          
            echo '</div>';

          echo '</div>';

          echo '<div class="page__background">';

            echo '<div class="page__content">';

              echo '<div class="sidebar">';

              echo '</div>';

              echo '<div class="primary__content">';

                echo '<div class="primary__text">';
                
                  echo get_the_content();

                  if( has_term('','topic') ):

                    echo '<div class="categories-assigned">';

                      echo '<h5 class="secondary border-top">Filed under</h5>';

                      get_template_part('partials/taxonomy-list-faqs');

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
          
            if( $faqs ):

              echo '<div class="related-header">';

                echo '<h3 class="secondary">Related FAQs</h3>';

                echo '<a href="' . get_post_type_archive_link( 'faqs' ) .'" class="secondary link link--all link--underline">All FAQs</a>';

              echo '</div>';

              echo '<div class="related">';

                foreach( $faqs as $faq):

                  echo '<div class="related__item item item--services">';

                    echo '<a href="' . get_the_permalink($faq->ID) . '">';

                      echo '<div class="item__text">';

                        echo '<h3 class="item__title">'. get_the_title($faq->ID) .'</h3>';

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
