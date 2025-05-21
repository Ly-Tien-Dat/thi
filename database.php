<?php
// Thông tin kết nối
$host = 'localhost'; // host mặc định từ từ xampp
$db   = 'baitap'; // Tên cơ sở dữ liệu
$user = 'root'; // tài khoản đăng nhập cơ sở dữ liệu
$pass = ''; // mật khẩu đăng nhập cơ sở dữ liệu

try {
    // Cấu hình database
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // Thiết lập chế độ lỗi ví dụ trường hợp truy vấn sai hiện thị bảo lỗi
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Thiết lập chế độ fetch mặc định, dữ liệu trả về không bị lộn xộn
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Lỗi kết nối database: " . $e->getMessage());
}
?>