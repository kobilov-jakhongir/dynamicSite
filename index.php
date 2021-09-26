<?php

require_once "controllers/postController.php";
$posts = getAllPosts();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="resources/assets//css/style.css">
  <title>Main page</title>
</head>

<body>

  <div class="container py-3">
    <?php require_once "includes/modules/basic/header.php"; ?>
    <div class="d-flex flex-wrap">
      <?php foreach ($posts as $post) : ?>
        <div class="card" style="width: 32%; margin: 5px">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $post['title'] ?></h5>
            <p class="card-text"><?php echo $post['text'] ?></p>
            <h3><?php echo $post['author_name'] ?></h3>
            <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
          </div>
        </div>

      <?php endforeach ?>
      <?php require_once "includes/modules/basic/footer.php";    ?>
    </div>
  </div>
</body>

</html>