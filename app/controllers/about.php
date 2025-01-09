<?php
$title = 'MY BLOG :: ABOUT';


$post = "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci recusandae itaque temporibus architecto, qui sapiente quisquam blanditiis illo praesentium illum, quia eum officia saepe iusto ullam quibusdam, esse aliquam ratione.</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci recusandae itaque temporibus architecto, qui sapiente quisquam blanditiis illo praesentium illum, quia eum officia saepe iusto ullam quibusdam, esse aliquam ratione.</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci recusandae itaque temporibus architecto, qui sapiente quisquam blanditiis illo praesentium illum, quia eum officia saepe iusto ullam quibusdam, esse aliquam ratione.</p>
" ;

$recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();

require  VIEWS . "/about.tpl.php";

