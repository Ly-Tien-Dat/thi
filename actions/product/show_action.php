<?php
require_once '../database.php';

function showAction($pdo)
{
    if (isset($_GET['id'])) {
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $_GET['id']]);
        $product = $stmt->fetch();
        if ($product) {
            return $product;
        }

        die('Không có thông tin người dùng');
    } else {
        die('Không có thông tin người dùng');
    }
}

/** @var TYPE_NAME $pdo */
$product = showAction($pdo);

?>