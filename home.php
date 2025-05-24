<?php
$base = '/dethitotnghiep1';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user_id'])) {
    header("Location: $base/login.php");
    exit;
}

var_dump($_SESSION['role']);
if (isset($_SESSION['role']) && $_SESSION['role'] != 'customer') {
    header("Location: $base/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>