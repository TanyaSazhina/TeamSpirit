<?php
// Параметры для подключения
$db_host = "127.0.0.1";
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'teamspirit'; // Имя БД
$db = mysqli_connect($db_host, $db_user, $db_password, $db_base);
if (!$db) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_error() . ', ошибка: ' . mysqli_connect_error();
}
