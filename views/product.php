     <?php 
     session_start();
     if(isset($_GET['id'])){
                    $id= $_GET['id'];
                    require "../modules/Connection.php";
                    $con = new Connection();
                    require "../modules/product.php";
                    require "../modules/Data.php";
                    $product = new product($con);
                    $data = $product->GetProducts($id);
                    $table = new Data($con);
                    $tabledata = $table -> GetData();
                    $res =1;
                    foreach ($tabledata as $key => $row) {
                      if($row['product_id']==$id){
                        $res = 0;
                        break;
                      }
                    }
         }     
         else{
          $id = 32;
          require "../modules/Connection.php";
                    $con = new Connection();
                    require "../modules/product.php";
                    $product = new product($con);
                    $data = $product->GetProducts($id);
         }  
          
     ?>
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



<body>
  <?php  require"./navbar.php"?>
    <div class="container">
        <div class="outer">
          <form method='post' action="http://localhost/ecommerce_php/views/cart.php/?id=<?php echo $id?>">
            <div class="left-side-img d-flex m-5">
                <section class="bigger-one-img w-50">
               
                     <?php
                     $img = $data[0]['product_img'];
                     echo "<img src='$img'>";
                     ?>
                </section>
                <section class="w-50">
                    <h1><?php print_r ($data[0]['product_name'])?></h1>
                    <h6 style="opacity: 50%"><?php echo $data[0]['price']?></h6>
                    <br />
                    <strong style="opacity: 80%">
                        <p>
                        <?php echo $data[0]['description']?>
                        </p>
                    </strong>
                    <br />
                    <br />
        <div class="d-flex mt-4">
         
          <?php  
          if($res){
            echo "<div class='d-flex w-25 align-items-center p-1 justify-content-between rounded' style='border: 1px solid gray; margin-right: 50px;'>
            <button id='MinusButton' class='btn' type='button'>-</button>
            <input id='count' value=1 name='quantity' class='fs-4 w-25' >  
            <button id='PlusButton' class='btn' type='button'>+</button>
          </div>";
          if(empty($_SESSION['email']) ){
            $name='del';
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
          }
          else{
            echo "<div><button class='btn btn-outline-dark p-2' style='width: 150px; height: 50px;' type='submit' style='width: 150px; height: 50px;'  >
              Add To Cart
            </button>
            </div>";
          }

    }
    else{
      echo "<a class='btn btn-outline-dark p-2'   style='width: 150px; height: 50px;' href='http://localhost/ecommerce_php/views/delcart.php/?id=$id' >
      remove from cart
      </a>";
    }
      ?>
          </div>
        </div>
    
      </div>
  </form>
    </div>
  </div>

  <br />

  <!-- <div style="border: 1px solid rgba(217, 217, 217, 1);"></div>

  <br />

  <div class="container">
    <center>
      <strong>
        <h1>Description</h1>
      </strong>
    </center>
    <br />
    <strong style="opacity: 70%">
      <p>
        Embodying the raw, wayward spirit of rock ‘n’ roll, the Kilburn portable active stereo speaker
        takes the unmistakable look and sound of Marshall, unplugs the chords, and takes the show on the
        road.
      </p>
    </strong>
    <br />
    <strong style="opacity: 70%">
      <p>
        Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering.
        Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact,
        stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs
        for a sound that is both articulate and pronounced. The analogue knobs allow you to fine-tune
        the controls to your personal preferences while the guitar-influenced leather strap enables
        easy and stylish travel.
      </p>
    </strong>
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
      if (count == 0) {
        let count = 0;
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