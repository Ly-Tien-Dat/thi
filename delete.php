<?php
session_start();
include 'db.php';

// if($_SESSION['role'] != 'admin'){
//     die("ban khong co quyen truy cap");
// }

if(isset($_GET['id'])){
    $is = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    if($conn->query($sql) === TRUE ){
        header("Location: admin.php?msg=xoa thanh cong");
    }else{
        header("Location: admin.php?msg=xoa that bai");
    }
}
?>