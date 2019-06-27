<div class="container">
    <?php
    //print_r($_SESSION['user']);
    if ($_SESSION['status'] !== '') {
        ?>
        <h3 class="warning"><?=$_SESSION['status']?></h3>
        <?
    }

    ?>
    <form action="/?page=user&action=signup" method="post" class="login">
        <input type="text" name="user_login" placeholder="Введите имя пользователя" class="login__input">
        <input type="password" name="user_password" placeholder="Введите пароль" class="login__input">
        <input type="password" name="user_passwordp" placeholder="Введите повторно пароль" class="login__input">
        <button type="submit" class="login__button">Войти</button>
    </form>
</div>