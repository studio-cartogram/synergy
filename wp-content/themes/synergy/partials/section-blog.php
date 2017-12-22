<?php

$blog = get_sub_field('blog_posts');
$title = get_sub_field('title');

echo '<div class="tertiary__content">';

  if( $blog ):
    
    echo '<div class="related-header">';

      echo '<h3 class="secondary"> '. $title .'</h3>';

    echo '</div>';

    echo '<div class="related">';

      foreach( $blog as $blog):

        $blogimage = get_post_thumbnail_id($blog->ID);
        $blogimagesize = 'large';
        $source = get_field('source', $blog->ID);
        $link = get_field('link', $blog->ID);
        
        echo '<div class="item related__item item--press">';

          echo '<a href="' . $link . '">';

            echo '<div class="item__image">';
          
              echo wp_get_attachment_image( $blogimage, $blogimagesize );
          
            echo '</div>';

            echo '<div class="item__text">';

              echo '<h3 class="item__title">'. get_the_title($blog->ID) .'</h3>';

              echo '<h3 class="secondary">'. $source .'</h3>';

            echo '</div>';
            
          echo '</a>';

        echo '</div>';

      endforeach;
      
    echo '</div>';

  endif;

  echo '</div>';

?>