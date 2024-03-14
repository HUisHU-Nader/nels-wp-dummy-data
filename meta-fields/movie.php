<?php

// add cmb2 box
add_action('cmb2_init', 'movie_meta_boxes');
function movie_meta_boxes() {

    $prefix = 'movie_';

    $cmb = new_cmb2_box(array(
        'id' => $prefix . 'metabox',
        'title' => __('Movie Details', 'cmb2'),
        'object_types' => array('movie'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $cmb->add_field(array(
        'name' => 'Rating',
        'id' => $prefix . 'rating',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => 'Release Year',
        'id' => $prefix . 'release_year',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => 'Director',
        'id' => $prefix . 'director',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => 'Poster Image',
        'id' => $prefix . 'poster_image',
        'type' => 'file',
    ));
}
