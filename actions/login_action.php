<?php
function loginAction($pdo) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST['username'];
    
        // chuẩn bị truy vấn
        $sql = "SELECT `id`,`name`,`password` FROM users  WHERE `username`=:username";
        // truy vấn kết nối lên cơ sở dữ liệu
        $stmt = $pdo->prepare($sql);
        // set kiểu dữ liệu
        // $stmt->bind_param("s", $username);
        $stmt->execute([
            'username' => $username
        ]);
        if ($stmt->rowCount() == 0) {
            die("Tài khoản không có trong hệ thống");
        }
    
        // Lấy kết quả
        $user = $stmt->fetch();

        // Mật khẩu không trùng khớp
        if (!password_verify($_POST['password'], $user['password'])) {
            die('Đăng nhập sai');
        }
        var_dump('ádsad');
        // lưu phiên làm việc người dùng lên trình duyệt
        $_SESSION['user_id'] = $user['id'];
        header('Location: ../index.php');
        exit;
    }
}

loginAction($pdo);
?>