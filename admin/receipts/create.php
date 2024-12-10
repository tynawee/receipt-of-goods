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
<h1>Добавить поступление</h1>
<form action="action/store.php" method="post">
    <input type="hidden" name="id" id="id">
    <p>Дата</p>
    <input type="date" name="date" id="date">
    <p>Количество</p>
    <input type="number" name="quantity" id="quantity">
    <p></p>
    <select name="product">
        <?php foreach ($product as $prod):?>
        <option value="<?=$prod['id']?>"><?=$prod['name']?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" name="Отправить" id="btn">
</form>
</body>
</html>