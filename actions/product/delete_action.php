<?php

require_once '../../database.php';
function deleteAction($pdo)
{
    if(isset($_POST)){
        $id = $_POST['id'];
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);

        if ($stmt->rowCount() > 0) {
            header("Location: /baitap-mau/product/list.php");
            exit;
        } else {
            die("Xóa người dùng bị lỗi");
        }
    }
}

deleteAction($pdo);
?>