<?php
require "../modules/product.php";
$product = new product();
if($_SERVER["REQUEST_METHOD"]=="GET"){
    header("content-type:application/json");
    if(count($_GET)!=0){
        $id=$_GET['id'];
        $data = $product -> GetProducts($id);
        $data = json_encode($data);
        echo $data;
    }
    else{
        $data = $product -> GetProducts();
        $data = json_encode($data);
        echo $data;
    }
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $data = json_decode(file_get_contents('php://input'),true);
    $product -> SetProduct($data['name'],$data["img"],$data['desc'],$data['quantity'],$data['price'],$data['cid']);
    echo 'add';
}

if($_SERVER["REQUEST_METHOD"]=="PUT"){
        $id = $_GET['id'];
        $data = json_decode(file_get_contents('php://input'),true);
        $product -> UpdateProduct($id,$data['name'],$data["img"],$data['desc'],$data['quantity'],$data['price'],$data['cid']);
        echo "updated";
}


if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    $id = $_GET['id'];
    $product -> DeleteProduct($id);
    echo "deleted";
}