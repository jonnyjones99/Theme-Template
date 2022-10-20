<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>


        <section class="research">

            <div class="page-splash" style="background-image: url('/wp-content/themes/jpl/assets/img/Image-07.jpg');">
            </div>

            <main>
                <div class="query">
                    <article>
                        <H1 class="main-title txt--green"><?php the_title() ?></H1>
                        <p><?php the_content() ?></p>
                    </article>
                </div>
            </main>

        </section>


<?php endwhile;
endif;
get_footer(); ?>