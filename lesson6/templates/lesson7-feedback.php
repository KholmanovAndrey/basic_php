<div class="container">
    <div class="feedback">
        <?php foreach($feedback as $commit) : ?>
            <div class="commit">
                <p class="commit__user">Пользователь: <?=$commit['feedback_user']?></p>
                <p class="commit__body"><?=$commit['feedback_body']?></p>
            </div>
        <?php endforeach ?>
    </div>
    <form method="post" class="feedback-form">
        <input class="feedback-form__input" type="text" name="user">
        <textarea class="feedback-form__textarea" name="body" rows="5"></textarea>
        <button type="submit">Отправить</button>
    </form>
</div>