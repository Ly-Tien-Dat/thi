<?php
require_once '../database.php';

function editAction($pdo)
{
    if (isset($_GET['id'])) {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $_GET['id']]);
        $user = $stmt->fetch();
        if ($user) {
            return $user;
        }

        die('Không có thông tin người dùng');
    } else {
        die('Không có thông tin người dùng');
    }
}

/** @var TYPE_NAME $pdo */
$user = editAction($pdo);

?>