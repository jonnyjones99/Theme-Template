<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>


        <article>
            <div class="query">
                <h1 class="title"><?php the_title() ?></h1>
                <p><?php the_content() ?></p>
            </div>
        </article>


<?php endwhile;
endif;
get_footer(); ?>