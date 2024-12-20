<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$receipts = $pdo->query('SELECT * FROM receipts')->fetchAll(PDO::FETCH_ASSOC);
$product = $pdo->query('SELECT * FROM product')->fetchAll(PDO::FETCH_ASSOC);  ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel='stylesheet' href='/style.css' />
</head>
<body>
<h1>Добавить запись</h1>
<form action="/admission/actions/store.php" method="post">
    <input type="hidden" name="id" id="id">
    <p>Quantity:</p>
    <input type="text" name="quantity" id="quantity" placeholder="quantity">
    <p>Product:</p>
    <select name="product" id="product" >
        <?php foreach($product as $prod):?>
            <option id="product" value="<?=$prod['id']?>"><?=$prod['name']?></option>
        <?php endforeach; ?>
    </select>
    <p>Date:</p>
    <input type="date" name="date" id="date" placeholder="date"><br>
    <input type="submit" name="Отправить" id="btn2">
</form>
</body>
</html>