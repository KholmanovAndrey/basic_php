<?php

$path = 'img/';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (@copy($_FILES['file']['tmp_name'], $path . $_FILES['file']['name']))
        header("Location: " . $_SERVER['HTTP_REFERER']);

    echo 'Файл не загрузился';

}


