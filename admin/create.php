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
<h1>Добавить товар</h1>
<form action="action/store.php" method="post">
    <input type="hidden" name="id" id="id">
    <p>Название</p>
    <input type="text" name="name" id="name">
    <p>Цена (в рублях)</p>
    <input type="number" name="price" id="price">
    <p>Артикул</p>
    <input type="number" name="article" id="article">
    <input type="submit" name="Отправить" id="btn">
</form>
</body>
</html>