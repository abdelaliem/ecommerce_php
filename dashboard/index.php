<!DOCTYPE html>
<html lang="en">
<head>
  <title>  Dashboard </title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="./next.css?v=<?php echo time(); ?>">
</head>
<body>
 <?php
 spl_autoload_register(function($class){
  require "../modules/".$class.=".php";
 });
 $con = new Connection();
 $category = new Category($con);
 $order = new order($con);
 $product = new product($con);
 $NumP = count($product -> GetProducts());
 $NumO=count($order->GetOrders());
 $NumC = count($category->GetCategory());
 $user = new user($con);
 $NumU = count($user -> get_users());
 ?>
 <div class='container-fluid h-100 mx-0'>
 <div class='row  h-100'>
 <?php require "../views/sidebar.php";?>
 

 
 
 <div class=' content col  '>
 <div class=' grid gx-2 g-0'>
  <a class=' info card1 container ' href='http://localhost/ecommerce_php/dashboard/order/'> 
    <div class='littlecard  row row-cols-5 w-75   '>
        <span class='icons orders pt-1 text-center  px-0 col-6 mt-2 d-inline-block'>
            <i class="fa-solid fa-cart-shopping"></i>
        </span>
          <p class=' col  mt-3 '>Orders <br> <?php echo $NumO?></p>
    </div>
</a>
  <a class=' info card2 container ' href='http://localhost/ecommerce_php/dashboard/product/?page=1'> 
    <div class='littlecard  row row-cols-5 w-75   '>
        <span class='icons products pt-1 text-center  px-0 col-6 mt-2 d-inline-block'>
        <i class="fa-brands fa-product-hunt"></i>
        </span>
          <p class=' col  mt-3'>Products <br> <?php echo $NumP?></p>
    </div>
</a>  
  <a class=' info card3 container ' href='http://localhost/ecommerce_php/dashboard/category/?page=1'> 
    <div class='littlecard  row row-cols-5 w-75   '>
        <span class='icons categories pt-1 text-center  px-0 col-6 mt-2 d-inline-block'>
        <i class="fa-regular fa-rectangle-list"></i>
        </span>
          <p class=' col  mt-3  '>categories <br> <?php echo $NumC?></p>
    </div>
</a>
  <a class=' info card4 container ' href='http://localhost/ecommerce_php/dashboard/customers/'> 
    <div class='littlecard  row row-cols-5 w-75   '>
        <span class='icons users pt-1 text-center  px-0  col-6 mt-2 d-inline-block'>
        <i class="fa-solid fa-user"></i>
        </span>
          <p class=' col  mt-3 '>Customers <br> <?php echo $NumU?></p>
    </div>
</a>

 </div>
 </div>
</div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

</script>
</body>
</html>