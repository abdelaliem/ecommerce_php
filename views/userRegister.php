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

        <h2>register</h2>
        <form method="post">

            <label for="">Username</label>
            <br>
            <input class="form-control" type="text" name="name">
            <br>
            <label for="">email</label>
            <br>
            <input class="form-control" type="email" name="email">
            <br>
            <label for="">phone</label>
            <br>
            <input class="form-control" type="number" name="phone">
            <br>
            <label for="">password</label>
            <br>
            <input class="form-control" type="text" name="password">
            <br>
            <label for="">address</label>
            <br>
            <input class="form-control" type="text" name="address">
            <input type="submit" class="btn btn-outline-primary mt-4" value="Log in" />
        </form>

        <?php
        require("../modules/FormValidation.php");
        require("../modules/user.php");
        require("../modules/Connection.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $check = new FormValidation($_POST);
            $error = $check->ValidateForm();
            if ($error != []) {
                foreach ($error as $key => $value) {
                    echo "<div class='alert alert-danger' role='alert'>
                    {$value}
                    </div>";
                }
            } else {
                $conn = new Connection;
                $user = new user($conn->conn);
                $user->add_user($_POST["name"], $_POST["password"], $_POST["email"], $_POST["phone"], $_POST["address"]);
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>