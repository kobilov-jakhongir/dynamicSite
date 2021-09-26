<?php


require_once "db.php";

$name = htmlspecialchars($_POST['name']);
$password = htmlspecialchars($_POST['password']);


session_start();
unset($_SESSION['err']);
unset($_SESSION['reg_complete']);
$_SESSION['err'] = [];
$isError = false;
if(strlen($name)<4){
    $isError = true;
    array_push($_SESSION['err'],'Логин не должен быть короче 4 символов');
}

if(strlen($password)<7){
    $isError = true;
    array_push($_SESSION['err'],'Пароль не должен быть короче 7 символов');
  
 }

 if($isError == true){
    header('Location: ../resources/pages/user/registration.php');
 }else {
     if(add_user($name,$password) == true){
     $_SESSION['reg_complete'] = true;
     setcookie('authorized', true, time()+7200,'/');
     header('Location: ../resources/pages/user/registration.php');
 }
}
?>