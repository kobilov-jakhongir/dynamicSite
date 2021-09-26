<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../resources/assets//css/style.css">
    <title>Registration page</title>
</head>

<body>

<div class="container py-3">
    <?php     require_once "../../../includes/modules/basic/header.php";  ?>

    <h3>Страница Регистрации</h3>

    <form class="p-4 m-5 border border-primary" action="../../../controllers/reg.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Логин</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1">
   </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <?php if($_SESSION['err'] != null): ?>
  <div class="text-danger mt-2 p-1 border border-danger ">
      <?php foreach ($_SESSION['err'] as $err): ?>
    <?php echo $err."<br/>" ?>
    <?php endforeach ?>
    </div>
    <?php unset($_SESSION['err']); ?>
    <?php endif ?>
    
    <?php if($_SESSION['reg_complete'] != null): ?>
  <div class="text-success mt-2 p-1 border border-success ">
  Регистрация завершина!
  
    </div>
    <?php unset($_SESSION['reg_complete']); ?>
    <?php endif ?>
  <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
</form>

    <?php    require_once "../../../includes/modules/basic/footer.php";  ?>
    </div>
</body>
</html>