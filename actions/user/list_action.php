<?php
require_once ('../database.php');

function listAction($pdo)
{
    $sql = "SELECT * FROM users";
    $stmp = $pdo->prepare($sql);
    $stmp->execute();
    return $stmp->fetchAll();
}

/** @var TYPE_NAME $pdo */
$users = listAction($pdo);
?>