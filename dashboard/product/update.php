<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../index.css">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
</head>
<body> 

<nav>
      <div class="navbar">
          <h4 class="navbar-brand text-muted">Dashboard</h4>
        <ul class="ul">
          <li><a href="http://localhost/ecommerce_php/dashboard/" class="nav-link">
          <i class="fa-solid fa-gauge-high"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
          <li><a href="#" class="nav-link">
            <i class="fas fas fa-user"></i>
            <span class="nav-item">Customers</span>
          </a>
          </li>
          <li><a href="http://localhost/ecommerce_php/dashboard/product/" class="nav-link">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Products</span>
          </a>
          </li>
          <li><a href="http://localhost/ecommerce_php/dashboard/category" class="nav-link">
          <i class="fa-solid fa-layer-group"></i>
            <span class="nav-item">Category</span>
          </a>
          </li>
          <li><a href="http://localhost/ecommerce_php/dashboard/order" class="nav-link">
          <i class="fa-solid fa-bag-shopping"></i>
            <span class="nav-item">Orders</span>
          </a>
          </li>
          <li><a href="http://localhost/ecommerce_php/dashboard/admin" class="nav-link">
          <i class="fa-solid fa-user-tie"></i>
            <span class="nav-item">Admins</span>
          </a>
          </li>
          <li><a href="#" class="nav-link">
            <i class="fas fas fa-user"></i>
            <span class="nav-item">acount</span>
          </a>
          </li>
          
        </ul>
    </div>
    </nav>
 
    <?php   
        $id = $_GET['id'];
        require "../../modules/Connection.php";
        require "../../modules/product.php";
        $con = new Connection();
        $product = new product($con);
        $data = $product->GetProducts($id);
        $name= $data[0]['product_name'];
        $img=$data[0]['product_img'];
        $desc = $data[0]['description'];
        $quantity = $data[0]['quantity'];
        $category_id = $data [0]['category_id'];
        $price = $data[0]['price'];
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
        $product->UpdateProduct($id,$_POST['name'],$_POST['image'],$_POST['desc'],$_POST['quantity'],$_POST['price'],$_POST['cid']);
        header('location:http://localhost/ecommerce_php/dashboard/product/');
      }
      
    ?>
    <div class="container w-50 mt-5">   
      <h2 class='text-muted text-light'>Update Product</h2>
      <form class='form row' method='post' >
     
      <div class='col-md-6 mt-3'>
        <label for='inputEmail4' class='form-label mt-2'>Name</label>
        <input type='text' class='form-control' name='name' value="<?php echo"$name";?>" required>
      </div>
      <div class='col-md-6 mt-3'>
        <label for='inputPassword4' class='form-label mt-2'>image</label>
        <input type='text' class='form-control' name='image' value="<?php echo"$img";?>" required>
      </div>
      <div class='col-7 mt-3'>
        <label for='inputAddress' class='form-label mt-2'>Description</label>
        <input type='textarea' class='form-control' name='desc' value="<?php echo $desc ;?>" required >
      </div>
      <div class='col-4 mt-3'>
        <label for='inputAddress2' class='form-label mt-2'>Quantity</label>
        <input type='number' class='form-control' name='quantity' value=<?php echo"$quantity";?> required>
      </div>
      <div class='col-md-4 mt-3'>
        <label for='inputCity' class='form-label mt-2'>Price</label>
        <input type='number' class='form-control' name='price' value=<?php echo"$price";?> required>
      </div>
      <div class='col-9'></div>
      <br>
      
      <div class='col-md-6 col-8 mt-3'>
      <label for='inputState' class='form-label mt-2' >Category</label>
      <select id='inputState' class='form-select' name='cid'>"; 
        <?php
      require "../../modules/Category.php";
      $category = new Category($con);
      $data = $category -> GetCategory();
      foreach ($data as $key => $row) {
        if($row['category_id']==$category_id){
            echo"<option value=$row[category_id] selected class='option'>$row[category_name]</option> ";
            continue;
        }
       echo "<option value=$row[category_id] class='option'>$row[category_name]</option>";      
    }
  ?>
      </select>
    </div>
    <div class="col-8"></div>
    <button type='submit' class="btn col-2  mt-5 updatecat">Update</button>
  </div>
      </form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>