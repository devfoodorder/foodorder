<?php

@include 'config.php';
session_start();
if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'Product already added to cart';
   }else{
      $sessionid = session_id();
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity, sessionid) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity', '$sessionid')");
      $message[] = 'Product added to cart successfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Products</title>
   <link rel="shortcut icon" type="image/png" href="images/icon.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <style>
      body {
         font-family: 'Arial', sans-serif;
         background-color: #f4f4f4;
         margin: 0;
         padding: 0;
      }
      .message {
         background-color: #ffcc00;
         color: #333;
         padding: 10px;
         margin: 10px 0;
         border-radius: 5px;
         position: relative;
      }
      .message i {
         position: absolute;
         right: 10px;
         cursor: pointer;
      }
      .container {
         max-width: 1200px;
         margin: 0 auto;
         padding: 20px;
      }
      .products {
         background: #fff;
         border-radius: 10px;
         box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
         padding: 20px;
      }
      .heading {
         text-align: center;
         margin-bottom: 20px;
         color: #333;
      }
      .box-container {
         display: flex;
         flex-wrap: wrap;
         justify-content: space-between;
      }
      .box {
         background: #f9f9f9;
         border-radius: 10px;
         padding: 15px;
         margin: 10px;
         text-align: center;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
         transition: transform 0.3s;
         flex: 1 1 calc(30% - 20px);
      }
      .box:hover {
         transform: scale(1.05);
      }
      .box img {
         max-width: 100%;
         border-radius: 10px;
      }
      .price {
         font-size: 1.2em;
         color: #e67e22;
         margin: 10px 0;
      }
      .btn {
         background: #e74c3c;
         color: #fff;
         border: none;
         padding: 10px 15px;
         border-radius: 5px;
         cursor: pointer;
         transition: background 0.3s;
      }
      .btn:hover {
         background: #c0392b;
      }
   </style>
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $msg){
      echo '<div class="message"><span>'.$msg.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i></div>';
   }
}
?>

<?php include 'header.php'; ?>
<div class="container">

<section class="products">

   <h1 class="heading">Latest Products</h1>

   <div class="box-container">

      <?php
      $select_products = mysqli_query($conn, "SELECT * FROM `product`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="admin/images/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">Rs.<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="Add to Delivery" name="add_to_cart">
         </div>
      </form>

      <?php
         }
      }
      ?>

   </div>

</section>

</div>

<script src="js/script.js"></script>

</body>
</html>