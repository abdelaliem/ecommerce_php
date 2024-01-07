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
// require("../modules/user.php");
// require("../modules/Connection.php");
// $err = '';
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $conn = new Connection;
//     $user = new user($conn->conn);
//     $err = $user->get_user($_POST["email"], $_POST["password"]);
// }
?>

<body>
    <div class="container">
        <form method="post" class="m-auto main mt-5">
            <h2 class="text-center ">Admin Login</h2>
            <label class="my-2">Email</label>
            <br>
            <input class="form-control" type="text" name="email">
            <br>
            <label class="my-2">Password</label>
            <br>
            <input class="form-control" type="text" name="password">
            <div class="d-flex justify-content-evenly mt-4">
                <input type="submit" class=" btn btn-primary button" value="Log in" />
                <a class="text-decoration-none btn btn-outline-dark " style="width: 80px;" href="userlogin.php">User</a>
            </div>
        
            <div class="err">
                <?php
                // if ($err) {
                //     echo $err;
                // }
                ?>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>