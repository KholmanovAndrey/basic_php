<?php

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 1:
            return $arg1 + $arg2;
        case 2:
            return $arg1 - $arg2;
        case 3:
            return $arg1 * $arg2;
        case 4:
            return ($arg2 !== 0) ? $arg1 / $arg2 : 'На 0 делить нельзя';
    }
}

$result = mathOperation((int)$_GET['arg1'], (int)$_GET['arg2'], $_GET['operation']);