<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/navbar.css">
    <link href="../views/style/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./style/index.css">
    <title>Account</title>
</head>
<?php
// session_start();
require("../modules/product.php");
require("../modules/Connection.php");
$conn = new Connection;
$product = new product($conn->conn);
$data = $product->GetallProducts();
?>

<body style="background-color: #eee;">
    <div class="container-fluid p-0">
        <div class="container">

            <?php
            $title = "MyAccount";
            require('../views/navbar.php');
            if (!isset($_SESSION["email"])) {
                header("location: userlogin.php");
            }

            ?>
        </div>
        <div class="container-fluid d-flex justify-content-between">

            <?php
            require("./usersidebar.php");

            ?>
            <div class="m-5 mb-2 bg-light w-100 mainu d-flex flex-column">
                <h2 class="mb-5">Best Deals</h2>
                <div class="d-flex">
                    <div class="card card0 w-100 mx-2">
                        <div class="div1">
                            <img src="<?php echo $data[0]["product_img"] ?>" class="" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data[0]["product_name"] ?></h5>
                            <p class="card-text"><?php echo $data[0]["description"] ?></p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="card card0 w-100 mx-2">
                        <div class="div1">
                            <img src="<?php echo $data[1]["product_img"] ?>" class="" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data[1]["product_name"] ?></h5>
                            <p class="card-text"><?php echo $data[1]["description"] ?></p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">

            <?php
            require("./footer.php")
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

    </script>
    <a href="./logout.php">Logout</a>
</body>

</html>