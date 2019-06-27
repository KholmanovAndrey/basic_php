<?php

$status = '';

function initUser ($action) {

    $action = htmlspecialchars($_GET['action']);

    return call_user_func('action' . ucfirst($action));

}

function actionLogin () {

    if (isset($_POST['user_login']) &&
        isset($_POST['user_password'])) {

        if ($_POST['user_login'] !== '' &&
            $_POST['user_password'] !== '') {
            $user_login = htmlspecialchars($_POST['user_login']);
            $user_password = $_POST['user_password'];

            $user = findByUserLogin($user_login);
            //echo password_hash('12345', PASSWORD_DEFAULT);


            if ($user) {
                if (password_verify($user_password, $user['user_password'])) {
                    $_SESSION['isAuth'] = true;
                    $_SESSION['user_id'] = $user['id_user'];
                    $_SESSION['user_login'] = $user['user_login'];
                    $_SESSION['status'] = 'Пользователь ' . $user['user_login'] . ' авторизован.';
                    header('location: /?page=user&action=account');
                    return $user;
                }

                $_SESSION['isAuth'] = false;
                $_SESSION['user_id'] = 0;
                $_SESSION['user_login'] = 'Гость';
                $_SESSION['status'] = 'Пароль введен неверно!';
                return false;
            }

            $_SESSION['isAuth'] = false;
            $_SESSION['user_id'] = 0;
            $_SESSION['user_login'] = 'Гость';
            $_SESSION['status'] = 'Логин введен неверно!';
            return false;
        }

        $_SESSION['isAuth'] = false;
        $_SESSION['user_id'] = 0;
        $_SESSION['user_login'] = 'Гость';
        $_SESSION['status'] = 'Поля не заполнены!';
        return false;
    }

    $_SESSION['isAuth'] = false;
    $_SESSION['user_id'] = 0;
    $_SESSION['user_login'] = 'Гость';
    $_SESSION['status'] = '';
    return false;
}


function actionAccount () {

    if ($_SESSION['isAuth']) {
        $user_login = $_SESSION['user_login'];
        return findByUserLogin($user_login);
    } else {
        header('location: /?page=user&action=login');
    }

}

function actionSignup () {

    if (isset($_POST['user_login']) &&
        isset($_POST['user_password']) &&
        isset($_POST['user_passwordp'])) {


        if ($_POST['user_login'] !== '' &&
            $_POST['user_password'] !== '') {

            $user_login = htmlspecialchars($_POST['user_login']);
            $user_password = $_POST['user_password'];
            $user_passwordp = $_POST['user_passwordp'];

            $user = findByUserLogin($user_login);

            if (!$user) {
                if ($user_password == $user_passwordp) {
                    if (signupUser($user_login, $user_password)) {
                        header('location: /?page=user&action=login');
                        return true;
                    }

                    $_SESSION['status'] = 'Пользователь не сохранен!';
                    return false;
                }

                $_SESSION['status'] = 'Пароли в полях не совпадают!';
                return false;
            }

            $_SESSION['status'] = 'Логин занят!';
            return false;
        }

        $_SESSION['status'] = 'Поля не заполнены!';
        return false;
    }

    $_SESSION['status'] = '';
    return false;

}

function actionEdit () {

}

function findByUserLogin ($user_login) {
    $SQL_query = "SELECT * FROM geekbrains.user 
                  WHERE user_login = '$user_login' LIMIT 1;";
    $result = mysqli_query(myDB_connect(), $SQL_query);
    return mysqli_fetch_assoc($result);
}

function signupUser ($user_login, $user_password) {
    $user_password = password_hash($user_password, PASSWORD_DEFAULT);
    $SQL_query = "INSERT INTO geekbrains.user (user_name, user_login, user_password)
                  VALUES ('$user_login', '$user_login', '$user_password');";
    return mysqli_query(myDB_connect(), $SQL_query);
}

if (isset($_GET['action'])) {
    $user = initUser($_GET['action']);
}