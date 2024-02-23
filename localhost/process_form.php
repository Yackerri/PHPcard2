<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST["name"];
    $maiden_name = $_POST["maiden_name"];

    // Сохраняем данные в сессионных переменных
    $_SESSION["user_name"] = $name;
    $_SESSION["maiden_name"] = $maiden_name;

    // Перенаправляем пользователя на страницу 2.php
    header("Location: 2.php");
    exit;
} else {
    // Если форма не отправлена, выводим сообщение об ошибке
    echo "<h2>Ошибка: форма не отправлена.</h2>";
}
?>
