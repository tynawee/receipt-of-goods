<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$id= $_GET['id'];
$product = $pdo->query('SELECT * FROM product WHERE id= ' .$id)
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
<form action="action/update.php" method="post">
    <input type="hidden" name="id" value="<?=$product['id'] ?>">
    <input name="name" type="date" value="<?=$product['date'] ?>">
    <input name="name" type="text" value="<?=$product['quantity'] ?>">
    <button>Сохранить</button>
</form>
</body>
</html>