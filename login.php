<?php
$connect = mysqli_connect("localhost", "root", "", "food") or die("Connection failed: " . mysqli_connect_error());

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        error_log("Email or password is empty");
    } else {
        error_log("Login attempt with email: $email");

        $stmt = $connect->prepare("SELECT * FROM users WHERE Email = ? AND Pwd = ?");
        if ($stmt === false) {
            error_log("Prepare failed: " . $connect->error);
        } else {
            $stmt->bind_param("ss", $email, $password);
            if (!$stmt->execute()) {
                error_log("Execute failed: " . $stmt->error);
            } else {
                $result = $stmt->get_result();
                $count = $result->num_rows;

                if ($count > 0) {
                    error_log("Login successful for email: $email");
                    // Start session and set user_id
                    session_start();
                    $_SESSION['user_id'] = $email; // Assuming email is used as user_id
                    header('Location: home1.php'); // Redirect to home1.php
                    exit();
                } else {
                    error_log("Invalid login for email: $email");
                    echo '<script>alert("Email or Password is incorrect");</script>';
                }
            }
            $stmt->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
    <style>
        body {
            background-image: url("images/abt.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .login_outer {
            width: 360px;
            max-width: 100%;
            margin: auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        #btn {
            background-color: rgb(41, 128, 185);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        #btn:hover {
            background-color: rgb(31, 97, 145);
        }
        a:link, a:visited {
            background-color: white;
            color: black;
            border: 2px solid skyblue;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-top: 5px;
            margin-left: 5px;
            border-radius: 5px;
        }
        a:hover, a:active {
            background-color: rgb(41, 128, 185);
            color: white;
        }
    </style>
    <script>
        function password_show_hide() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye");
            var hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }

        function validateForm() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (email === "" || password === "") {
                alert("Please fill all the fields.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>

    <div class="href" align="left">
        <a href="./index.php">Back</a>
    </div>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center m-0" style="height: 100vh;">
            <div class="login_outer">
                <form action="" onsubmit="return validateForm()" method="post" id="login" autocomplete="off">
                    <h4 align="center">Login</h4>
                    <hr>
                    <div class="form-row" align="center">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="password_show_hide();">
                                        <i class="fas fa-eye" id="show_eye"></i>
                                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="submit" name="save" id="btn" value="Login">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
