<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="index.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  
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
          <li><a href="http://localhost/ecommerce_php/dashboard/product?page=1" class="nav-link">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Products</span>
          </a>
          </li>
          <li><a href="http://localhost/ecommerce_php/dashboard/category?page=1" class="nav-link">
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
    require("../views/navbar.php")
  ?>
    <section class="main">
       
    </section>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

</script>
</body>
</html>