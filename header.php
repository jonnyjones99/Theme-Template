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
</head>

<body <?php body_class(); ?>>

    <header>
        <div id="site-header" class="header-wrap">
            <div class="query">

                <div class="header__inside">
                    <a class="logo-link" href="<?php echo get_home_url() ?>">
                        <img src="/wp-content/themes/theme-template/assets/svg/logo.png" alt="" class="header__logo">
                    </a>

                    <!-- Burger -->
                    <input type="checkbox" class="toggler" id="burger__icon">
                    <label id="burger" for="burger__icon">
                        <div class="burger-line"></div>
                        <div class="burger-line"></div>
                        <div class="burger-line"></div>
                    </label>

                    <!-- Burger Menu -->
                    <nav id="nav__menu">
                        <div class="query">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'header-menu',
                                    'container_class' => 'header__menu'
                                )
                            );
                            ?>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </header>

    <?php
    //Start Site wrapper
    ?>

    <main>