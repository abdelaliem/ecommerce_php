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
    public function get_users()
    {
        $query = "SELECT * FROM `user` ";
        $data = $this->conn->conn->query($query)->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
}
