<?php

/**@var Db $db */
$title = 'MY BLOG :: HOME';

$posts = $db->query("SELECT * FROM posts ORDER BY id DESC ")->findAll();
//dd($posts);
$recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();


require VIEWS . "/index.tpl.php";

