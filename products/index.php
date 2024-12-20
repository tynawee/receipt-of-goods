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
<p></p>
<h1>Товары</h1>
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
            <td><a href="/admissions?id=<?=$prod['id']?>"><button id="inf">Информация о поступлении</button></a></td>
            <td class="r"><a href="/products/edit.php?id=<?=$prod['id']?>"><button id="rr">Редактировать</button></a></td>
            <td class="r"><a href="/products/actions/delete.php?id=<?=$prod['id']?>"><button id="delete">Удалить</button></a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
<p></p>
<a href="/products/create.php"><button>Добавить</button></a>
</table>
<br>
<a href="/index.php"><button>На главную</button></a>
</body>
</html>