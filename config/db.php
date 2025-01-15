<?php

$connect = mysqli_connect('localhost', 'root', '', 'crud');

if (empty($connect)) {
    echo 'Ошибка';
    die();
}
