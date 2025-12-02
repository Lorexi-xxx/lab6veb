<?php
// Перевіряємо, чи форма була відправлена
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Отримуємо дані з форми
    $name = $_POST["name"] ?? "Без імені";
    $email = $_POST["email"] ?? "Без email";
    $q1 = $_POST["q1"] ?? "Немає відповіді";
    $q2 = $_POST["q2"] ?? "Немає відповіді";
    $q3 = $_POST["q3"] ?? "Немає відповіді";

    // Дата і час для імені файлу
    date_default_timezone_set("Europe/Kiev");
    $timestamp = date("Y-m-d_H-i-s");

    // Ім’я файлу
    $filename = "survey/response_" . $timestamp . ".txt";

    // Формуємо текст для запису
    $content = 
"Час відправлення: " . date("Y-m-d H:i:s") . "\n" .
"Ім’я респондента: $name\n" .
"Email: $email\n" .
"1. Улюблений предмет: $q1\n" .
"2. Частота використання інтернету: $q2\n" .
"3. Відгук: $q3\n";

    // Записуємо файл
    file_put_contents($filename, $content);

    // Вивід підтвердження
    echo "<h2>Дякуємо! Форма відправлена.</h2>";
    echo "<p>Дата та час: <b>" . date("Y-m-d H:i:s") . "</b></p>";
    echo "<p>Ваші відповіді збережено у файлі: <b>$filename</b></p>";
} else {
    echo "Помилка: форма не була відправлена.";
}
?>
