<?php
require_once( __DIR__ . '/widgets/custom_html.php');
function site_files()
{
    wp_enqueue_style('main-style', get_theme_file_uri("/css/main.min.css"));
    wp_enqueue_script('main-js', get_theme_file_uri('/js/scripts.min.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'site_files');

function site_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'site_features');

function custom_sidebars() {
    unregister_widget('WP_Widget_Custom_HTML'); // Удаляем встроенный виджет
    register_widget( 'custom_html' ); // подключаем пользовательский виджет без контейнера
    register_sidebar(
        array(
            'id' => 'top_line_column_1', // уникальный id
            'name' => 'Верхняя линия 1-я колонка', // название сайдбара
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
            'before_widget' => '', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'id' => 'top_line_column_2',
            'name' => 'Верхняя линия 2-я колонка',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'id' => 'top_line_column_3',
            'name' => 'Верхняя линия 3-я колонка',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'id' => 'header_logo',
            'name' => 'Логотип в загаловке',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'id' => 'header_column_2',
            'name' => 'Колонтитул 2-я колонка',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'id' => 'header_column_3',
            'name' => 'Колонтитул 3-я колонка',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'id' => 'footer_column_1',
            'name' => 'Подвал 1-я колонка',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'id' => 'footer_logo',
            'name' => 'Логотип в подвале',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'id' => 'bottom_line_column_1',
            'name' => 'Нижняя линия 1-я колонка',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'id' => 'bottom_line_column_2',
            'name' => 'Нижняя линия 2-я колонка',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'id' => 'bottom_line_column_3',
            'name' => 'Нижняя линия 3-я колонка',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
}

add_action( 'widgets_init', 'custom_sidebars' );

function the_breadcrumb(){

    // получаем номер текущей страницы
    $pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    echo '<ul>';
    // если главная страница сайта
    if( is_front_page() ){

        if( $pageNum > 1 ) {
            echo '<li><a href="' . site_url() . '">Главная</a></li>' ;
        } else {
            echo 'Вы находитесь на главной странице';
        }

    } else { // не главная

        echo '<li><a href="' . site_url() . '">Главная</a></li>' ;


        if( is_single() ){ // записи
            echo '<li>'.get_the_title().'</li>';

        } elseif ( is_page() ){ // страницы WordPress

            echo '<li>'.get_the_title().'</li>';

        } elseif ( is_category() ) {

            echo '<li>';
            single_cat_title();
            echo '</li>';

        } elseif( is_tag() ) {
            echo '<li>';
            single_tag_title();
            echo '</li>';
        } elseif ( is_day() ) { // архивы (по дням)

            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>' ;
            echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li>' ;
            echo '<li>'.get_the_time('d').'</li>';

        } elseif ( is_month() ) { // архивы (по месяцам)

            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>' ;
            echo '<li>'.get_the_time('F').'</li>';
        } elseif ( is_year() ) { // архивы (по годам)
            echo '<li>'.get_the_time('Y').'</li>';

        } elseif ( is_author() ) { // архивы по авторам

            global $author;
            $userdata = get_userdata($author);
            echo 'Опубликовал(а) ' . $userdata->display_name;

        } elseif ( is_404() ) { // если страницы не существует

            echo 'Ошибка 404';

        }

        echo '</ul>';

    }

}

