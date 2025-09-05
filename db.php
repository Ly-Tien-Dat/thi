<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = "banoto";
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("ket noi that bai " . $conn->connect_error);
}