<?php

/** @var yii\web\View $this */

$this->title = 'Тестовое задание';
?>
<div class="container">
    <h3>Тестовое задание на должность "PHP разработчик" <br>
        Для прохождения тестового задания, вам необходимо создать гостевую книгу.</h3>
    <p>Стэк:
        PHP 7+
        MySQL 5.2+</p>
    <p>На выполнение задания отводится 4 дня со следующего дня после после получения ТЗ.
        Основной функционал приложения
        Гостевая книга предоставляет возможность пользователям сайта оставлять сообщения на сайте.
        Все данные введенные пользователем сохраняются в БД MySQL, так же в базе данных
        сохраняются данные о IP пользователя и его браузере.</p>
    <p>Форма добавления записи в гостевую книгу должна иметь следующие поля:</p>

    <ul>
        <li>User Name (цифры и буквы латинского алфавита) – обязательное поле;</li>
        <li>E-mail (формат email) — обязательное поле;</li>
        <li>CAPTCHA (цифры и буквы латинского алфавита) – изображение и обязательное поле (см.
            примечание);</li>
        <li>Text (непосредственно сам текст сообщения, HTML тэги недопустимы) – обязательное
            поле.</li>
        <li>Сообщения должны выводится в виде таблицы, с возможностью сортировки по следующим полям:</li>
    </ul>
    <p> Сообщения должны выводится в виде таблицы, с возможностью сортировки по следующим полям:</p>
    <ul>
        <li>User Name;</li>
        <li>E-mail;</li>
    </ul>
    <p>дата добавления (как в порядке убывания, так и в обратном).
        Сообщения должны разбиваться на страницы по 5 сообщений на каждой.
        Сортировка по умолчанию – LIFO.
        Приветствуется создания простейшего дизайна с использованием CSS.
    </p>

    <h3>Дополнительный функционал</h3>
    <p>Также к базовой функциональности, следует добавить следующие возможности:</p>
    <ul>
        <li>Валидация вводимых данных на стороне сервера и клиента;</li>
        <li>Добавление визуальных эффектов так же приветствуется.</li>
    </ul>
    <h3>Примечание</h3>
    <p>Перед выполнением задания, обратите внимание на то, что:</p>
    <ul>
        <li>
            Можно пользоваться любым PHP-фреймворком, или можно не пользоваться;
        </li>
        <li>
            Можно пользоваться любыми JS библиотеками, или можно не пользоваться;
        </li>
        <li>
            Написать и приложить инструкцию по развертке приложения;

        </li>
        <li>
            Приветствуется сдача задания через GIT-репозиторий;

        </li>
    </ul>
    <p>Не забудьте приложить дамп базы данных, с которой работали во время выполнения
        задания;</p>
    <p>
        Если возникнут проблемы с созданием своей CAPTCHA, то поле можно пропустить, но
        если вы его сделаете, то это будет несомненным плюсом.
    </p>
</div>