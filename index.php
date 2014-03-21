<?php
include_once 'ShopProduct.php';

$dsn = 'sqlite:D:\xampp\htdocs\php\data\products.db';

$pdo = new PDO($dsn , null, null);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$obj = ShopProduct::getInstance(2, $pdo);

print_r($obj);