<?php if ($result) : ?>
    <h2><?= $result ?></h2>
    <a href="/">Очистить</a>
<?php else : ?>
    <form action="/" method="get">
        <select name="operation" id="operation">
            <option value="0">Выберите операцию</option>
            <option value="1">Сложение</option>
            <option value="2">Вычетание</option>
            <option value="3">Умножение</option>
            <option value="4">Деление</option>
        </select>
        <input type="text" name="arg1">
        <input type="text" name="arg2">
        <button type="submit">Равно</button>
    </form>
<?php endif; ?>
