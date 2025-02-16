<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover our food blog with fast delivery, free shipping, and the best quality food.">
    <meta name="keywords" content="food blog, fast delivery, free shipping, healthy food">
    <meta name="author" content="FoodHub">
    <title>FoodHub Blog</title>
    <link rel="shortcut icon" href="images/icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }

        /* Navigation Bar */
        .topnav {
            background: #333;
            color: white;
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
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

        /* Blog Section */
        .inner_page_head {
            background: #fff;
            padding: 2rem;
            text-align: center;
        }

        .inner_page_head h3 {
            font-size: 2rem;
            color: #333;
        }

        /* Why Choose Us Section */
        .why_section {
            background: #fff;
            padding: 2rem;
            text-align: center;
        }

        .why_section h3 {
            font-size: 2rem;
            color: #333;
        }

        .box {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1.5rem;
            margin: 1rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .img-box svg {
            width: 50px;
            height: 50px;
            fill: #4CAF50; /* Green color for icons */
        }

        .detail-box h5 {
            font-size: 1.2rem;
            color: #333;
        }

        .detail-box p {
            font-size: 1rem;
            color: #666;
        }

        /* Footer */
        .footer_section {
            background-color: #333;
            color: white;
            padding: 20px 0;
        }

        .footer_section a {
            color: #4CAF50;
            text-decoration: none;
        }

        .footer_section a:hover {
            color: #45a049;
        }

        .footer_social a {
            margin: 0 10px;
            font-size: 20px;
        }

        .footer-info {
            text-align: center;
            padding: 1rem;
        }

        .footer-info p {
            font-size: 0.9rem;
            color: #999;
        }
    </style>
</head>
<body class="sub_page">
    <!-- Navigation Bar -->
    <div class="topnav">
        <a href="home1.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="contact.php">Contact</a>
        <a class="active" href="blog.php">Blog</a>
    </div>

    <!-- Blog Section -->
    <section class="inner_page_head">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Blog</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h3>Why Choose Us?</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <div class="img-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M476.158,231.363l-13.259-53.035c3.625-0.77,6.345-3.986,6.345-7.839v-8.551c0-18.566-15.105-33.67-33.67-33.67h-60.392V110.63c0-9.136-7.432-16.568-16.568-16.568H50.772c-9.136,0-16.568,7.432-16.568,16.568V256c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017V110.63c0-0.295,0.239-0.534,0.534-0.534h307.841c0.295,0,0.534,0.239,0.534,0.534v145.372c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017v-9.088h94.569c0.008,0,0.014,0.002,0.021,0.002c0.008,0,0.015-0.001,0.022-0.001c11.637,0.008,21.518,7.646,24.912,18.171h-24.928c-4.427,0-8.017,3.589-8.017,8.017v17.102c0,13.851,11.268,25.119,25.119,25.119h9.086v35.273h-20.962c-6.886-19.883-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205h-3.86v-60.393c0-4.427-3.589-8.017-8.017-8.017c-4.427,0-8.017,3.589-8.017,8.017v60.391H192.817c-6.886-19.883-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205H50.772c-0.295,0-0.534-0.239-0.534-0.534v-17.637h34.739c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H8.017c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h26.188v17.637c0,9.136,7.432,16.568,16.568,16.568h43.304c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.996,22.777,50.772,50.772,50.772s50.772-22.776,50.772-50.772c0-0.18-0.012-0.356-0.014-0.534h180.67c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.996,22.777,50.772,50.772,50.772c27.995,0,50.772-22.776,50.772-50.772c0-0.18-0.012-0.356-0.014-0.534h26.203c4.427,0,8.017-3.589,8.017-8.017v-85.511C512,251.989,496.423,234.448,476.158,231.363zM375.182,144.301h60.392c9.725,0,17.637,7.912,17.637,17.637v0.534h-78.029V144.301zM375.182,230.881v-52.376h71.235l13.094,52.376H375.182zM144.835,401.904c-19.155,0-34.739-15.583-34.739-34.739s15.584-34.739,34.739-34.739c19.155,0,34.739,15.583,34.739,34.739S163.99,401.904,144.835,401.904zM427.023,401.904c-19.155,0-34.739-15.583-34.739-34.739s15.584-34.739,34.739-34.739c19.155,0,34.739,15.583,34.739,34.739S446.178,401.904,427.023,401.904zM495.967,299.29h-9.086c-5.01,0-9.086-4.076-9.086-9.086v-9.086h18.171V299.29z" />
                            </svg>
                        </div>
                        <div class="detail-box">
                            <h5>Fast Delivery</h5>
                            <p>We deliver the food in just <br><b>30 Minutes</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="img-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490.667 490.667">
                                <path d="M138.667,192H96c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667v-74.667h32c5.888,0,10.667-4.779,10.667-10.667S144.555,192,138.667,192z" />
                                <path d="M117.333,234.667H96c-5.888,0-10.667,4.779-10.667,10.667S90.112,256,96,256h21.333c5.888,0,10.667-4.779,10.667-10.667S123.221,234.667,117.333,234.667z" />
                                <path d="M245.333,0C110.059,0,0,110.059,0,245.333s110.059,245.333,245.333,245.333s245.333-110.059,245.333-245.333S380.608,0,245.333,0zM245.333,469.333c-123.52,0-224-100.48-224-224s100.48-224,224-224s224,100.48,224,224S368.853,469.333,245.333,469.333z" />
                                <path d="M386.752,131.989C352.085,88.789,300.544,64,245.333,64s-106.752,24.789-141.419,67.989c-3.691,4.587-2.965,11.307,1.643,14.997c4.587,3.691,11.307,2.965,14.976-1.643c30.613-38.144,76.096-60.011,124.8-60.011s94.187,21.867,124.779,60.011c2.112,2.624,5.205,3.989,8.32,3.989c2.368,0,4.715-0.768,6.677-2.347C389.717,143.296,390.443,136.576,386.752,131.989z" />
                                <path d="M376.405,354.923c-4.224-4.032-11.008-3.861-15.061,0.405c-30.613,32.235-71.808,50.005-116.011,50.005s-85.397-17.771-115.989-50.005c-4.032-4.309-10.816-4.437-15.061-0.405c-4.309,4.053-4.459,10.816-0.405,15.083c34.667,36.544,81.344,56.661,131.456,56.661s96.789-20.117,131.477-56.661C380.864,365.739,380.693,358.976,376.405,354.923z" />
                                <path d="M206.805,255.723c15.701-2.027,27.861-15.488,27.861-31.723c0-17.643-14.357-32-32-32h-21.333c-5.888,0-10.667,4.779-10.667,10.667v42.581c0,0.043,0,0.107,0,0.149V288c0,5.888,4.779,10.667,10.667,10.667S192,293.888,192,288v-16.917l24.448,24.469c2.091,2.069,4.821,3.115,7.552,3.115c2.731,0,5.461-1.045,7.531-3.136c4.16-4.16,4.16-10.923,0-15.083L206.805,255.723zM192,234.667v-21.333h10.667c5.867,0,10.667,4.779,10.667,10.667s-4.8,10.667-10.667,10.667H192z" />
                                <path d="M309.333,277.333h-32v-64h32c5.888,0,10.667-4.779,10.667-10.667S315.221,192,309.333,192h-42.667c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667h42.667c5.888,0,10.667-4.779,10.667-10.667S315.221,277.333,309.333,277.333z" />
                                <path d="M288,234.667h-21.333c-5.888,0-10.667,4.779-10.667,10.667S260.779,256,266.667,256H288c5.888,0,10.667-4.779,10.667-10.667S293.888,234.667,288,234.667z" />
                                <path d="M394.667,277.333h-32v-64h32c5.888,0,10.667-4.779,10.667-10.667S400.555,192,394.667,192H352c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667h42.667c5.888,0,10.667-4.779,10.667-10.667S400.555,277.333,394.667,277.333z" />
                                <path d="M373.333,234.667H352c-5.888,0-10.667,4.779-10.667,10.667S346.112,256,352,256h21.333c5.888,0,10.667-4.779,10.667-10.667S379.221,234.667,373.333,234.667z" />
                            </svg>
                        </div>
                        <div class="detail-box">
                            <h5>Free Shipping</h5>
                            <p>There is <b>No Delivery Charge</b> on food shipping</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="img-box">
                            <svg id="_30_Premium" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                                <path d="m252.92 300h3.08a124.245 124.245 0 1 0 -4.49-.09c.075.009.15.023.226.03.394.039.789.06 1.184.06zm-96.92-124a100 100 0 1 1 100 100 100.113 100.113 0 0 1 -100-100z" />
                                <path d="m447.445 387.635-80.4-80.4a171.682 171.682 0 0 0 60.955-131.235c0-94.841-77.159-172-172-172s-172 77.159-172 172c0 73.747 46.657 136.794 112 161.2v158.8c-.3 9.289 11.094 15.384 18.656 9.984l41.344-27.562 41.344 27.562c7.574 5.4 18.949-.7 18.656-9.984v-70.109l46.6 46.594c6.395 6.789 18.712 3.025 20.253-6.132l9.74-48.724 48.725-9.742c9.163-1.531 12.904-13.893 6.127-20.252zm-339.445-211.635c0-81.607 66.393-148 148-148s148 66.393 148 148-66.393 148-148 148-148-66.393-148-148zm154.656 278.016a12 12 0 0 0 -13.312 0l-29.344 19.562v-129.378a172.338 172.338 0 0 0 72 0v129.38zm117.381-58.353a12 12 0 0 0 -9.415 9.415l-6.913 34.58-47.709-47.709v-54.749a171.469 171.469 0 0 0 31.467-15.6l67.151 67.152z" />
                                <path d="m287.62 236.985c8.349 4.694 19.251-3.212 17.367-12.618l-5.841-35.145 25.384-25c7.049-6.5 2.89-19.3-6.634-20.415l-35.23-5.306-15.933-31.867c-4.009-8.713-17.457-8.711-21.466 0l-15.933 31.866-35.23 5.306c-9.526 1.119-13.681 13.911-6.634 20.415l25.384 25-5.841 35.145c-1.879 9.406 9 17.31 17.367 12.618l31.62-16.414zm-53-32.359 2.928-17.615a12 12 0 0 0 -3.417-10.516l-12.721-12.531 17.658-2.66a12 12 0 0 0 8.947-6.5l7.985-15.971 7.985 15.972a12 12 0 0 0 8.947 6.5l17.658 2.66-12.723 12.535a12 12 0 0 0 -3.417 10.516l2.928 17.615-15.849-8.231a12 12 0 0 0 -11.058 0z" />
                            </svg>
                        </div>
                        <div class="detail-box">
                            <h5>Best Quality Food</h5>
                            <p>We use organic vegetables and serve <b>Fresh And Healthy</b> food</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h3>Reach Us</h3>
                        <div class="contact_link_box">
                            <a href="https://goo.gl/maps/HeHvCRZDzLco8ChX8" target="_blank">
                                <i class="fas fa-location-arrow"></i>
                                <span>Location</span>
                            </a>
                            <a href="tel:+911234567890">
                                <i class="fas fa-phone-volume"></i>
                                <span>Call +91 1234567890</span>
                            </a>
                            <a href="mailto:foodhub@gmail.com" target="_blank">
                                <i class="fas fa-envelope"></i>
                                <span>Foodhub@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <h3>About Us</h3>
                        <p>We are serving food to customers for over 5 years, and all our customers are happy with our service.</p>
                        <div class="footer_social">
                            <a href="https://www.facebook.com/Foodhub.co.uk/" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/FoodhubUK?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/foodhubuk" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.instagram.com/foodhub.co.uk/?hl=en" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-info">
                <div class="col-lg-7 mx-auto px-0">
                    <p>&copy; <span id="displayYear"></span> All Rights Reserved By FoodHub<br>Distributed By Funfoods</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        // Get the current year for the copyright
        document.getElementById('displayYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>