<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
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

<h1>Категории</h1>
<table>
    <thead>
    <tr>
        <td>№</td>
        <td>Name</td>
        <td>Price</td>
        <td>Article</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($product as $prod): ?>
        <tr>
            <td><?=$prod['id']?></td>
            <td><?=$prod['name']?></td>
            <td><?=$prod['price']?></td>
            <td><?=$prod['article']?></td>
            <td><a href="admin/index.php?id=<?=$prod['id']?>">Информация о поступлении</a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
<p></p>
<a href="admin/create.php"><button>Добавить</button></a>
</table>
</body>
</html>