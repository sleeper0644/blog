<?php
$title = 'MY BLOG :: HOME';

$posts = $db->query("SELECT * FROM posts ORDER BY id DESC ")->fetchAll();
$recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->fetchAll();


require VIEWS . "/index.tpl.php";

