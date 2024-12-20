<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id= $_POST['id'];
$name= $_POST['name'];
$price= $_POST['price'];
$article=$_POST['article'];
$articles = $pdo->query("UPDATE product SET name='$name', price='$price', article='$article' WHERE id=" . $id);
header('Location: /products');