<?php

$select_blog = get_field('select_blog', 'options');

$args = array( 'hide_empty=0' );
$terms = get_terms( 'category', $args ); // the blog posts taxonomy
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
$count = count( $terms );
$i = 0;
$term_list = '<option>'. $select_blog .'</option>';
foreach ( $terms as $term ) {
    $value = esc_url( get_term_link( $term ) );
    $i++;
    $term_list .= '<option value="' . $value . '">' . $term->name . '</option>';
}
echo '<select class="filter__toggle js-find-clinician" data-select=".js-find-clinician">';
    echo $term_list;
echo '</select>';
}

?>
