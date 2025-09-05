<?php
include 'db.php';
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username,name,password) VALUES('$username','$name','$password')";
    if($conn->query($sql)=== TRUE){ 
        echo "dang ky thanh cong   !  <a href='./index.html'>trang chu</a> ";
    }
    else{
        echo "Error: ".$conn->error;
    }
 }

?>
<form action="register.php" method="post">
    Username : <input type="text" name="username" id="">
    Ho ten : <input type="text" name="name" id="">
    Password : <input type="password" name="password" id="">
    <button type="submit">dang ky</button>
</form>