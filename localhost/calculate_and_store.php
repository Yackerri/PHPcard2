<?php
// Создаем переменные $a и $b
$a = 5;
$b = 7;

// Находим сумму и произведение чисел
$sum = $a + $b;
$product = $a * $b;

// Создаем или открываем файл для записи
$file = fopen("1.txt", "w");

// Записываем результаты в файл
fwrite($file, "Сумма: " . $sum . PHP_EOL);
fwrite($file, "Произведение: " . $product . PHP_EOL);

// Закрываем файл
fclose($file);

echo "Результаты были записаны в файл 1.txt.";
?>