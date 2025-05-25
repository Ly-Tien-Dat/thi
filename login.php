<?php
require_once('database.php');

if (isset($_POST) && count($_POST) > 0) {
    $username = $_POST['username'];

    $password = $_POST['password'];
    // chuẩn bị truy vấn
    $sql = "SELECT `id`,`name`,`password`,`role` FROM users  WHERE `username`=:username";
    // truy vấn kết nối lên cơ sở dữ liệu
    $stmt = $pdo->prepare($sql);
    // set kiểu dữ liệu
    // $stmt->bind_param("s", $username);
    $stmt->execute([
        'username' => $username,
    ]);

    // Lấy kết quả
    $user = $stmt->fetch();

    // Mật khẩu không trùng khớp
    if ($user && $_POST['password'] != $user['password']) {
        die('Đăng nhập sai');
    }

    //Chuyển hướng trang
    if ($user['role'] == 'admin') {
        header("Location: /webmypham/admin.php");
        exit;
    } else {
        header("Location: /webmypham/index.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Form-v4 by Colorlib</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/login.css" />
</head>

<body class="form-v4">
    <div class="page-content">
        <div class="form-v4-content">
            <form class="form-detail" action="" method="post" id="myform">
                <h2>
                    <center>ĐĂNG NHẬP</center>
                </h2>
                <div class="form-row form-row-1">
                    <label for="name">Tài khoản</label>
                    <input type="text" name="username" id="username" class="input-text">
                </div>
                <div class="form-row">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" id="password" class="input-text" required>
                </div>
                <div class="form-row-last">
                    <input type="submit" name="login" class="register" value="Đăng nhập">
                </div>
            </form>
        </div>
    </div>
</body>

</html>