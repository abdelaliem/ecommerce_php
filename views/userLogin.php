<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <h2>Login</h2>
        <form method="post">

            <label for="">Email</label>
            <br>
            <input class="form-control" type="text" name="email">
            <br>
            <label for="">Password</label>
            <br>
            <input class="form-control" type="text" name="password">
            <input type="submit" class="btn btn-outline-primary mt-4" value="Log in" />
        </form>

        <?php
        require("../modules/user.php");
        require("../modules/Connection.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $conn = new Connection;
                $user = new user($conn->conn);
                echo $user->get_user($_POST["email"],$_POST["password"]);
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>