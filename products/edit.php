<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id= $_GET['id'];
$product = $pdo->query('SELECT * FROM product WHERE id= ' .$id)->fetch(PDO::FETCH_ASSOC);  ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/products/actions/update.php" method="post">
    <input type="hidden" name="id" value="<?=$product['id'] ?>">
    <p>Название:</p>
    <input name="name" id="name2" type="text" value="<?=$product['name'] ?>">
    <p>Цена:</p>
    <input name="price" type="text" value="<?=$product['price'] ?>">
    <p>Артикул:</p>
    <input name="article" type="text" value="<?=$product['article'] ?>"><br>
    <button id="btn11">Сохранить</button>
</form>
</body>
</html>

