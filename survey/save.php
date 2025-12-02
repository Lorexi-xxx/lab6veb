<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

date_default_timezone_set('Europe/Kyiv');

$name = isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : '';
$q1 = isset($_POST['q1']) ? htmlspecialchars($_POST['q1'], ENT_QUOTES) : '';
$q2 = isset($_POST['q2']) ? htmlspecialchars($_POST['q2'], ENT_QUOTES) : '';
$q3 = isset($_POST['q3']) ? htmlspecialchars($_POST['q3'], ENT_QUOTES) : '';

$timestamp = date("Y-m-d_H-i-s");
$filename = "answers_$timestamp.txt";

$data =
"Ім'я: $name\n".
"Email: $email\n\n".
"Питання 1: $q1\n".
"Питання 2: $q2\n".
"Питання 3: $q3\n\n".
"Дата та час відправлення: $timestamp\n";

file_put_contents($filename, $data);

echo "Дякуємо! Форма заповнена $timestamp";
?>

