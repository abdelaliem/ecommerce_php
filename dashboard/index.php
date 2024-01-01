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
  require "../modules/product.php";
  $products = new product();
  $data = $products->GetProducts();
  echo "<div class='container mt-5'>";
  echo "<table class='table'>";
  echo "<tr>
<th> Product Name </th>
<th> Price </th>
<th> Quantaty </th>
<th style='width:10px' > Description</th>
<th> Category Name </th>
<th> Action </th>
</tr>";
  foreach ($data as $row => $RowData) {
    echo "<tr>";
    foreach ($RowData as $key => $value) {
      $id = $RowData['product_id'];
      if ($key == "product_id" or $key == "updated_on" or $key == "created_at" or $key == "product_img") {
        continue;
      }
      if ($key == 'category_id') {
        $con = new Connection();
        $CategoryName = $con->conn->query("SELECT `category_name` FROM `category` WHERE `category_id` = $value ")->fetch_assoc()['category_name'];
        echo "<td>$CategoryName</td>";
        continue;
      }
      echo "<td>$value</td>";
    }
    $name = "name$id";
    echo "<td>
   
    <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#$name'>
      Delete
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
            are you sure you want to delete this product 
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
            <a type='button' href='http://localhost/ecommerce_php/dashboard/delete.php?id=$id' class='btn btn-danger'>Delete</a>
          </div>
        </div>
      </div>
    </div>
    <a class='btn btn-success' href='http://localhost/ecommerce_php/dashboard/update.php?id=$id'> Update </a>
    </td>";
    echo "</tr>";
  }
  echo "</table>";
  echo "<a class='btn btn-primary mt-5' href='http://localhost/ecommerce_php/dashboard/addproduct.php'> Add new product </a>";
  echo "</div>";
  ?>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

  </script>
</body>

</html>