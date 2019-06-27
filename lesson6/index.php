<?php

include 'engine/autoload.php';
autoload('config');

if ($_GET['page'] === 'calc')
    include ENGINE_DIR . 'lesson7-calc.php';
if ($_GET['page'] === 'goods')
    include ENGINE_DIR . 'lesson7-goods.php';
if ($_GET['page'] === 'product')
    include ENGINE_DIR . 'lesson7-product.php';
if ($_GET['page'] === 'feedback')
    include ENGINE_DIR . 'lesson7-feedback.php';


include PUBLIC_DIR . 'header.php';
if ($_GET['page'] === 'calc')
    include TEMPLATES_DIR . 'lesson7-calc.php';
if ($_GET['page'] === 'goods')
    include TEMPLATES_DIR . 'lesson7-goods.php';
if ($_GET['page'] === 'product')
    include TEMPLATES_DIR . 'lesson7-product.php';
if ($_GET['page'] === 'feedback')
    include TEMPLATES_DIR . 'lesson7-feedback.php';

include PUBLIC_DIR . 'footer.php';
