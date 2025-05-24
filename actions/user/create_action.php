<?php
require_once ('../../database.php');

function createAction($pdo)
{

    if(isset($_POST)){
        $sql =
            "INSERT INTO users (name, username, password, phone, email, gender, role)
VALUES (:name, :username, :password, :phone, :email, :gender, :role)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $_POST['name'],
            ':username' => $_POST['username'],
            ':password' => password_hash($_POST['password'], PASSWORD_BCRYPT) ,
            ':phone' => $_POST['phone'],
            ':gender'=> $_POST['gender'],
            ':role'=> $_POST['role'],
            ':email' => $_POST['email'],
        ]);
        $base = '/dethitotnghiep1';
        // Kiểm tra số dòng bị ảnh hưởng
        if ($stmt->rowCount() > 0) {
            header("Location: $base/user/list.php");
            exit;
        } else {
            die("Đăng ký không thành công");
        }
    }


}

/** @var TYPE_NAME $pdo */
createAction($pdo);
?>