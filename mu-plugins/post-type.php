<?php


function post_types()
{
    //Product Post Type
    register_post_type('product', [
        'supports' => ['title', 'editor'],
        'has_archive' => true,
        'public' => true,
        'labels' => [
            'name' => 'Продукция',
            'add_new_item' => 'Добавить продукт',
            'edit_item' => 'Редактировать продукт',
            'all_items' => 'Вся продукция',
            'singular_name' => 'Продукт'
        ],
        'menu_icon' => 'dashicons-cart'
    ]);
}

add_action('init', 'post_types');

