<?php

$image = get_post_thumbnail_id();
$date = get_the_date();
$hasimage = has_post_thumbnail();
$size = 'full';

$areas = get_field('areas_treated');
$faqs = get_field('related_faq');
$fees = get_field('related_fees');

$blogPosts = get_field('related_posts');

get_template_part('partials/head');

get_template_part('partials/analytics');

get_header();

echo '<main id="main" role="main" class="main">';

  echo '<div id="barba-wrapper">';

    echo '<div class="barba-container" data-namespace="single">';

      while ( have_posts() ) : the_post();

        echo '<div class="row">';

          echo '<div class="mast mast-single">';

            echo '<a href="' . get_post_type_archive_link( 'post' ) .'" class="secondary link link--back">';

            set_query_var( 'icon', 'arrow-left' );
            get_template_part('partials/icon');
            
            echo 'Blog</a>';

            echo '<div class="mast-text">';

              echo '<h1 class="item__title">' . get_the_title() . '</h1>';

              echo '<h2 class="secondary">by '. get_the_author() .' • ' . $date . '</h2>';
          
            echo '</div>';

          echo '</div>';

          echo '<div class="page__background">';

            echo '<div class="page__content">';

              echo '<div class="sidebar sidebar--blog">';

                echo '<div class="sidebar__section">';

                  echo '<h3 class="gamma secondary" for="resources">Share this post</h3>';

                  echo get_template_part('partials/share');

                echo '</div>';
              
                if( have_rows('resources') ):

                  echo '<div class="sidebar__section">';
                  
                    echo '<h3 class="gamma secondary" for="resources">Resources';
                    
                    echo '</h3>';

                    echo '<ul class="list list-sidebar list--medium list--spaced-vertical resources">';
                    
                      while ( have_rows('resources') ) : the_row();
                  
                        $link = get_sub_field('link');
                        $text = get_sub_field('link_text');

                        echo '<li class="list-item">';
                        
                          echo '<a class="" href="'. $link .'">' . $text . '</a>';

                        echo '</li>';
                  
                      endwhile;

                    echo '</ul>';
                    
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

                echo '<div class="share-footer border-top">';

                  echo get_template_part('partials/share');

                echo '</div>';

                if( has_term('','category') ):

                  echo '<div class="categories-assigned border-top">';

                    echo '<div class="categories-label">';

                      echo '<h5 class="secondary">Categories:</h5>';

                    echo '</div>';

                    echo '<div>';

                      get_template_part('partials/taxonomy-list-blog');

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

            if( $blogPosts ):
              
              echo '<div class="related-header">';

                echo '<h3 class="secondary">Related posts</h3>';

                echo '<a href="' . get_post_type_archive_link( 'post' ) .'" class="secondary link link--all link--underline">All posts</a>';

              echo '</div>';

              echo '<div class="related">';

                foreach( $blogPosts as $blogPost):

                  $blogImage = get_post_thumbnail_id($blogPost->ID);
                  $blogImageSize = 'large';

                  echo '<div class="related__item item item--blog">';

                    echo '<a href="' . get_the_permalink($blogPost->ID) . '">';

                      echo '<div class="item__image">';
                    
                        echo wp_get_attachment_image( $blogImage, $blogImageSize );
                    
                      echo '</div>';

                      echo '<div class="item__text">';

                        echo '<h3 class="item__title">'. get_the_title($blogPost->ID) .'</h3>';

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