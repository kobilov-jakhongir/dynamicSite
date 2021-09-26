<?php


require_once "db.php";

$name = htmlspecialchars($_POST['name']);
$password = htmlspecialchars($_POST['password']);
$user = find_by_initials($name,$password);

session_start();
unset($_SESSION['err']);
unset($_SESSION['login_complete']);
$_SESSION['err'] = [];
$isError = false;
if(strlen($name)<4){
    $isError = true;
    array_push($_SESSION['err'],'Логин не должен быть короче 4 символов');
}

if(strlen($password)<6){
    $isError = true;
    array_push($_SESSION['err'],'Пароль не должен быть короче 6 символов');
  
 }

if($user->num_rows == 0){
    $isError = true;
    array_push($_SESSION['err'],'Логин или пароль введён не правильно');
}



 if($isError == true){
    header('Location: ../resources/pages/user/login.php');
 }else {
     $_SESSION['login_complete'] = true;
     $user = mysqli_fetch_assoc($user);
     setcookie('authorized', true, time()+7200,'/');
     setcookie('login',$user['name'], time()+7200,'/');
     setcookie('id',$user['id'], time()+7200,'/');
     header('Location: ../resources/pages/user/profile.php');

}
