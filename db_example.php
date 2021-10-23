<?php

$connector = mysqli_connect('127.0.0.1:3306', 'root', null, 'store');
//var_dump($connector);
$result = mysqli_query($connector, 'SELECT * FROM products');
var_dump(mysqli_fetch_all($result, MYSQLI_ASSOC));
mysqli_close($connector);