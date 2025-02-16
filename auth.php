<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: login.php');
        exit();
    }
}

function setAuthCookie($user_id) {
    // Set a secure authentication cookie that lasts for 30 days
    $token = bin2hex(random_bytes(32));
    $expiry = time() + (30 * 24 * 60 * 60); // 30 days
    
    setcookie('auth_token', $token, [
        'expires' => $expiry,
        'path' => '/',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Strict'
    ]);
    
    // Store the token in the database (you'll need to create this table)
    $conn = mysqli_connect("localhost", "root", "", "food");
    $stmt = $conn->prepare("INSERT INTO auth_tokens (user_id, token, expiry) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user_id, $token, date('Y-m-d H:i:s', $expiry));
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

function clearAuthCookie() {
    setcookie('auth_token', '', [
        'expires' => time() - 3600,
        'path' => '/',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Strict'
    ]);
} 