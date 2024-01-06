<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/navbar.css">
    <link href="./views/style/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>navbar</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="fw-bold navbar-brand fs-4">
                        e-commerce
                    </div>
                    <div class=" fw-semibold" id="navbar">
                        <div class="navbar-nav ps-5 ms-5 ">
                            <a class="fs-5 nav-link ms-5" href="./index.php">Home</a>
                            <a class="fs-5 nav-link ms-5" href="./views/products.php">Shop</a>
                            <a class="fs-5 nav-link ms-5" href="./views/about.php">About</a>
                            <a class="fs-5 nav-link ms-5" href="./views/contact.php">Contact</a>
                        </div>
                    </div>
                    <div class="navbar-nav">
                        <a class="nav-link mx-3" href="">
                            <span class="fs-2 material-symbols-outlined">
                                search
                            </span></a>
                        <a class="nav-link mx-3" href="./views/userLogin.php">
                            <span class="fs-2 material-symbols-outlined">
                                person
                            </span></a>
                        <a class="nav-link mx-3" href="#">
                            <span class="fs-2 material-symbols-outlined">
                                shopping_cart
                            </span></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</body>

</html>