<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$name = $_POST['name'];
$price = $_POST['price'];
$article = $_POST['article'];

$pdo->query("INSERT INTO product(name, price, article) VALUES ('$name', '$price', '$article')");

header('Location: /admin/index.php');