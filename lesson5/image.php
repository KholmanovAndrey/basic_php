<?php

// подключение к базе данных
$mysql = mysqli_connect('localhost', 'root', '', 'images');

// получение id из get
if ($_GET['id']) $id = (int)$_GET['id'];

$query = mysqli_query($mysql, "SELECT * FROM images WHERE id=$id;");

$image = mysqli_fetch_assoc($query);

$image['view']++;

$query = mysqli_query($mysql,"UPDATE images SET view = ".$image['view']." WHERE id = $id;");

mysqli_close($mysql);

//print_r($image);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="image">
    <div class="image__box">
        <img src="img/<?= $image['name'] ?>" alt="<?= $image['name'] ?>" class="image__img">
    </div>
    <div class="image__footer">Просмотры: <?= $image['view'] ?> | Размер файла: <?= $image['size'] ?></div>
</div>

</body>
</html>
