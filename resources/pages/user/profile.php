<?php

session_start();
if ($_COOKIE['authorized'] == true) {
} else {
    header('Location: login.php');
}

$author_id = $_COOKIE['id'];
$author_name = $_COOKIE['login'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/assets//css/style.css">
    <title>Страница профиля</title>
</head>

<body>

    <div class="container py-3">
        <?php
        require_once "../../../includes/modules/basic/header.php";
        ?>

        <?php if ($_SESSION['postadded'] == true) : ?>
            <div class="text-success mt-2 p-1 border border-success ">
                Пост создан! 
            </div>
        <?php endif ?>

        <?php unset($_SESSION['postadded']);  ?>

        <form action="../../../controllers/newpost.php" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Заголовок поста</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="post_text" class="form-label">Текст поста</label>
                <textarea class="form-control" name="post_text" id="post_text" rows="3"></textarea>
            </div>
            <input type="hidden" name="author_id" value="<?php echo $author_id ?>">
            <input type="hidden" name="author_name" value="<?php echo $author_name ?>">
            <button type="submit" class="btn btn-warning">Добавить пост</button>
        </form>

        <?php
        require_once "../../../includes/modules/basic/footer.php";
        ?>
    </div>
</body>

</html>