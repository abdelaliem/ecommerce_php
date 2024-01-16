<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="./style/bootstrap.min.css" rel="stylesheet">
    <link href="./style/userlogin.css" rel="stylesheet">
</head>
<?php
require("../modules/user.php");
require("../modules/Connection.php");
$err = '';
session_start();
$conn = new Connection;
if(isset($_COOKIE["sessionId"])) {
    $user = new user($conn->conn);
    $check = $user->get_user_session($_COOKIE["sessionId"]);
    if($check){
        header("location: http://localhost/ecommerce_php/views/useraccount.php");
        // echo $_SESSION["email"];
    }else{
        setcookie("sessionId","",time()-1456);
        header("Location: http://localhost/ecommerce_php/views/userlogin.php");
    }
}else if(isset($_SESSION["email"])){
    header("location: http://localhost/ecommerce_php/views/useraccount.php");
}
else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = new user($conn->conn);
        $err = $user->get_user($_POST);
    }
}
?>
<body>
    <div class="container">
        <form method="post" class="m-auto main mt-5">
            <h2 class="text-center ">Login</h2>

            <label class="my-2">Email</label>
            <br>
            <input class="form-control" type="text" name="email">
            <br>
            <label class="my-2">Password</label>
            <br>
            <input class="form-control" type="text" name="password">
            <div class="d-flex align-items-center my-4">
                <input type="submit" class="btn btn-primary mt-4 button" value="Log in" />
                <div>
                    <input type="checkbox" class="form control mt-4 ms-5" name="rem" value="true">
                    <label>Stay loged in</label>
                </div>

            </div>
            <div class="d-flex justify-content-evenly my-4">
                <a class="text-decoration-none btn btn-outline-dark " href="adminLogin.php">Admin</a>
                <a class="text-decoration-none btn btn-outline-dark " href="./userregister.php">Register</a>
            </div>
            <div class="err">
                <?php
                if ($err) {
                    echo $err;
                    $err = "";
                }
                ?>
            </div>
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>