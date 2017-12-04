<?php

// $nav_staff = array(
//   'theme_location'  => 'nav_staff',
//   'container'       => false,
//   'items_wrap'      => '%3$s',
// );

// echo '<nav class="staff">';

//   echo '<ul class="staff__nav">';

//     wp_nav_menu( $nav_staff );

//   echo '</ul>';

// echo '</nav>';

if(is_archive('staff') ) : 

    $args = array( 'hide_empty=0' );
    $terms = get_terms( 'categories', $args );
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    $count = count( $terms );
    $i = 0;
    $term_list = '<div class="filter__nav">';
    foreach ( $terms as $term ) {
        $i++;
        $term_list .= '<a class="secondary link link--underline filter__link filter__toggle" href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a>';
        if ( $count != $i ) {
            $term_list .= ' &middot; ';
        }
        else {
            $term_list .= '</div>';
        }
    }
    echo $term_list;
    }

endif;

?>
