<?php

require_once "db.php";

function getAllPosts()
{
$posts = select_all_posts();
return $posts;
}

?>