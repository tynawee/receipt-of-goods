<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$date = $_POST['date'];
$quantity = $_POST['quantity'];

$pdo->query("INSERT INTO receipts(date, quantity) VALUES ('$date', '$quantity')");

header('Location: /rec.php');