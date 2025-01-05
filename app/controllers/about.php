<?php
$title = 'MY BLOG :: ABOUT';


$post = ' <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci recusandae itaque temporibus architecto, qui sapiente quisquam blanditiis illo praesentium illum, quia eum officia saepe iusto ullam quibusdam, esse aliquam ratione.</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci recusandae itaque temporibus architecto, qui sapiente quisquam blanditiis illo praesentium illum, quia eum officia saepe iusto ullam quibusdam, esse aliquam ratione.</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci recusandae itaque temporibus architecto, qui sapiente quisquam blanditiis illo praesentium illum, quia eum officia saepe iusto ullam quibusdam, esse aliquam ratione.</p>
';

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

require  VIEWS . "/about.tpl.php";

