<?php

// 1. Создать галерею фотографий. Она должна состоять всего из одной странички,
// на которой пользователь видит все картинки в уменьшенном виде и форму для загрузки нового изображения.
// При клике на фотографию она должна открыться в браузере в новой вкладке.
// Размер картинок можно ограничивать с помощью свойства width.
// При загрузке изображения необходимо делать проверку на тип и размер файла.

// 2. *Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в функцию построения адрес папки
// с изображениями. Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.

// 3. *[ для тех, кто изучал JS-1 ] При клике по миниатюре нужно показывать полноразмерное изображение в модальном окне
// материал в помощь:
// https://www.internet-technologies.ru/articles/sozdaem-prostoe-modalnoe-okno-s-pomoschyu-jquery.html)

include_once 'function.php';

$dir = 'img';
$images = myScandir($dir);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                <a href="img/<?= $image ?>" target="_blank" class="image__link">
                    <img src="img/<?= $image ?>" alt="<?= $image ?>" data-link="img/<?= $image ?>" class="image__img">
                </a>
            </div>
            <?php
        }
    }
    //print_r($images);

    ?>
</div>

<form action="downloads.php" method="post" enctype="multipart/form-data" class="form">
    <input type="file" name="file">
    <input type="submit" value="Загрузить">
</form>

<script src="modal.js"></script>

</body>
</html>