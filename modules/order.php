<?php
spl_autoload_register(function($class){
   require './'.$class.=".php";
});
 
 
class order extends product 

  {  
 
    public function GetOrders($id=0){
        if($id!=0){
        $query = "SELECT * FROM `order` WHERE `order_id`=$id";
        $data = $this -> con -> conn -> query($query) -> fetch_all(MYSQLI_ASSOC);
        return $data ; 
     }
    $query = "SELECT * FROM `order` ";
    $data = $this -> con -> conn -> query($query) -> fetch_all(MYSQLI_ASSOC);
    return $data ; 
}
   public function SetOrder($user_id,$product_id,$quantity,$price){
         $query = "INSERT INTO `order`(  `user_id`, `product_id`, `quantity`, `price` ) VALUES ('$user_id','$product_id','$quantity','$price')";
         $product_data =$this -> GetProducts($product_id);
         if($product_data[0]['quantity']>=$quantity){
            $this -> con -> conn -> query($query);
            $product_quantity = $product_data[0]['quantity']-$quantity;
            $this -> UpdateProduct($product_id,'hi',$product_data[0]['product_img'],$product_data[0]['description'],$product_quantity,$product_data[0]['price'],$product_data[0]['category_id']);
            return ;
         }
         if($product_data[0]['status']=='not available'){
                return "sorry this product is not available now";
         }
         else{
            return "sorry we only have $product_data[0][quantity] of that product";
         }
    }

    public function UpdateOrder($order_id,$user_id,$product_id,$quantity,$price,$status='not paid'){
        $order_quantity = $this ->GetOrders($order_id)[0]['quantity'];
        if($order_quantity!= $quantity){
         if($order_quantity<$quantity){
            $new_quanity = $quantity - $order_quantity;
            $product_data =$this -> GetProducts($product_id);
         if($product_data[0]['quantity']>=$new_quanity){
            $product_quantity = $product_data[0]['quantity']-$new_quanity;
            $this -> UpdateProduct($product_id,'hi',$product_data[0]['product_img'],$product_data[0]['description'],$product_quantity,$product_data[0]['price'],$product_data[0]['category_id']);
            $query ="UPDATE `order` SET `user_id`='$user_id',`product_id`='$product_id',`quantity`='$quantity',`price`='$price',`status`='$status' WHERE `order_id`=$order_id";
            $this -> con -> conn -> query($query);
            return;
         }
         if($product_data[0]['status']=='not available'){
                return "sorry this product is not available now";
         }
         else{
            return "sorry we don't have this amount of that product";
         }
         }
        if($order_quantity>$quantity){
            $new_quanity = $order_quantity - $quantity;
            $product_data =$this -> GetProducts($product_id);
            $product_quantity = $product_data[0]['quantity']+$new_quanity;
            $this -> UpdateProduct($product_id,'hi',$product_data[0]['product_img'],$product_data[0]['description'],$product_quantity,$product_data[0]['price'],$product_data[0]['category_id']);
            $query ="UPDATE `order` SET `user_id`='$user_id',`product_id`='$product_id',`quantity`='$quantity',`price`='$price',`status`='$status' WHERE `order_id`=$order_id";
            $this -> con -> conn -> query($query);
            return;
         
         
        }
        }
    }

    public function DeleteOrder($order_id){
        $query = "DELETE FROM `order` WHERE `order_id`=$order_id";
        $data =$this -> GetOrders($order_id) ;
        $quantity = $data[0]['quantity'];
        $product_data =$this -> GetProducts($data[0]['product_id']);
        $product_quantity = $product_data[0]['quantity']+$quantity;
        $this -> UpdateProduct($data[0]['product_id'],'hi',$product_data[0]['product_img'],$product_data[0]['description'],$product_quantity,$product_data[0]['price'],$product_data[0]['category_id']);
        $this -> con -> conn -> query($query);
    }
   public function GetTotalOrders($id){
      $query = "SELECT * FROM `order` WHERE `user_id`=$id GROUP BY `created_at`";
      $data = $this -> con -> conn->query($query)->fetch_all(MYSQLI_ASSOC);
      return $data;
   }
   public function GetTotalProducts($id){
      $query = "SELECT `product_id` FROM `order` WHERE `user_id`=$id ";
      $data = $this -> con -> conn -> query($query)->fetch_all(MYSQLI_ASSOC);
      return $data;
   }
   public function GetTotalSpend($id){
      $query = "SELECT `price` FROM `order` WHERE `user_id`=$id ";
      $data = $this -> con -> conn -> query($query)->fetch_all(MYSQLI_ASSOC);
      $count=0;
      foreach ($data as $key => $value) {
          $count+=$value['price'];
      }
      return $count;
   }
}
 
// $con = new Connection();
// $order = new order($con);
// print_r($order->GetTotalOrders(19));

 