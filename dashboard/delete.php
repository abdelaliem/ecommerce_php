<?php
require '../modules/product.php';
$id = $_GET['id'];
$product = new product();
$product -> DeleteProduct($id);
header('location:http://localhost/ecommerce_php/dashboard/');
?>