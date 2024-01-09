<?php
// require '../modules/Connection.php';
class admin
{
    private $username;
    private $password;
    private $con;
    public function __construct($connn){
         $this -> con = $connn;
    }
    public function Access_check($postdata){
        $data = $this -> con -> conn -> query("SELECT * FROM `admin` ")->fetch_all(MYSQLI_ASSOC); 
        $count =0;
        foreach ($data as $arr => $value1) {
            foreach ($postdata as $key => $value) {
                 if($value == $value1['username']){
                    $count +=1;
                 }
                 if($value == $value1['password']){
                    $count+=1;
                 }
            }
        }
        if($count==2){
            return true;
        }
        return false;
    }
}
 
