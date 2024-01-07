<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    <?php 
        session_start();
        if(isset($_SESSION["email"])){
            echo $_SESSION["email"];
        }else{
            header("location: userlogin.php");
        }

    ?>
    <a href="./logout.php">Logout</a>
</body>
</html>