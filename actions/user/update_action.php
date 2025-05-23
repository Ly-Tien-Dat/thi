<?php
require_once('../../database.php');

function updateAction($pdo)
{

    if (isset($_POST)) {
        $sql =
            "UPDATE users
            SET name = :name, 
            username = :username, 
            phone=:phone, 
            gender =:gender,
            email=:email
            WHERE id=:id;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $_POST['name'],
            ':username' => $_POST['username'],
            ':id' =>$_POST['id'],
            ':phone' => $_POST['phone'],
            ':gender' => $_POST['gender'],
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
updateAction($pdo);
?>