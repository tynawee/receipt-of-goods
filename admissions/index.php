<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id = $_GET['id'];
$receipts = $pdo->query('SELECT receipts.*, product.name AS product
FROM receipts
JOIN product ON receipts.product_id = product.id 
WHERE receipts.product_id =' . $id)->fetchAll(PDO::FETCH_ASSOC);
$product = $pdo->query('SELECT * FROM product')->fetchAll(PDO::FETCH_ASSOC);
?>
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
<p></p>
<h1>Поступление</h1>
<table>
    <thead>
    <tr>
        <td>№</td>
        <td>Name</td>
        <td>Products</td>
        <td>Date</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($receipts as $receipt): ?>
        <tr>
            <td><?=$receipt['id']?></td>
            <td><?=$receipt['quantity']?></td>
            <td><?=$receipt['product_id']?></td>
            <td><?=$receipt['date']?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
<p></p>
<a href="/admission/create.php"><button>Добавить</button></a>
</table>
<br>
<a href="/products"><button>Назад</button></a>
<br>
<a href="/index.php"><button>На главную</button></a>
</body>
</html>