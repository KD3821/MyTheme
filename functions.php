<?php

add_action('init', 'start_session', 1);

function start_session() {
    if(!session_id()) {
        session_start();
    }
}

add_action('end_session_action', 'end_session');

function end_session() {
    session_destroy();
}

add_action('wp_enqueue_scripts', 'add_scripts_and_styles');

function add_scripts_and_styles() {
    wp_enqueue_script('bs_js', get_template_directory_uri().'/bs/js/bootstrap.min.js');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('bs_js'), null, true);
    wp_enqueue_style('bs_css', get_template_directory_uri().'/bs/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('after_setup_theme', 'add_menu');

function add_menu() {
    register_nav_menu('menu', 'Меню в шапке');
    register_nav_menu('enter', 'Вход и Рег');
    register_nav_menu('exit', 'Каб и Выход');
}


?>