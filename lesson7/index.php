<?php

include 'engine/autoload.php';
autoload('config');

session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header('location:' . $_SERVER['REQUEST_URI']);
    die();
}

if (isset($_GET['page'])) {
    include ENGINE_DIR . htmlspecialchars($_GET['page']) . '.php';
}

include PUBLIC_DIR . 'header.php';

if (isset($_GET['page'])) {
    if (isset($_GET['action'])) {
        include TEMPLATES_DIR . htmlspecialchars($_GET['page']) .
            '/' . htmlspecialchars($_GET['action']) . '.php';
    } else {
        include TEMPLATES_DIR . htmlspecialchars($_GET['page']) . '.php';
    }
}

session_write_close();

include PUBLIC_DIR . 'footer.php';
