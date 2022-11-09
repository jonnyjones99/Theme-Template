<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>


        <section class="section">
            <div class="query">

                <article>
                    <h1 class="title clr--primary"><?php the_title() ?></h1>
                    <p><?php the_content() ?></p>
                </article>


            </div>
        </section>


        <?php
        // ACF repeater

        /*
        if (have_rows('repeater')) :
            while (have_rows('repeater')) : the_row();
                $field = get_sub_field('field_name');

            endwhile;
        else :
        endif;
        */
        ?>


<?php endwhile;
endif;
get_footer(); ?>