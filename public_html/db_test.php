<?php
$servername = "localhost";
$username = "vtar4axy_lar";
$password = "9qhH8tjA!FDA";
$dbname = "vtar4axy_lar";

// Создаем подключение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
echo "Подключение к БД успешно";
$conn->close();
