<?php

class user
{
    private $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function add_user($username, $Email, $password, $phone_number, $address)
    {
        $query = "INSERT INTO `user`( `name`, `password`, `email`, `phone`, `address`) VALUES ('$username','$Email','$password','$phone_number','$address')";
        $this->conn->query($query);
    }
    public function get_user($Email, $password)
    {
            $query = "SELECT COUNT(*) FROM `user` WHERE `email` = '$Email' AND `password` = '$password'";
            $result = $this->conn->query($query);
            $count =$result->fetch_all(MYSQLI_NUM);
            // print_r ($count[0][0]) ;
            if($count[0][0]!=0){
                return "login successfuly";
            }else{
                return "a7a the email or password is not correct please try again";
            }
         
    }
}
