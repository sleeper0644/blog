<?php

/**@var Db $db */

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $fillable = ['title','content','excerpt'];
    $data = load($fillable);

    //validation
    $errors = [];
    if (empty(trim($data['title']))){
        $errors['title'] = 'Title is required';
    }
    if (empty(trim($data['content']))){
        $errors['content'] = 'Content is required';
    }
    if (empty(trim($data['excerpt']))){
        $errors['excerpt'] = 'Excerpt is required';
    }

    if (empty($errors)) {
        $db->query("INSERT INTO posts(`title`,`content`,`excerpt`) VALUES(?,?,?)",
            [$_POST['title'],$_POST['content'],$_POST['excerpt']]);
    }

}
$title = "MY BLOG :: New post";
require VIEWS . "/post-create.tpl.php";

