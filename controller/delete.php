<?php

require_once '../config/db.php';

$product_id = $_GET['id'];

mysqli_query($connect, "DELETE FROM products WHERE `products`.`id` = $product_id");

header('Location: /crud/index.php');
