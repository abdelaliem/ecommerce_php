<?php
class product
{
    protected $con ;
    public function __construct($connn){
        $this -> con = $connn;
    }
    public function GetProducts($id=0){
         if($id!=0){
            $query = "SELECT * FROM `products` WHERE `product_id`=$id";
            $data = $this -> con -> conn -> query($query) -> fetch_all(MYSQLI_ASSOC);
            return $data ; 
         }
        $query = "SELECT * FROM `products`";
        $data = $this -> con -> conn -> query($query) -> fetch_all(MYSQLI_ASSOC);
        return $data ; 
    }
    public function SetProduct( $name,$image,$desc,$quantity,$price,$cid){
        $query2 = "INSERT INTO `products`(  `product_name`, `price`, `product_img`, `quantity`, `description`, `category_id` ) VALUES ( '$name','$price','$image','$quantity','$desc','$cid' )";
        $ex =  $this -> con -> conn -> query($query2);
        
    }
    public function DeleteProduct($product_id){
            $query = "DELETE FROM `products` WHERE `product_id` = $product_id";
            $result = $this -> con -> conn -> query($query);
           
    }
    public function UpdateProduct($product_id, string $name , $image , $desc , $quantity , $price , $cid,$status='available'){
        if($quantity!=0){
        $query = "UPDATE `products` SET  `product_name`='$name',`price`='$price',`product_img`='$image',`quantity`='$quantity',`description`='$desc',`status`='$status',`category_id`='$cid'  WHERE `product_id` = $product_id";
        $this -> con -> conn -> query($query);
}
else{
    $query = "UPDATE `products` SET  `product_name`='$name',`price`='$price',`product_img`='$image',`quantity`='$quantity',`description`='$desc',`status`='not available',`category_id`='$cid'  WHERE `product_id` = $product_id";
    $this -> con -> conn -> query($query);
}
    }
    public function GetProductsByCat($id){
        $query = "SELECT * FROM `products` WHERE `category_id`=$id";
        $data = $this -> con -> conn -> query($query) -> fetch_all(MYSQLI_ASSOC);
        return $data ; 
    }
    public function Get7Products($start,$end){
        $query = "SELECT * FROM `products` limit $start,$end ";
        $data = $this -> con -> conn -> query($query) -> fetch_all(MYSQLI_ASSOC);
        return $data ; 
    }
}
// 1
