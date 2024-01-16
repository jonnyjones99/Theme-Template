<!DOCTYPE html>
<html>

<head>
    <title><?php wp_title(' | ', 'echo', 'right');
            bloginfo('name'); ?> </title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

</head>

<body <?php body_class(); ?>>

    <header>
        <div class="query">
            <div class="header__inside">

                <a href="#" class="header__logo">
                    <img src="#" alt="<?php echo wp_title() ?> logo">
                </a>

                <nav>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header-menu',
                            'container_class' => 'header__nav'
                        )
                    );
                    ?>
                </nav>

            </div>
        </div>
    </header>

    <main>