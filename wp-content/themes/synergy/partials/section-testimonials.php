<?php

$testimonials = get_sub_field('testimonials');

echo '<div class="js-slideshow swiper-container testimonials">';

  if( $testimonials ):
    
    echo '<div class="testimonials__header">';

      echo '<h2 class="secondary text--align-center">Words from our clients</h2>';

    echo '</div>';

    echo '<div class="swiper-wrapper">';

      foreach( $testimonials as $testimonial ):

        $testimonialText = get_field('testimonial', $testimonial->ID);
        $client = get_field('client', $testimonial->ID);
        $services = get_field('related_services', $testimonial->ID);
        
        echo '<div class="swiper-slide">';

          echo '<div class="item__text testimonial">';

            echo '<h2 class="text--align-center testimonial__text">“'. $testimonialText .'”</h2>';

            echo '<h3 class="testimonial__credit secondary">&#8212; '. $client .'';

              if( $services ):
                
                foreach( $services as $service ):
    
                  echo ', <a class="link--underline" href="' . get_the_permalink($service->ID) . '">';
    
                    echo get_the_title($service->ID);
                  
                  echo '</a>';
    
                endforeach;
    
              endif;

            echo '</h3>';

          echo '</div>';
            
        echo '</div>';

      endforeach;
      
    echo '</div>';

    echo '<div class="testimonials__buttons">';
    
      echo '<div class="swiper-button-prev button button--circle">';
        
        set_query_var( 'icon', 'arrow-left' );
        get_template_part('partials/icon');
        
      echo '</div>';

      echo '<div class="swiper-button-next button button--circle">';

        set_query_var( 'icon', 'arrow-right' );
        get_template_part('partials/icon');
        
      echo '</div>';
    
    echo '</div>';

  endif;

  echo '</div>';

?>