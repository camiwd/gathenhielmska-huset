<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('program', [
        'show_in_rest' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups', // change this!
        'labels' => [
            'add_new_item' => __('Add new program'),
            'edit_item' => __('Edit program'),
            'name' => __('Program'),
            'search_items' => __('Search program'),
            'singular_name' => __('Program'),
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
        ],
        'menu_position' => 0,
        'public' => true,
        'template' => [
            ['core/image', [
                'align' => 'center',
            ]],
            ['core/paragraph', [
                'placeholder' => 'Add a your news article here',
            ]],
        ],
        'template_lock' => 'all',
    ]);
});
