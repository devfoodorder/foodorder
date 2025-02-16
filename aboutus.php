<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="shortcut icon" type="image/png" href="images/icon.png">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            height: 100%;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("images/1.jpg");
            background-size: cover;
            background-position: center;
            color: white;
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .topnav {
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(15px);
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        .topnav a {
            color: white;
            text-decoration: none;
            padding: 0.8rem 1.5rem;
            margin: 0 0.5rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .topnav a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .topnav a.active {
            background: linear-gradient(45deg, #FF416C, #FF4B2B);
            color: white;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: rgba(71, 78, 93, 0.9);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            margin: 20px;
            border-radius: 10px;
            animation: slideIn 0.5s ease-in-out;
        }

        @keyframes slideIn {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        h1, h2 {
            color: #FFDD57;
            margin-bottom: 20px;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin: 20px auto;
            padding: 20px;
            width: 90%;
            max-width: 1200px;
        }

        .faculties {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .unit {
            margin: 25px;
            width: 220px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.3s;
        }

        .unit:hover {
            transform: scale(1.05);
        }

        .unit img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        .unit h3 {
            color: #FFDD57;
            margin: 10px 0;
        }

        .unit p {
            text-align: center;
            margin: 2px;
            color: #f0f0f0;
        }

        .unit p:first-of-type {
            font-weight: bolder;
            margin-bottom: 5px;
        }

        .review-section {
            background-color: rgba(71, 78, 93, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .review-section h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="topnav">
  <a href="home1.php">Home</a>
  <a class="active" href="aboutus.php">About Us</a>
  <a href="contact.php">Contact</a>
  <a href="blog.php">Blog</a>
</div>

<div class="about-section">
  <h1>About Us</h1>
  <p>Food Hub provides fast food delivery to the customers</p>
  <p>Every day we are trying to improve our quality and give our best to the customers</p>
  <br>
  <h2>Welcome to the Food Hub!</h2>
  <hr>
  <p>Welcome to our online food delivery website, where we bring the finest culinary experiences to your doorstep. Our mission is to provide you with the best quality food and exceptional service, so that you can enjoy delicious meals from the comfort of your home.</p>
  <p>Our team is passionate about food and we take great pride in curating a diverse menu that caters to different taste preferences. We work with top-rated restaurants and chefs to bring you an extensive selection of dishes ranging from traditional to contemporary cuisine. Whether you're in the mood for a classic burger, masala fries, or various Italian food, we've got you covered.</p>
  <p>At our online food delivery website, we understand the importance of convenience and speed. That's why we have created a user-friendly platform that allows you to easily browse our menu and place your order. We use the latest technology to ensure that the vegetables are fresh and your food arrives hot every time.</p>
  <p>Our commitment to quality extends beyond the food we serve. We strive to provide a seamless and hassle-free experience for our customers, and we are always looking for ways to improve our service. Our customer support team is available 24/7 to assist you with any queries or concerns you may have.</p>
  <p>Thank you for choosing Food Hub. We hope you enjoy your meal and look forward to serving you again soon.</p>
</div>

<div class="wrapper">
    <h1 id="tem">-  -  - Our Team -  -  - </h1>
    <div class="faculties">
        <div class="unit">
            <img src="images/ceo.jpg" alt="">
            <h3>Atul Upadhyay, Founder</h3>
            <p>We use eco-friendly packaging and implement practices to minimize food waste.</p>
        </div>
        <div class="unit">
            <img src="images/man.jpg" alt="">
            <h3>David Alex, Restaurant Manager</h3>
            <p>I have over 15 years of experience. I like to manage the restaurant and give my best.</p>  
        </div>
        <div class="unit">
            <img src="images/chef.jpg" alt="">
            <h3>Shrutika Koli, Executive Chef</h3>
            <p>I make food as sweet as my nature. I like to serve sweetness to people.</p>
        </div>
    </div>
</div>

<div class="review-section">
    <h1>-  -  - Customer's Review -  -  - </h1>
    <div class="faculties">
        <div class="unit">
            <img src="images/per2.jpg" alt="">
            <p>This is the best food delivery restaurant in this area.</p>
            <h3>Martin David</h3>
        </div>
        <div class="unit">
            <img src="images/per1.jpg" alt="">
            <p>I am so happy that the fastest food was delivered in just 8 minutes.</p>
            <h3>Flora Miller</h3>
        </div>
        <div class="unit">
            <img src="images/per4.jpg" alt="">
            <p>Every time they serve fresh food and provide better service compared to others.</p>
            <h3>Mayur Patel</h3>
        </div>
        <div class="unit">
            <img src="images/per6.jpg" alt="">
            <p>They deliver food in paper bags, which is nice because they are eco-friendly.</p>
            <h3>Olly Jenith</h3>
        </div>
        <div class="unit">
            <img src="images/per3.jpg" alt="">
            <p>The best food in their restaurant is Red-Cheese Pizza.</p>
            <h3>Gllen Smith</h3>
        </div>
    </div>
</div>

</body>
</html>