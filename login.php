<?php
session_start();
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST['username'];
    $password =$_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        $_SESSION['username']= $user['usename'];
        $_SESSION['name']= $use['name'];
        header("Location: index.html");
    }else{
        echo "dang nhap that bai";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <button type="submit">login</button>
</form>