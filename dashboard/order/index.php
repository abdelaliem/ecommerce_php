<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../index.css?v=<?php echo time(); ?>">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
<div class='container-fluid h-100 mx-0'>
 <div class='row  h-100'>
 <?php 
  session_start();
  spl_autoload_register(function($class){
  require "../../modules/".$class.=".php";
});
 require "../../views/sidebar.php";
 if(!isset($_SESSION['username'])){
  header('location:http://localhost/ecommerce_php/views/adminLogin.php');
}

$customerId = 19; // Replace with the actual customer ID

// Your database connection code goes here
// require ('../../modules/Connection.php');
$query = "SELECT * FROM `order` WHERE user_id = 19 ORDER BY created_at";
$con = new Connection() ;
$result = mysqli_query($con->conn, $query);

// Check for errors and fetch the data
if ($result) {
    $customerData = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    // echo "Error: " . mysqli_error($yourDbConnection);
}
$groupedData = [];

foreach ($customerData as $row) {
    $createdAtDate = date('Y-m-d-h-i-s', strtotime($row['created_at']));
    
    if (!isset($groupedData[$createdAtDate])) {
        $groupedData[$createdAtDate] = [];
    }

    $groupedData[$createdAtDate][] = $row;
}
// Close the database connection
// mysqli_close($yo);
?>

 <div class=' content col  '>
 <?php
foreach ($groupedData as $date => $data) {
    echo "<h2>$date</h2>";
    
    foreach ($data as $row) {
      var_dump($row);
        // Display or use individual data here
    }
}
?>
</div>
</div>
</div>
</body>
</html>
<!-- : Uncaught mysqli_sql_exception: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order WHERE user_id = 19 ORDER BY created_at' at line 1 in C:\xampp\htdocs\ecommerce_php\dashboard\order\index.php:30 Stack trace: #0 C:\xampp\htdocs\ecommerce_php\dashboard\order\index.php(30): mysqli_query(Object(mysqli), 'SELECT * FROM o...') #1 {main} thrown in
C:\xampp\htdocs\ecommerce_php\dashboard\order\index.php -->