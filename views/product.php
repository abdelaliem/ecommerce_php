     <?php 
                    $id= $_GET['id'];
                    require "../modules/Connection.php";
                    $con = new Connection();
                    require "../modules/product.php";
                    $product = new product($con);
                    $data = $product->GetProducts($id);
                    print_r($data);
                    echo $data[0]['product_img'];
                     
     ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./design/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./design/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <title>Shop!</title>
  <style>
    .bigger-one-img img {
      background-color: antiquewhite;
    }
  </style>
</head>



<body>
    <div class="container">
        <div class="outer">
            <div class="left-side-img d-flex m-5">
                <section class="bigger-one-img w-50">
               
                     <?php
                     $img = $data[0]['product_img'];
                     echo "<img src='$img'>";
                     ?>
                </section>
                <section class="w-50">
                    <h1>Asgaard sofa</h1>
                    <h6 style="opacity: 50%">Rs. 250,000.00</h6>
                    <br />
                    <strong style="opacity: 80%">
                        <p>
                            Setting the bar as one of the loudest speakers in its class, the
                            Kilburn is a compact, stout-hearted hero with a well-balanced
                            audio which boasts a clear midrange and extended highs for a
                            sound.
                        </p>
                    </strong>
                    <br />
                    <br />



        <div class="d-flex mt-4">
          <div class="d-flex align-items-center p-1 justify-content-between rounded" style="border: 1px solid gray; margin-right: 50px;">
            <button id="MinusButton" class="btn">-</button>
            <span id="count" class="fs-4">1</span>
            <button id="PlusButton" class="btn">+</button>
          </div>
          <div>
            <button class="btn btn-outline-dark" style="width: 150px; height: 50px;">
              Add To Cart
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br />

  <div style="border: 1px solid rgba(217, 217, 217, 1);"></div>

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
  </div>





  <script>
    const PlusButton = document.getElementById("PlusButton");
    const countSpan = document.getElementById("count");
    const MinusButton = document.getElementById("MinusButton");
    let count = 1;

    PlusButton.addEventListener("click", () => {
      count++;
      countSpan.textContent = count;
    });
    MinusButton.addEventListener("click", () => {
      if (count == 0) {
        let count = 0;
        countSpan.textContent = count;
      } else {
        count--;
        countSpan.textContent = count;
      }
    });
  </script>
</body>

</html>