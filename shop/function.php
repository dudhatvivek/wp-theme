<?php

/*
========================================
FURNIHOME THEME
========================================
*/


// ======================================
// LOAD CSS & JAVASCRIPT
// ======================================

function furnihome_files() {


    // ==============================
    // MAIN CSS
    // ==============================

    wp_enqueue_style(
        'furnihome-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );


    // ==============================
    // MAIN JAVASCRIPT
    // ==============================

    wp_enqueue_script(
        'furnihome-script',

        get_template_directory_uri()
        . '/script.js',

        array(),

        '1.0.0',

        true
    );

}


// WordPress hook

add_action(
    'wp_enqueue_scripts',
    'furnihome_files'
);



// ======================================
// THEME SUPPORT
// ======================================

function furnihome_theme_setup() {


    // Dynamic page title

    add_theme_support(
        'title-tag'
    );


    // Featured images

    add_theme_support(
        'post-thumbnails'
    );


    // HTML5 support

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        )
    );


    // Custom logo

    add_theme_support(
        'custom-logo'
    );

}


// WordPress hook

add_action(
    'after_setup_theme',
    'furnihome_theme_setup'
);



// ======================================
// MENU
// ======================================

function furnihome_register_menu() {


    register_nav_menus(
        array(

            'primary-menu' =>
            'Primary Menu'

        )
    );

}


add_action(
    'init',
    'furnihome_register_menu'
);