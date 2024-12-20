<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$quantity= $_POST['quantity'];
$product_id= $_POST['product'];
$date= $_POST['date'];
$pdo->query("INSERT INTO receipts( quantity, product_id, date) VALUES ('$quantity', '$product_id', '$date')");
header('Location: /admission/');