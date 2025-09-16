<?php
$serverName = "127.0.0.1";   // hoặc "localhost"
$username   = "root";        // user mặc định của XAMPP
$password   = "";            // mật khẩu mặc định (trống)
$database   = "luongweb";    // database bạn đã tạo trong phpMyAdmin
$port       = 3308;          // cổng MySQL mặc định trong XAMPP

$conn = new mysqli($serverName, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

?>
