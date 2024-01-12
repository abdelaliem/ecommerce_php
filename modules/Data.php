<?php
class Data{
    protected $con ;
    public function __construct($connn){
        $this -> con = $connn;
    }
    public function SetData($product_id,$user_id,$order_quantity){
        $query = "INSERT INTO `data`(`product_id`, `user_id`, `order_quantity`) VALUES ('$product_id','$user_id','$order_quantity')";
        $res =$this -> con-> conn-> query($query);
        return $res;
    }
    public function GetData(){
        $query = "SELECT * FROM `data` ";
        $data = $this -> con-> conn-> query($query)->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
}