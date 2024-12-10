<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id = $_GET['id'];
$receipts = $pdo->query("SELECT receipts.*, product.name AS product
FROM receipts
JOIN product ON receipts.product_id = product.id WHERE receipts.id =" . $id)
    ->fetch(PDO::FETCH_ASSOC);

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
<h1>Поступление</h1>
<table>
    <thead>
    <tr>
        <td>№</td>
        <td>Товар</td>
        <td>Дата</td>
        <td>Количество</td>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$receipts['id']?></td>
            <td><?=$receipts['product']?></td>
            <td><?=$receipts['date']?></td>
            <td><?=$receipts['quantity']?></td>
        </tr>
    </tbody>
</table>
<a href="create_rec.php"><button>Добавить</button></a>
</body>
</html>