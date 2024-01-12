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

<body>
    <div class="container">

        <?php
        session_start();
        if (isset($_SESSION["email"])) {
            $title = "MyAccount";
            require('../views/navbar.php');
            // require('../views/topbar.php');
            echo $_SESSION["email"];
        } else {
            header("location: userlogin.php");
        }

        ?>

        <nav class="nav1">
            <div class="navbar">
                <h4 class="navbar-brand navbar-brand1">User Dashboard</h4>
                <ul class="ul">
                    <li><a href="http://localhost/ecommerce_php/dashboard/" class="nav-link">
                            <i class="fa-solid fa-gauge-high"></i>
                            <span class="nav-item">Dashboard</span>
                        </a>
                    </li>
                    <li><a href="#" class="nav-link">
                            <i class="fas fas fa-user"></i>
                            <span class="nav-item">Payment Methods</span>
                        </a>
                    </li>
                    <li><a href="http://localhost/ecommerce_php/views/product" class="nav-link">
                            <i class="fas fa-chart-bar"></i>
                            <span class="nav-item">Products</span>
                        </a>
                    </li>
                    <li><a href="http://localhost/ecommerce_php/dashboard/order" class="nav-link">
                            <i class="fa-solid fa-bag-shopping"></i>
                            <span class="nav-item">Orders</span>
                        </a>
                    </li>
                    <li><a href="#" class="nav-link">
                            <i class="fas fas fa-user"></i>
                            <span class="nav-item">Account</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

    </script>
    <a href="./logout.php">Logout</a>
</body>

</html>