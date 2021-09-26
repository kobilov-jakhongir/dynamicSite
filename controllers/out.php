<?php
setcookie('authorized', null, time()+7200,'/');
setcookie('login', null, time()+7200,'/');
setcookie('id', null, time()+7200,'/');
header('Location: ../resources/pages/user/login.php');


?>