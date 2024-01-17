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

            <input class="form-control mt-5 my-4" type="text" name="email" placeholder="E-mail">
            <input class="form-control mb-3" type="text" name="password" placeholder="Password">
            <div class=" flex-column">
                <div>
                    <input type="checkbox" class="form control mt-2 ms-2" style="width:20px;" name="rem" value="true">
                    <label style="font-size: 19px;">Stay loged in</label>
                </div>
                <input type="submit" class="btn btn-primary mt-2 mb-4 button w-100" value="Log in" />
            </div>
            <hr>
            <div class="d-flex justify-content-evenly my-4">
                <a class="text-decoration-none btn btn-outline-dark w-25" href="adminLogin.php">Admin</a>
                <a class="text-decoration-none btn btn-outline-dark w-25" href="./userregister.php">Register</a>
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