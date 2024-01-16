<?php
 spl_autoload_register(function($class){
    require '../modules/'.$class.=".php";
 });
class user  
{
    protected $order;
    protected $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
        $this -> order=new order($this->conn);
    }
    public function add_user($username, $Email, $password, $phone_number, $address)
    {
        try {
            $query = "INSERT INTO `user`( `name`, `password`, `email`, `phone`, `address`) VALUES ('$username','$Email','$password','$phone_number','$address')";
            $this->conn->query($query);
            return header("Location: userAccount.php");
        } catch (Exception $e) {
            echo "this email or phone is already used";
            // echo $e;
        }
    }
    public function get_user($post)
    {
        $email = $post["email"];
        $password = $post["password"];
        $query = "SELECT COUNT(*) FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
        $result = $this->conn->query($query);
        $count = $result->fetch_all(MYSQLI_NUM);
        // print_r ($count[0][0]) ;
        if ($count[0][0] != 0) {
            if (isset($post["rem"])) {
                setcookie("email", $email, time() + 60);
                // setcookie("pass", $password, time() + 60);
            }
            session_start();
            $_SESSION["email"] = $email;
            return header("Location: userAccount.php");
        } else {
            return "the email or password is not correct please try again";
        }
    }
    public function get_users($email=0)

    {
        if($email){
        $query = "SELECT `user_id` FROM `user` WHERE `email`='$email'";
        $data =$this -> conn ->conn-> query($query) -> fetch_all(MYSQLI_ASSOC);
        return $data;
        }
        $query = "SELECT * FROM `user` ";
        $data = $this->conn->conn->query($query)->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
    public function Customers_data($data){
        $Cdata = [];
        foreach ($data as $key => $user) {
            $name=$user['name'];
            $email =$user['email'];
            $orders =count($this ->order-> GetTotalOrders((int)$user['user_id']));
            $products = count($this->order->GetTotalProducts((int)$user['user_id']));
            $spent = $this->order->GetTotalSpend((int)$user['user_id']);
            $Cdata[]=['name'=>$name,'email'=>$email,'orders'=>$orders,'products'=>$products,'spent'=>$spent];
        }
        return $Cdata;
    }
    public function RecentUsers(){
        $query = "SELECT * FROM `user` ORDER BY `created_at` DESC";
        $data = $this->conn->conn->query($query)->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
    public function MostSpent(){
    $data=$this->Customers_data($this->get_users());
    usort($data,function($a,$b){
        return $a['spent']<$b['spent'];
    });
return $data;
} 
public function MostOrders(){
    $data=$this->Customers_data($this->get_users());
    usort($data,function( $a,$b){
        return  $a['orders']<$b['orders'];
    });
return $data;
} 
}
 
 