<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">
    <title>My title</title>
    <meta name="description" content="My description">

    <!-- Responsive -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="theme-color" content="#337D5A">

    <link rel="shortcut icon" href="<?= esc_url(get_theme_file_uri('/img/icon.ico')) ?>" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="128x128" href="<?= esc_url(get_theme_file_uri('/img/apple.png')) ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:image:type" content="<?= esc_url(get_theme_file_uri('/img/image.jpg')) ?>">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="500">
    <meta property="og:title" content="My title">
    <meta property="og:description" content="My description">

    <!-- Touch -->
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <?php wp_head(); ?>
</head>

<body class="home">

<header class="top-header">
    <div class="top-header__line">
        <div class="container">
            <div class="row align-items-center">
                <?php if (is_active_sidebar('top_line_column_1')) : ?>
                    <div class="col-lg-4 col-12 d-lg-block d-none">
                        <?php dynamic_sidebar('top_line_column_1'); ?>
                    </div>
                <?php endif; ?>
                <?php if (is_active_sidebar('top_line_column_2')) : ?>
                    <div class="col-lg-4 col-12 d-lg-flex d-none justify-content-center">
                        <?php dynamic_sidebar('top_line_column_2'); ?>
                    </div>
                <?php endif; ?>
                <?php if (is_active_sidebar('top_line_column_3')) : ?>
                    <div class="col-lg-4 col-12">
                        <div class="wrap">
                            <?php dynamic_sidebar('top_line_column_3'); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="top-header__logo">
        <div class="container">
            <div class="row">
                <div class="col-2 d-lg-none">
                    <div class="mobile-menu-button d-lg-none d-block">
                        <img src="<?= esc_url(get_theme_file_uri('/img/menu.svg')); ?>" alt="alt">
                    </div>
                </div>
                <?php if (is_active_sidebar('header_logo')) : ?>
                    <div class="col-xl-4 col-lg-3 col-8 align-self-center">
                        <?php dynamic_sidebar('header_logo'); ?>
                    </div>
                <?php endif; ?>
                <div class="col-xl-8 col-lg-9 col-2 align-self-center">
                    <div class="row">
                        <?php if (is_active_sidebar('header_column_2')) : ?>
                            <div class="col-lg-6 col-12 align-self-center d-lg-block d-none">
                                <div class="wrap">
                                    <?php dynamic_sidebar('header_column_2'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-lg-6 col-12 align-self-center">
                            <div class="wraper">
                                <?php if (is_active_sidebar('header_column_3')) : ?>
                                    <?php dynamic_sidebar('header_column_3'); ?>
                                <?php endif; ?>
                                <a href="#" class="logo_number">
                                    <i class="nut-icon icons-number"></i>
                                    <span class="quantity">0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (is_active_sidebar('top_line_column_2')) : ?>
        <div class="top-header__discount d-lg-none d-flex">
            <?php dynamic_sidebar('top_line_column_2'); ?>
        </div>
    <?php endif; ?>
    <div class="top-header__menu d-lg-flex d-none">
        <div class="container">
            <div class="row">
                <nav class="menu_main menu_top">
                    <div class="mobile-line d-lg-none d-flex"></div>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'headerMenuLocation',
                        'menu_class' => 'menu_main_ul',
                        'container' => false,
                    ]) ?>
                </nav>
            </div>

        </div>
    </div>
</header>