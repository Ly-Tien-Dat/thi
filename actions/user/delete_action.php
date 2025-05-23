<?php

require_once '../../database.php';
function deleteAction($pdo)
{
    if (isset($_POST)) {
        $id = $_POST['id'];
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);
        $base = '/dethitotnghiep1';
        if ($stmt->rowCount() > 0) {
            header("Location: $base/user/list.php");
            exit;
        } else {
            die("Xóa người dùng bị lỗi");
        }
    }
}

deleteAction($pdo);
?>