<?php get_header(); ?>



<div class="query">

    <h1>Oops, sorry about that!</h1>
    <p>404</p>
    <p>We can't seem to find the page your looking for.</p>
    <p>Use two buttons below to either navigate back to the homepage or to go back to the previous page you were on.</p>

    <nav>
        <a href="<?php echo get_home_url() ?>" class="btn--primary">Back to home</a>
        <a style="cursor: pointer;" onclick="history.back()">Go to previous page</a>
    </nav>

</div>



<?php get_footer(); ?>