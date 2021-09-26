<?php

require_once "db.php";

$title = htmlspecialchars($_POST['title']);
$text = htmlspecialchars($_POST['post_text']);
$author_id = htmlspecialchars($_POST['author_id']);
$author_name = htmlspecialchars($_POST['author_name']);

if(add_post($title,$text,$author_id,$author_name) == true){
    session_start();
    unset($_SESSION['postadded']);
    $_SESSION['postadded'] = true;
    header('Location: ../resources/pages/user/profile.php');
}

?>