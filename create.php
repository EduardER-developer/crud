<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <h2>Создание нового</h2>

    <form action="/crud/controller/create.php" method="post">
        <input type="text" name="title" placeholder="title"><br><br>
        <input type="text-area" name="description" placeholder="description"><br><br>
        <input type="text" name="price" placeholder="price"><br><br>
        <input type="submit">
    </form>
</body>
</html>