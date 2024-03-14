<?php

function register_movie_meta_fields() {

    register_meta('post', 'movie_rating', array(
        'object_subtype' => 'movie',
        'show_in_rest' => true,
        'type' => 'string',
        'single' => true,
        'sanitize_callback' => 'wp_strip_all_tags',
    ));

    register_meta('post', 'movie_release_year', array(
        'object_subtype' => 'movie',
        'show_in_rest' => true,
        'type' => 'string',
        'single' => true,
        'sanitize_callback' => 'wp_strip_all_tags',
    ));

    register_meta('post', 'movie_director', array(
        'object_subtype' => 'movie',
        'show_in_rest' => true,
        'type' => 'string',
        'single' => true,
        'sanitize_callback' => 'wp_strip_all_tags',
    ));

    register_meta('post', 'movie_poster_url', array(
        'object_subtype' => 'movie',
        'show_in_rest' => true,
        'type' => 'string',
        'single' => true,
        'sanitize_callback' => 'wp_strip_all_tags',
    ));
}

add_action('init', 'register_movie_meta_fields', 0);
