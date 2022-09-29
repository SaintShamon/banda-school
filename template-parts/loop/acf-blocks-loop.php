<?php
if( have_rows('blocks') ):
    while ( have_rows('blocks') ) : the_row();
        echo '<pre>';
        echo print_r(get_row_layout());
        echo '</pre>';

        get_template_part('template-parts/acf-blocks/'.get_row_layout());
    endwhile;

else :
endif;