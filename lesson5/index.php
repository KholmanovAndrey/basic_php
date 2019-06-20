<?php

// подключение к базе данных
$mysql = mysqli_connect('localhost', 'root', '', 'images');

// получение id из get
if ($_GET['id']) $id = (int)$_GET['id'];

$query = mysqli_query($mysql, "SELECT * FROM images ORDER BY view DESC");

$images = [];
while ($row = mysqli_fetch_assoc($query)) {
    $images[] = $row;
}

mysqli_close($mysql);

//print_r($images);

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

<div class="images">
    <?php

    if ($images) {
        foreach ($images as $image) {
            ?>
            <div class="image">
                <div class="image__box">
                    <a href="image.php?id=<?= $image['id'] ?>" target="_blank" class="image__link">
                        <img src="<?= $image['src'] ?>" alt="<?= $image['name'] ?>" class="image__img">
                    </a>
                </div>
                <div class="image__footer">Просмотры: <?= $image['view'] ?> | Размер файла: <?= $image['size'] ?></div>
            </div>
            <?php
        }
    }

    ?>
</div>

</body>
</html>
