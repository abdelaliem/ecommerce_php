<?php
require "../../modules/Connection.php";
$con = new Connection();
require '../../modules/product.php';
$id = $_GET['id'];
$product = new product($con);
$product -> DeleteProduct($id);
header('location:http://localhost/ecommerce_php/dashboard/product/');
?> 