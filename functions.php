<?php

function portfolio_auto_title() {
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "portfolio_auto_title");

function portfolio_load_resources() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("style", get_template_directory_uri() . "/style.css");
    wp_enqueue_style("cinzel-font", "https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap");
    wp_enqueue_style("arizonia-font", "https://fonts.googleapis.com/css2?family=Arizonia&display=swap");
    wp_enqueue_style("montserrat-font", "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap");

    wp_enqueue_script("script", get_template_directory_uri() . "/script.js");
}
add_action("wp_enqueue_scripts", "portfolio_load_resources");

function portfolio_disable_gutenberg() {
    remove_post_type_support("page", "editor");
    remove_post_type_support("post", "editor");
}
add_action("init", "portfolio_disable_gutenberg");

function portfolio_register_menus() {
    register_nav_menus(array(
        "main-menu" => "Main menu Location"
    ));
}
add_action("init", "portfolio_register_menus");


