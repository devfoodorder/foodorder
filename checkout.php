<?php

@include 'config.php';
session_start();

// Add error logging function
function logError($message) {
    $logFile = 'payment_errors.log';
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] $message\n";
    error_log($logMessage, 3, $logFile);
}

if(isset($_POST['order_btn'])){
    try {
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $method = $_POST['method'];
        $flat = $_POST['flat'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $pin_code = $_POST['pin_code'];

        $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
        $price_total = 0;
        if(mysqli_num_rows($cart_query) > 0){
            while($product_item = mysqli_fetch_assoc($cart_query)){
                $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
                $product_price = number_format($product_item['price'] * $product_item['quantity']);
                $price_total += $product_price;
            };
        };

        $total_product = implode(', ',$product_name);
        $detail_query = mysqli_query($conn, "INSERT INTO `corder`(name, number, email, method, flat, street, city, pin_code, total_products, total_price) VALUES('$name','$number','$email','$method','$flat','$street','$city','$pin_code','$total_product','$price_total')") or die('query failed');

        if($cart_query && $detail_query){
            $sess = session_id();
            mysqli_query($conn,"Delete from `cart` where sessionid='$sess'") or die('query failed'); 
            echo "
            <div class='order-message-container'>
            <div class='message-container'>
               <h3>thank you for ordering!</h3>
               <div class='order-detail'>
                  <span>".$total_product."</span>
                  <span class='total'> total : Rs.".$price_total."/-  </span>
               </div>
               <div class='customer-details'>
                  <p> your name : <span>".$name."</span> </p>
                  <p> your number : <span>".$number."</span> </p>
                  <p> your email : <span>".$email."</span> </p>
                  <p> your address : <span>".$flat.", ".$street.", ".$city." - ".$pin_code."</span> </p>
                  <p> your payment mode : <span>".$method."</span> </p>
                  <p>(*pay when product arrives*)</p>
               </div>
                  <a href='products.php' class='btn'>continue shopping</a>
               </div>
            </div>
            ";
        }
    } catch (Exception $e) {
        echo "<div class='error-message'>An error occurred. Please try again later.</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>
   <link rel="shortcut icon" type="image/png" href="images/icon.png">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php include 'header.php';?>
<div class="container">

<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

   <form action="" method="post" id="checkoutForm">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
               $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
               $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total">Total Amount : Rs.<?= $grand_total; ?>/-</span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>your number</span>
            <input type="tel" placeholder="enter your number" name="number"  pattern="[789][0-9]{9}" required>
         </div>
         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="method">
               <option value="cash on delivery" selected>Cash on delivery</option>
               <option value="credit cart">Credit card</option>
               <option value="UPI Apps">UPI (gpay,paytm,etc)</option>
            </select>
         </div>
         <div class="inputBox">
            <span>address line 1</span>
            <input type="text" placeholder="e.g. flat no. & society" name="flat" required>
         </div>
         <div class="inputBox">
            <span>address line 2</span>
            <input type="text" placeholder="e.g. Landmark or Area" name="street" required>
         </div>
         <div class="inputBox">
            <span>city</span>
            <input type="text" placeholder="e.g. Jhagadia" name="city" required>
         </div>
         
         <div class="inputBox">
            <span>pin code</span>
            <input type="text" placeholder="e.g. 123456" name="pin_code" pattern="[0-9]{6}"maxlength="6" minlength="6"required>
         </div>
      </div>
      <input type="submit" value="Order Now" name="order_btn" class="btn">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>

<style>
.error-message {
    background-color: #ff6b6b;
    color: white;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    text-align: center;
}

.payment-note {
    display: block;
    margin-top: 10px;
    color: #e74c3c;
    font-size: 0.9em;
    font-style: italic;
}
</style>

<script>
function confirmPayment() {
    return true;
}

// Add this to prevent form resubmission
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
</script>