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
<form action="action/store_rec.php" method="post">
    <input type="hidden" name="id" id="id">
    <p>Дата</p>
    <input type="date" name="date" id="date">
    <p>Количество</p>
    <input type="number" name="quantity" id="quantity">
    <input type="submit" name="Отправить" id="btn">
</form>
</body>
</html>