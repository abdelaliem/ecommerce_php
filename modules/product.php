<?php
class product
{
    protected $con ;
    public function __construct(){
        require '../modules/Connection.php';
        $this -> con = new Connection();
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
    public function UpdateProduct($product_id, string $name , $image , $desc , $quantity , $price , $cid){
        $query = "UPDATE `products` SET  `product_name`='$name',`price`='$price',`product_img`='$image',`quantity`='$quantity',`description`='$desc',`category_id`='$cid'  WHERE `product_id` = $product_id";
        $this -> con -> conn -> query($query);
    }
}