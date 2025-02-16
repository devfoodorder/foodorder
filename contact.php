<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300&family=IBM+Plex+Sans&family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/icon.png">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
        }

        .topnav {
            background: #333;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
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

        .video-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .video-container video {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .contact-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 500px;
        }

        .contact-form h3 {
            font-size: 1.5rem;
            color: #333;
            text-align: center;
            margin-bottom: 1rem;
        }

        .contact-form hr {
            border: 1px solid #ccc;
            margin-bottom: 1rem;
        }

        .contact-form input[type="text"],
        .contact-form input[type="submit"] {
            width: 100%;
            padding: 1rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .contact-form input[type="submit"] {
            background-color: #0a0a23;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form input[type="submit"]:hover {
            background-color: #151530;
        }
    </style>
</head>
<body>
    <div class="topnav">
        <a href="home1.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a class="active" href="contact.php">Contact</a>
        <a href="blog.php">Blog</a>
    </div>
    <div class="video-container">
        <video muted loop autoplay>
            <source src="images/2431225-uhd_3840_2160_24fps.mp4" type="video/mp4">
        </video>
        <div class="contact-form">
            <form action="regcon.php" method="post" name="myForm" onsubmit="return validateform()">
                <h3>Contact Us</h3>
                <hr>
                <input type="text" id="Name" name="Name" placeholder="Name" required>
                <input type="text" id="Phone" name="Phone" placeholder="Phone" required>
                <input type="text" id="Email" name="Email" placeholder="Email" required>
                <input type="text" id="message" name="message" placeholder="Message" required>
                <input type="submit" name="save" value="Send">
            </form>
        </div>
    </div>
</body>
</html>