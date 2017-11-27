<?php

add_action('init', function(){
    // Event post type
    register_post_type('event', [
        'public' => true, 'labels' => ['name' => 'Events', 'add_new_item' => 'Add New Event', 'edit_item' => 'Edit 
        Event', 'all_items' => 'All Events', 'singular_name' => 'Event'], 'menu_icon' => 'dashicons-calendar-alt', 'has_archive' => true,
        'rewrite' => ['slug' => 'events'], 'supports' => ['title', 'editor', 'excerpt']
    ]);

    // Program post type
    register_post_type('program', [
        'public' => true, 'labels' => ['name' => 'Programs', 'add_new_item' => 'Add New Program', 'edit_item' => 'Edit 
        Program', 'all_items' => 'All Programs', 'singular_name' => 'Program'], 'menu_icon' => 'dashicons-awards',
        'has_archive' => true,
        'rewrite' => ['slug' => 'programs'], 'supports' => ['title', 'editor']
    ]);

    // Professor post type
    register_post_type('professor', [
        'public' => true, 'labels' => ['name' => 'Professors', 'add_new_item' => 'Add New Professor', 'edit_item' => 'Edit 
        Professor', 'all_items' => 'All Professors', 'singular_name' => 'Professors'], 'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => ['title', 'editor', 'thumbnail']
    ]);


});