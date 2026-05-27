<?php

$host = 'localhost';
$dbname = 'p91320lx_1';
$username = 'p91320lx_1';
$password = '*V&hRXp0kmqr';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die('Ошибка подключения к базе данных: ' . $e->getMessage());
}