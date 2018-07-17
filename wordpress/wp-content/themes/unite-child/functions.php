<?php

/**
 * Custom PostType under
 */

// enabled custom post type
function create_films_post_type()
{
    register_post_type('films',
        [
            'show_in_nav_menus' => true,
            'labels' => [
                'name' => __('Films'),
                'singular_name' => __('Film')
            ],
            'public' => true,
            'hierarchical' => true,
            'has_archive' => true,
            'supports' => [
                'thumbnail',
                'title',
                'editor'
            ],
            'taxonomies' => [
                'genre',
                'country',
                'years',
                'actors'
            ]
        ]
    );
}
add_action('init', 'create_films_post_type');

//add_rewrite_rule("^films/([^/]+)",'index.php?post_type=$matches[2]&taxonomy=$matches[1]','top');

// rewrites custom post type name
global $wp_rewrite;
$projects_structure = '/films/%films%/';
$wp_rewrite->add_rewrite_tag("%films%", '([^/]+)', "films=");
$wp_rewrite->add_permastruct('films', $projects_structure, false);


/**
 * Custom Taxonomies under
 */

function create_genre_tax()
{
    register_taxonomy(
        'genre', 'films',
        ['label' => __('Genre'), 'rewrite' => ['slug' => 'genre']]
    );
}

add_action('init', 'create_genre_tax');

function create_year_tax()
{
    register_taxonomy(
        'year', 'films',
        ['label' => __('Year'), 'rewrite' => ['slug' => 'year']]
    );
}

add_action('init', 'create_year_tax');

function create_actors_tax()
{
    register_taxonomy(
        'actors', 'films',
        ['label' => __('Actors'), 'rewrite' => ['slug' => 'actors']]
    );
}

add_action('init', 'create_actors_tax');

function create_country_tax()
{
    register_taxonomy(
        'country', 'films',
        ['label' => __('Country'), 'rewrite' => ['slug' => 'country']]
    );
}

add_action('init', 'create_country_tax');
