<?php
session_start();
if($_POST['quantity']){
if(isset($_SESSION['email'])){
spl_autoload_register(function($class){
    require "../modules/".$class.=".php";
});
$email= $_SESSION['email'];
$con = new Connection();
$data = new Data($con);
$user  = new user($con);
$user_data = $user -> get_users($email);
$product_id = $GET['id'];
$user_id=$user_data[0]['user_id'];
$res = $data -> SetData($_GET['id'],$user_id,$_POST['quantity']);
if(!$res){
    $res = 0;
    $_SESSION['res']=$res;
    header("location:http://localhost/ecommerce_php/views/product.php/?id=$product_id");
}
else{
    $res = 1;
    $_SESSION['res']=$res;
    header("location:http://localhost/ecommerce_php/views/products.php/");
}
}
else{
    echo 'sorry you have to log in first';
}
}
print_r($data->GetData());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    <?php require './navbar.php';?>
    <div class='container mt-3'>
        <div class='row'>
<div class='col col-8 '>
    table
</div>
<div class='col '>card</div>
        </div>
    </div>
</body>
</html>