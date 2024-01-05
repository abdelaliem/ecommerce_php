<?php
require 'product.php';
class Category extends product 
{
    public $category_name;
    public function GetCategory($id=0){
         if($id!=0){
            $query = "SELECT * FROM `category` WHERE `category_id`=$id";
            $data = $this -> con -> conn -> query($query) -> fetch_all(MYSQLI_ASSOC);
            return $data ; 
         }
        $query = "SELECT * FROM `category` ";
        $data = $this -> con -> conn -> query($query) -> fetch_all(MYSQLI_ASSOC);
        return $data ; 
    }
    
}