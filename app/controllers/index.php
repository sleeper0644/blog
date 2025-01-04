<?php
$title = 'MY BLOG :: HOME';

require 'func.php';
$posts = [
    1 => [
        'title' => 'Title 1',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'title-1'
    ],
    2 => [
        'title' => 'Title 2',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'title-2'
    ],
    3 => [
        'title' => 'Title 3',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'title-3'
    ]
];

$recent_posts = [
    1 => [
        'title' => 'An item',
        'slug' => lcfirst(str_replace(' ','-','An item'))
    ],
    2 => [
        'title' => 'A second item',
        'slug' => lcfirst(str_replace(' ','-','A second item'))
    ],
    3 => [
        'title' => 'A third item',
        'slug' => lcfirst(str_replace(' ','-','A third item'))
    ],
];

require 'app/views/index.tpl.php';

