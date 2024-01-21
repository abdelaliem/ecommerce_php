<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CartDetails</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <style>
    .rating {
      display: inline-block;
      unicode-bidi: bidi-override;
      direction: rtl;
    }

    .rating input {
      display: none;
    }

    .rating label {
      position: relative;
      display: inline-block;
      padding: 5px;
      cursor: pointer;
    }

    .rating label:before {
      content: '\2605';
      font-size: 2em;
      color: #ccc;
    }

    .rating input:checked~label:before,
    .rating label:hover~label:before {
      color: #fdd835;
    }
  </style>
</head>

<body>
  <?php
  require './navbar.php';
  echo "<br>";
  ?>
  <div class="container">
    <div class="row">
      <?php
      $con = new Connection();
      $productobj = new product($con);
      $productId = isset($_GET['id']) ? $_GET['id'] : 0;
      $productDetails = $productobj->GetProducts($productId);
      $table = new Data($con);
      $tabledata = $table->GetData();
    $res = 1;
    foreach ($tabledata as $key => $row) {
      if ($row['product_id'] == $productId) {
        $res = 0;
        break;
      }
    }
      if (!empty($productDetails)) {
        foreach ($productDetails as $product) {
      ?>

          <div class="col-md-6 ">
            <div>
              <img src="<?php echo $product['product_img']; ?>" class="card-img-top" alt="Product Image" style="width: 95%; max-height: 430px;">
            </div>
            <br>

            <div class="col-md-9 mb-4">
              <div class="row">
                <div class="col-md-3 mb-3">
                  <img src="<?php echo $product['product_img']; ?>" class="img-fluid" alt="Product Image" style="max-width: 100%; max-height: 200px;">
                </div>

                <div class="col-md-3 mb-3">
                  <img src="<?php echo $product['product_img']; ?>" class="img-fluid" alt="Product Image" style="max-width: 100%; max-height: 200px;">
                </div>

                <div class="col-md-3 mb-3">
                  <img src="<?php echo $product['product_img']; ?>" class="img-fluid" alt="Product Image" style="max-width: 100%; max-height: 200px;">
                </div>

                <div class="col-md-3 mb-3">
                  <img src="<?php echo $product['product_img']; ?>" class="img-fluid" alt="Product Image" style="max-width: 100%; max-height: 200px;">
                </div>
              </div>
              <br>
            </div>
          </div>

          <div class="col-md-6">
            <!-- <h5>Product ID: <?php echo $product['product_id']; ?></h5> -->
            <h3><?php echo $product['product_name']; ?></h3>
            <div class="row">
              <!-- <div class="col-md-8 mt-3">
                <form action="submit_review.php" style="margin-top: -25px; max-width: 300px; width: 80%;" method="post">
                  <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5"><label for="star5" style="font-size: 12px;"></label>
                    <input type="radio" id="star4" name="rating" value="4"><label for="star4" style="font-size: 12px;"></label>
                    <input type="radio" id="star3" name="rating" value="3"><label for="star3" style="font-size: 12px;"></label>
                    <input type="radio" id="star2" name="rating" value="2"><label for="star2" style="font-size: 12px;"></label>
                    <input type="radio" id="star1" name="rating" value="1"><label for="star1" style="font-size: 12px;"></label>
                  </div>
                </form>
              </div>

              <div class="col-md-4 mt-2">
                <p>(102 Reviews)</p>
              </div> -->
            </div>
            <p class="mt-5" style="color: #d9b91b ; font-weight:bold ;font-size:28px">$<?php
                                        $formatted_price = number_format($product['price'], 2, '.', ',');
                                        echo $formatted_price;
                                        ?> </p>
            <p style="font-size: 19px; font-weight: 500;"><?php echo $product['description']; ?></p><br>
            <h3 style="color: #6c3709;">Available Option</h3><br>
            <form method='post' action="http://localhost/ecommerce_php/views/cart.php/?id=<?php echo $productId ?>">
            <div class="row" style="width:120%;">
              <div class="col-md-2 mt-2">
                <h5>Quantity:</h5>
              </div>
              <?php
              if ($res) {
                echo "
              <div class=' col-md-2 d-flex align-items-center justify-content-between rounded border p-2' style='max-height:44px;'>
                <button class='btn' id='MinusButton' type='button' style='color: black; font-size: x-large;''>&minus;</button>
                <input type='text' id='count' value=1 name='quantity' class='quantity-input fs-4 w-25 text-center border-0' style='color: black;'>
                <button class='btn' id='PlusButton' type='button' style='color: black; font-size: x-large;'>+</button>
              </div>";

              if (empty($_SESSION['email'])) {
                $name = 'del';
                echo "<div class='col-md-2'>
                <button class='btn btn-dark p-2' type='button' style='width: 150%; max-height: 50px;' data-bs-toggle='modal' data-bs-target='#$name'>
                  Add To Cart
                </button>
              </div>
        <div class='modal fade' id=$name tabindex='-1'   aria-labelledby=$name aria-hidden='true'>
          <div class='modal-dialog' >
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id=$name>Alert</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'>
                </button>
              </div>
              <div class='modal-body'>
                you have to log in first.
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
                <a type='button' href='http://localhost/ecommerce_php/views/userLogin.php' class='btn btn-primary'>Log in</a>
              </div>
            </div>
          </div>
        </div> ";
              } else {
                echo "<div class='col-md-2'>
                <button class='btn btn-dark p-2' type='submit' style='width: 150%; max-height: 50px;'>
                  Add To Cart
                </button>
              </div>";}
              }
              else {
                echo "<div class='col-md-2'>
                <a class='btn btn-dark p-2'  style='width: 150%; max-height: 50px;' href='http://localhost/ecommerce_php/views/delcart.php/?id=$productId'>
                  remove from cart
                </a>
              </div>";
              }
              ?>

              <div class="col-md-3 d-flex align-items-center ">
                <button class="btn btn-dark" style="margin-left: 80px;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                  </svg>
                </button>
              </div>
            </div>
            </form>
            <br> <br>
            <p><b>Category:</b> <?php echo $product['category_id']; ?></p>
            <p><b>Availabilty:</b> <?php echo $product['quantity']; ?> products in stock</p>
          </div>

      <?php
        }
      } else {
        echo "<p>No products found.</p>";
      }
      ?>
    </div>
  </div>
</body>

</html>




<script>
  const PlusButton = document.getElementById("PlusButton");
  const countSpan = document.getElementById("count");
  const MinusButton = document.getElementById("MinusButton");
  let count = 1;

  PlusButton.addEventListener("click", () => {
    count++;
    countSpan.value = count;
  });
  MinusButton.addEventListener("click", () => {
    if (count - 1 == 0) {
      count = 1;
      countSpan.value = count;
    } else {
      count--;
      countSpan.value = count;
    }
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

</script>

</body>

</html>