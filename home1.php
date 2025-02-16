<?php
session_start();
// Add session check to prevent unauthorized access
if(!isset($_SESSION['user_id'])){
    header('location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FoodHub - Home</title>
    <link rel="shortcut icon" type="image/png" href="images/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            overflow: hidden;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .account_main .video {
            position: fixed;
            right: 50%;
            bottom: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            filter: brightness(0.5);
            animation: fadeIn 1s ease-in-out;
            transform: translate(50%, 50%);
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
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

        .hero-section {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 2rem;
            animation: slideIn 1s ease-in-out;
            position: relative;
            z-index: 2;
        }

        @keyframes slideIn {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .hero-title {
            font-size: 4.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
            background: linear-gradient(45deg, #FF416C, #FF4B2B);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: titleAnimation 3s ease-in-out infinite;
        }

        @keyframes titleAnimation {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .cta-button {
            padding: 1rem 3rem;
            font-size: 1.2rem;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            background: linear-gradient(45deg, #FF416C, #FF4B2B);
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 10px 20px rgba(255, 65, 108, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255, 65, 108, 0.4);
        }

        .cta-button:active {
            transform: translateY(1px);
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 3rem;
            }
            
            .topnav {
                padding: 0.5rem;
            }
            
            .topnav a {
                padding: 0.5rem 1rem;
                margin: 0 0.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="account_main">
        <video muted loop autoplay class="video" controls style="width: 100%; height: 100%; object-fit: cover;">
            <source src="images/3196094-uhd_3840_2160_25fps.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div>
    </div>

    <div class="topnav">
        <a class="active" href="home1.php">Hello</a>
        <a href="aboutus.php">About Us</a>
        <a href="contact.php">Contact</a>
        <a href="blog.php">Blog</a>
        <div class="topnav-right" style="float: right;">
            <a href="logout.php" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="logout.php" method="POST" style="display: none;">
                <!-- CSRF token can be added here if needed -->
            </form>
        </div>
    </div>

    <div class="hero-section">
        <h1 class="hero-title">Welcome To FoodHub!</h1>
        <button class="cta-button" onClick="window.location.href='products.php';">
            Explore Menu
        </button>
    </div>
</body>
</html>