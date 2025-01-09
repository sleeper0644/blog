<?php

/**@var Db $db */

$id = $_GET['id'] ?? 0;

$post = $db->query("SELECT * FROM posts WHERE id = ? LIMIT 1", [$id] )->findOrFail();
//dd($post);

$title = "MY BLOG :: {$post['title']}";
require VIEWS . "/post.tpl.php";

