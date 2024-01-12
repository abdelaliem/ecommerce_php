<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="style/main.css" rel="stylesheet">
</head>

<body>
    <div class="" style="background-color: #FBEBB5;">
        <?php
        require('navbar.php');
        ?>
        <div class="container d-flex align-items-center justify-content-between">
            <div>
                <h1 style="font-size:60px">Rocket single seater</h1>
                <a href="products.php" class="btn0">Shop Now</a>
            </div>
            <div>
                <img src="../img/Rocket single seater 1.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid " style="background-color: #FAF4F4;">
        <div class="container d-flex justify-content-center p-5">

            <div class="one p-5">
                <img src="../img/Granite square side table 1.png" alt="" />
                <h3 class="fw-bold">Side table</h3>
                <a class="btn0" href="products.php">View More</a>
            </div>
            <div class="two p-5">
                <img src="../img/Cloud sofa three seater + ottoman_3 1.png" alt="" />
                <h3 class="fw-bold">Side table</h3>
                <a class="btn0" href="products.php">View More</a>
            </div>
        </div>
    </div>
    <br />
    <div class="container">
        <center>
            <h1>Top Picks For You</h1>
            <br />
            <h5 style="opacity: 50%">
                Find a bright ideal to suit your taste with our great selection of
                suspension, floor and table lights.
            </h5>
        </center>
        <br />
        <div class="container d-flex row-cols-4 align-items-center">
            <section class="first p-3">
                <div class="row">
                    <img src="../img/Trenton modular sofa_3 1.png" alt="" class="w-" />
                </div>
                <br />
                <div class="row">
                    <p class="pe-5">Trenton modular sofa_3</p>
                    <br />
                    <h5>Rs. 25,000.00</h5>
                </div>
            </section>

            <section class="second p-3">
                <div class="row">
                    <img src="../img/Granite dining table with dining chair 1.png" alt="" />
                </div>
                <br />
                <div class="row">
                    <p class="pe-5">Granite dining table with dining chair</p>

                    <br />

                    <h5>Rs. 25,000.00</h5>
                </div>
            </section>

            <section class="third p-3">
                <div class="row">
                    <img src="../img/Outdoor bar table and stool 1.png" alt="" />
                </div>
                <br />
                <div class="row">
                    <p class="pe-5">Outdoor bar table and stool</p>

                    <h5>Rs. 25,000.00</h5>
                </div>
            </section>

            <section class="fourth p-3">
                <div class="row">
                    <img src="../img/Plain console with teak mirror 1.png" alt="" />
                </div>
                <br />
                <div class="row">
                    <p class="pe-5">Plain console with teak mirror</p>

                    <h5>Rs. 25,000.00</h5>
                </div>
            </section>
        </div>
        <br />
        <br />
        <center class="m-3">
            <a class="btn0" href="products.php">View More!</a>
        </center>
    </div>
    <div class="row row-cols-3 m-0 py-5 mt-5" style="background-color: rgba(250, 244, 244, 1);">
        <div class="col p-5">
            <h1>Free Delivery</h1>
            <p class="text-muted">For all oders over $50, consectetur adipim scing elit</p>
        </div>
        <div class="col p-5">
            <h1>90 Days Return</h1>
            <p class="text-muted">If goods have problems, consectetur adipim scing elit</p>
        </div>
        <div class="col p-5">
            <h1>Secure Payment</h1>
            <p class="text-muted">100% secure payment, consectetur adipim scing elit</p>
        </div>
    </div>
    <footer class="row row-cols-4 p-5 mt-2 w-100">
        <div class="col ">
            <p class="text-muted  mt-5">400 University Drive Suite 200 Coral <br>Gables, <br>FL 33134 USA
            </p>
        </div>

        <div class="col">
            <h5 class="pt-3 pb-3">Links</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2 pt-3 pb-3"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2 pt-3 pb-3"><a href="#" class="nav-link p-0 text-muted">Shop</a></li>
                <li class="nav-item mb-2 pt-3 pb-3"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                <li class="nav-item mb-2 pt-3 pb-3"><a href="#" class="nav-link p-0 text-muted">Content</a></li>
            </ul>
        </div>

        <div class="col">
            <h5 class="pt-3 pb-3">Help</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2 pt-3 pb-3"><a href="#" class="nav-link p-0 text-muted">Payment Options</a></li>
                <li class="nav-item mb-2 pt-3 pb-3"><a href="#" class="nav-link p-0 text-muted">Returns</a></li>
                <li class="nav-item mb-2 pt-3 pb-3"><a href="#" class="nav-link p-0 text-muted">Privacy Policies</a></li>
            </ul>
        </div>

        <div class="col">
            <h5 class="pt-3 pb-5">Newsletter</h5>
            <input type="email" placeholder="Enter Your Email Address" class="form-control w-75 border-bottom">
            <input type="button" value="SUBSCRIBE" class="btn border-bottom">
        </div>

        <div class="border-top col-12 mt-4 pe-5">
            <p class="mt-5 text-muted">2022 Meubel House. All rights reverved</p>
        </div>
    </footer>
    </div>
</body>

</html>