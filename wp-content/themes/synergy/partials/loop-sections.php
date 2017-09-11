<?php

if( have_rows('sections', 'options') ):

    while ( have_rows('sections') ) : the_row();
		
        get_template_part('partials/section', get_row_layout());

    endwhile;

endif;

?>
