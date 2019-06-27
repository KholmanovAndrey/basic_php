<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="public/css/style.css" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/goods.css" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/feedback.css" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="topbar">
    <div class="container">
        <?php
        if ($_SESSION['isAuth']) : ?>
            <p>Здравствуй, <?=$_SESSION['user_login']?></p>
            <form action="/" method="post" class="topbar__form">
                <input type="hidden" name="logout">
                <a href="/?page=user&action=account" class="topbar__link">Личный кабинет</a>
                <button type="submit" class="topbar__link">Выйти</button>
            </form>
        <?php else : ?>
            <p>Здравствуй, Гость</p>
            <a href="/?page=user&action=login" class="topbar__link">Войти</a>
            <a href="/?page=user&action=signup" class="topbar__link">Зарегистрироваться</a>
        <?php endif ?>
    </div>
</div>
<div class="container">
<?php
print_r($_SESSION);
?>
    <ul class="menu">
        <li><a href="/">Главная</a></li>
        <li><a href="/?page=goods">Продукция</a></li>
        <li><a href="/?page=feedback">Отзывы</a></li>
    </ul>
</div>