<?php
session_start();
include 'db.php';

// if($_SESSION['role'] != 'admin'){
//     die("ban khong co quyen truy cap");
// }

if(isset($_POST['add_user'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "INSERT INTO users (username,name,password,role) VALUES ('$username','$name',$password','$role')";
    if($conn->query($sql) === TRUE ){
        header("Location: admin.php?msg=them thanh cong");
    }else{
        header("Location: admin.php?msg=them that bai");
    }
}