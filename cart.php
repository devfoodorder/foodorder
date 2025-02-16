<?php

@include 'config.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shopping Cart</title>
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
      .container {
         max-width: 1200px;
         margin: 20px auto;
         padding: 20px;
         background: #fff;
         border-radius: 10px;
         box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }
      .heading {
         text-align: center;
         margin-bottom: 20px;
         color: #333;
      }
      table {
         width: 100%;
         border-collapse: collapse;
         margin-bottom: 20px;
      }
      th, td {
         padding: 15px;
         text-align: center;
         border-bottom: 1px solid #ddd;
      }
      th {
         background-color: #f2f2f2;
      }
      .delete-btn {
         color: #e74c3c;
         text-decoration: none;
      }
      .delete-btn:hover {
         text-decoration: underline;
      }
      .checkout-btn {
         text-align: right;
      }
      .btn {
         background: #28a745;
         color: #fff;
         padding: 10px 20px;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         transition: background 0.3s;
      }
      .btn:hover {
         background: #218838;
      }
      .option-btn {
         background: #007bff;
         color: #fff;
         padding: 10px 20px;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         transition: background 0.3s;
      }
      .option-btn:hover {
         background: #0056b3;
      }
   </style>
</head>
<body>

<?php include 'header.php';?>
<div class="container">

<section class="shopping-cart">

   <h1 class="heading">Shopping Cart</h1>

   <table>

      <thead>
         <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Action</th>
         </tr>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>Rs.<?php echo number_format($fetch_cart['price']); ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="Update" name="update_update_btn" class="btn">
               </form>   
            </td>
            <td>Rs.<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> Remove</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="products.php" class="option-btn" style="margin-top: 0;">Continue Shopping</a></td>
            <td colspan="3">Total Amount</td>
            <td>Rs.<?php echo $grand_total; ?>/-</td>
            <td><a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> Delete All</a></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">Proceed to Checkout</a>
   </div>

</section>

</div>
<script src="js/script.js"></script>

</body>
</html>