<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./design/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <title>Shop!</title>
  <style>
    .bigger-one-img img {
      background-color: antiquewhite;
    }
  </style>
</head>



<body style="background-color:#eee">
  <?php
  require "./navbar.php";
  // require "./topbar.php";
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $con = new Connection();
    $product = new product($con);
    $data = $product->GetProducts($id);
    $table = new Data($con);
    $tabledata = $table->GetData();
    $res = 1;
    foreach ($tabledata as $key => $row) {
      if ($row['product_id'] == $id) {
        $res = 0;
        break;
      }
    }
  } else {
    $id = 32;
    require "../modules/Connection.php";
    $con = new Connection();
    require "../modules/product.php";
    $product = new product($con);
    $data = $product->GetProducts($id);
  }
  ?>
  <div class="container">
      <form method='post' action="http://localhost/ecommerce_php/views/cart.php/?id=<?php echo $id ?>">
        <div class="row row-cols-lg-2 row-cols-md-1 d-flex justify-content-between m-5">
          <section class="col text-lg-start text-md-center text-sm-center">
            <img src="<?php
            $img = $data[0]['product_img'];
            echo $img;
            ?>"class="mb-lg-0 mb-sm-5" style="width:80%;text-align:center;border-radius:10px; " alt="">
            
          </section>
          <section style="background-color:#FBEBB5;box-shadow: 1px 2px 14px gray;border-radius:10px;padding:20px">
            <h1 class="text-center mb-4"><?php print_r($data[0]['product_name']) ?></h1>
            <p style="font-size: 40px; font-weight:700;margin:0"><?php echo number_format($data[0]['price'], 2, '.', ',') ?> <sup>£</sup><p>
            <br />
            <strong style="opacity: 80%">
              <p>
                <?php echo $data[0]['description'] ?>
              </p>
            </strong>
            <br />
            <br />
            <div class="d-flex mt-4">

              <?php
              if ($res) {
                echo "<div class='d-flex w-25 align-items-center bg-light p-1 justify-content-between rounded' style='border: 1px solid gray; margin-right: 50px;'>
            <button id='MinusButton' class='btn' type='button'>-</button>
            <input id='count' value=1 name='quantity' class='form-control text-center border-0 bg-light' style='width:40%;font-size:18px' >  
            <button id='PlusButton' class='btn' type='button'>+</button>
          </div>";
                // var_dump($_SESSION);
                if (empty($_SESSION['email'])) {
                  $name = 'del';
                  echo "<div><button class='btn btn-outline-dark p-2 ' type='button' data-bs-toggle='modal' data-bs-target='#$name'>
          Add to cart
          </button>
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
                  echo "<div><button class='btn btn-outline-dark p-2' style='width: 150px; height: 50px;' type='submit' style='width: 150px; height: 50px;'  >
              Add To Cart
            </button>
            </div>";
                }
              } else {
                echo "<a class='btn btn-outline-dark p-2'   style='width: 150px; height: 50px;' href='http://localhost/ecommerce_php/views/delcart.php/?id=$id' >
      remove from cart
      </a>";
              }
              ?>
            </div>
        </div>

    </form>
  </div>
  </div>

  <!-- <br />

  <div style="border: 1px solid rgba(217, 217, 217, 1);"></div>

  <br />

  <div class="container">
        <h1>Description</h1>
        <br>
        <p>
        </p>
  </div>
  <div class="container-fluid mt-5" style="background-color: rgba(250, 244, 244, 1);">
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
    </div> -->





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
      if (count-1 == 0) {
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