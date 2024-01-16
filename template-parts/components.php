<?php
if (have_rows('components')) :
    while (have_rows('components')) : the_row();

        // Case: 
        if (get_row_layout() == '') :
            get_template_part('');

        elseif (get_row_layout() == '') :
            get_template_part('');

        endif;
    endwhile;
endif;
