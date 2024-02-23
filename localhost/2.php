<?php

session_start();

// Проверяем, установлены ли сессионные переменные
if (isset($_SESSION["user_name"]) && isset($_SESSION["maiden_name"])) {
    $user_name = $_SESSION["user_name"];
    $maiden_name = $_SESSION["maiden_name"];
    
    // Выводим приветствие и идентификатор сессии
    echo "<h2>Добро пожаловать, $user_name!</h2>";
    echo "<p>Ваша девичья фамилия: $maiden_name</p>";
    echo "<p>Идентификатор сессии: " . session_id() . "</p>";
} else {
    // Если сессионные переменные не установлены, выводим сообщение об ошибке
    echo "<h2>Ошибка: данные пользователя не найдены.</h2>";
}
?>
