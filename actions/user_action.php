<?php
require_once('database.php');

function userAction($pdo) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $sql = "SELECT * FROM users WHERE id=:id";
    $stmp = $pdo->prepare($sql);
    $stmp->execute([
        'id' => $_SESSION['user_id']
    ]);
    return $stmp->fetch();
}

$user = userAction($pdo);