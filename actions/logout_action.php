<?php
function logoutAction() {

    // Bắt đầu session
    session_start();
    // xóa hết session    
    session_unset();


// Hủy session trên server
session_destroy();

// Chuyển hướng nếu cần
header('Location: ../login.php');
}

logoutAction();
?>