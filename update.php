<?php
require_once __DIR__ . '/config/db.php';

$product_id = $_GET['id'];
$products = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
$products = mysqli_fetch_assoc($products);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>

<body>
    <form action="/crud/controller/update.php" method="post">
        <input type="hidden" name="id" value="<?= $product_id ?>">

        <input type="text" name="title" value="<?= $products['title'] ?>" placeholder="title"><br><br>

        <input type="text" name="description" placeholder="description" value="<?= $products['description'] ?>"><br><br>

        <input type="text" value="<?= $products['price'] ?>" name="price" placeholder="price"><br><br>

        <input type="submit">
    </form>
</body>

</html>