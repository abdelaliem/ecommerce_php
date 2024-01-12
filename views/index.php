<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="style/main.css" rel="stylesheet">
    <style>
        @media (max-width:992px) {
            .ff p {
                font-size: 20px;
            }

            .ff h1 {
                font-size: 50px;
            }

            .rr div {
                text-align: center;
            }
        }
    </style>
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
        <div class=" d-flex row-cols-4 align-items-center">
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

        <div class="m-3 text-center">
            <a class="btn0" href="products.php">View More!</a>
        </div>
    </div>
    <div class="container-fluid" style="background-color: rgba(250, 244, 244, 1);">
        <div class="row ff d-flex justify-content-center w-100" >
            <div class="col-lg-4 p-5">
                <h1>Free Delivery</h1>
                <p class="text-muted " style="font-size: 21px; width:75%">For all oders over $50, consectetur adipim scing elit</p>
            </div>
            <div class="col-lg-4 p-5">
                <h1>90 Days Return</h1>
                <p class="text-muted " style="font-size: 21px; width:75%">If goods have problems, consectetur adipim scing elit</p>
            </div>
            <div class="col-lg-4 p-5">
                <h1>Secure Payment</h1>
                <p class="text-muted" style="font-size: 21px; width:75%">100% secure payment, consectetur adipim scing elit</p>
            </div>
        </div>
    </div>
    <?php
    require("footer.php");
    ?>

    </div>
</body>

</html>