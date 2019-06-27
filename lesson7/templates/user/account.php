<div class="container">
    <div class="account">
        <h1 class="account__title">Личный кабинет пользователя</h1>
        <p class="account__name">Имя пользователя: <?=$user['user_name']?></p>
        <p class="account__login">Логин пользователя: <?=$user['user_name']?></p>
        <a href="/?page=user&action=edit&id=<?=$user['id_user']?>" class="account__link">Редактировать</a>
    </div>
</div>
