<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Cards</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid p-0">
        <?php
        require '../modules/product.php';
        require '../modules/Connection.php';
        require("./navbar.php");
        $title = "Shop";
        require ("topbar.php");

        ?>
        <div class="container mt-5">
            <div class="row row-cols-4 row-cols-lg-4 row-cols-md-2 row-cols-sm-1">
                <?php
                $con = new Connection();
                $productobj = new product($con);

                $products = $productobj->GetAvailableProducts();

                if (!empty($products)) {
                    foreach ($products as $product) {
                ?>
                        <div class="col">
                            <div class="card border-0">
                                <img src="<?php echo $product['product_img']; ?>" class="w-100" alt="Product img">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $product['product_name']; ?>
                                    </h5>
                                    <p class="card-text fw-bold fs-5"> Price:
                                        <?php 
                                        $formatted_price = number_format($product['price'], 2, '.', ',');
                                        echo $formatted_price; 
                                        ?>
                                        <sup>£</sup>
                                    </p>
                                    <a class='btn w-100' style="background-color: #FBEBB5;" href="http://localhost/ecommerce_php/views/product.php/?id=<?php echo $product['product_id'] ?>">
                                        Details
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<p>No products found.</p>";
                }
                ?>
            </div>
        </div>
        <div class="container-fluid" style="background-color: rgba(250, 244, 244, 1);">
        <div class="row ff d-flex justify-content-center w-100 mt-5">
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
            require('./footer.php');
        ?>
    </div>
</body>

</html>