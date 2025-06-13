<?php

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$dbname = $_ENV['DB_NAME'];

$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
$db = new PDO($connexionString, $user, $password);

// echo "<pre>";
// var_dump($db);
// echo "</pre>";