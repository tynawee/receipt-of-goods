<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$date = $_POST['date'];
$quantity = $_POST['quantity'];
$product_id = $_POST['product'];

$pdo->query("INSERT INTO receipts(date, quantity, product_id) VALUES ('$date', '$quantity', '$product_id')");

header('Location: /admin/index.php');