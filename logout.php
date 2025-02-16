<?php
require_once 'auth.php';

// Clear session
session_start();
session_destroy();

// Clear authentication cookie
clearAuthCookie();

// Redirect to login page
header('Location: login.php');
exit();
?> 