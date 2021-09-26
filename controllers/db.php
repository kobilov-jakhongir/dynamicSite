<?php
//Обработка ошибок


$configPath = $_SERVER['DOCUMENT_ROOT'];
require_once $configPath."/config.php";



function add_user($name,$password){          

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $sql_query = "INSERT INTO users(name,password)   
            VALUES
                ('$name','$password');";

if($db->query($sql_query)=== TRUE){
    return true;
}else{
   return $db->error;
}

$db->close();

}

function add_post($title,$text, $author_id, $author_name){          

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $sql_query = "INSERT INTO posts( title, text, author_id, author_name)   
            VALUES
                ('$title','$text', $author_id, '$author_name');";

if($db->query($sql_query)=== TRUE){
    return true;
}else{
   return $db->error;
}

$db->close();

}

function select_all_posts(){

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $sql_query = "SELECT * FROM posts";

    $result = $db->query($sql_query);

 
    return $result;
    $db->close();
}


function deletetusk($numb){
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    $sql_query = "DELETE FROM tasks WHERE id = $numb"; 
    $result = $db->query($sql_query);
    header('Location: /');
    $db->close();
    
    return $result;
}


function find_by_initials($name, $password){
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    $sql_query = "SELECT * FROM users WHERE name = '$name' AND password = '$password'"; 
    $result = $db->query($sql_query);
    
    $db->close();
    return $result;
}

function find_one($word){
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    $sql_query = "SELECT * FROM tasks WHERE id = $word"; 
    $result = $db->query($sql_query);
    
    $db->close();
    return $result;
}
?>



