<?php

/**
 * @param $dir - директория файлов
 * @return array|bool массив с именами файлов
 */
function myScandir ($dir) {

    $list = scandir($dir, 0);

    // если директории не существует
    if (!$list) return false;

    // удаляем . и ..
    unset($list[0], $list[1]);

    return $list;

}
