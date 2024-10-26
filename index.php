<?php

require_once __DIR__ . '/config/db.php';

$title = 'Main';


// CRUD

// c +
// r +
// u +
// d +

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<style>
    tr,
    th {
        background-color: #b8b8b8b8;
        padding: 10px;
    }

    td {
        background-color: #f1f1f1f1;
        padding: 10px;
    }
</style>

<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <tr>

            <pre>
            <?php
            $products = mysqli_query($connect, 'SELECT * FROM `products`');
            $products = mysqli_fetch_all($products);
            // var_dump($products); // вывод

            foreach ($products as $product) {
            ?>

                <tr>
                    <td><?= $product[0] ?></td>
                    <td><?= $product[1] ?></td>
                    <td><?= $product[2] ?></td>
                    <td><?= $product[3] ?></td>
                    <td><a href="/crud/update.php?id=<?= $product[0] ?>">Update</a></td>
                    <td><a href="/crud/controller/delete.php?id=<?= $product[0] ?>">Delete</a></td>
                </tr>

                <?php
            }
                ?>
            </pre>

            
        </tr>
    </table>
    <br><br>
            <a href="/crud/create.php">Создать</a>
</body>

</html>