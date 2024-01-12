<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="./style/bootstrap.min.css" rel="stylesheet">
    <link href="./style/userlogin.css" rel="stylesheet">
</head>
<?php
session_start();
require("../modules/Connection.php");
$con = new Connection();
$err='';
require "../modules/Admin.php";
$admin = new admin($con);
if(isset($_SESSION['username'])){
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $res = $admin->Access_check($_POST);
     if($res){
        header("location:http://localhost/ecommerce_php/dashboard/");
     }
     else{
         $err='sorry you do not have the access to dashboard';
     }
}
?>

<body>
    <div class="container">
        <form method="post" class="m-auto main mt-5">
            <h2 class="text-center ">Admin Login</h2>
            <label class="my-2">username</label>
            <br>
            <input class="form-control" type="text" value="<?php if(isset($_SESSION['username'])) echo $_SESSION['username'] ;  ?>" name="username">
            <br>
            <label class="my-2">Password</label>
            <br>
            <input class="form-control" type="text" value="<?php if(isset($_SESSION['password'])) echo "$_SESSION[password]"; ?>" name="password">
            <div class="err">
                <?php
                 if($err){
                    echo $err;
                 }
                ?>
            </div>
            <div class="d-flex justify-content-evenly mt-4">
                <input type="submit" class=" btn btn-primary button" value="Log in" />
                <a class="text-decoration-none btn btn-outline-dark " style="width: 80px;" href="userlogin.php">User</a>
            </div>
        
            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>