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


<?php endwhile;
endif;
get_footer(); ?>