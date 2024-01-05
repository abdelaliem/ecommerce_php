<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body> 
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
      if(trim($_POST['name'])){
        require '../modules/product.php';
        print_r($_POST);
        $product = new product();
        $product -> SetProduct($_POST['name'],$_POST['image'],$_POST['desc'],$_POST['quantity'],$_POST['price'],$_POST['cid']);
        header('location:http://localhost/ecommerce_php/dashboard/');
      }
    }
    ?>
  <div class="container w-50 mt-5"> 
  <form class="form row" method='post' >
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label mt-2">Name</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label mt-2">image</label>
      <input type="text" class="form-control" name="image" required>
    </div>
    <div class="col-7">
      <label for="inputAddress" class="form-label mt-2">Description</label>
      <input type="textarea" class="form-control" name="desc" required >
    </div>
    <div class="col-4">
      <label for="inputAddress2" class="form-label mt-2">Quantity</label>
      <input type="number" class="form-control" name="quantity" required>
    </div>
    <div class="col-md-3">
      <label for="inputCity" class="form-label mt-2">Price</label>
      <input type="number" class="form-control" name="price" required>
    </div>
    <div class="col-9"></div>
    <br>
    
    <div class="col-md-4">
      <label for="inputState" class="form-label mt-2" >Category</label>
      <select id="inputState" class="form-select" name="cid">
      <?php
      require "../modules/Category.php";

      $category = new Category();
      $data = $category -> GetCategory();
      print_r($data);
      foreach ($data as $key => $row) {
         echo "<option value=$row[category_id]>$row[category_name]</option>";
          
    }
    ?>
      </select>
    </div>
    <div class="col-8"></div>
      <button type="submit" class="btn col-2  mt-5 btn-primary">Add</button>
    </div>
  </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>