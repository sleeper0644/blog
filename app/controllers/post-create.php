<?php

/**@var Db $db */

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $fillable = ['title','content','excerpt'];
    $data = load($fillable);

    //validation
    $errors = [];
    if (empty($data['title'])){
        $errors['title'] = 'Title is required';
    }
    if (empty($data['content'])){
        $errors['content'] = 'Content is required';
    }
    if (empty($data['excerpt'])){
        $errors['excerpt'] = 'Excerpt is required';
    }

    if (empty($errors)) {
        if ($db->query("INSERT INTO posts(`title`,`content`,`excerpt`) VALUES(:title,:content,:excerpt)",$data)){
            echo "Post created";
        } else {
            echo "Database error";
        }

        //redirect('/posts/create');
    }

}
$title = "MY BLOG :: New post";
require VIEWS . "/post-create.tpl.php";

