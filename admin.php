<?php
session_start();
include 'db.php';

// if(!isset($_SESSION['username']) || $_SESSION['role'] != 'admin'){
//     die("ban khong co quyen truy cap");
// }

$result = $conn->query("SELECT * FROM users");
?>

<h3>Thêm user mới</h3>
<form action="add.php" method="post">
    Username : <input type="text" name="username" id="">
    Ho ten : <input type="text" name="name" id="">
    Password : <input type="password" name="password" id="">
    Role
    <select name="role" id="">
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select>
    <button type="submit" name="add_user">Thêm</button>
</form>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Name</th>
        <th>Password</th>
        <th>Role</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['username']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['password']; ?></td>
            <td><?= $row['role']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>">Sua</a>
                <a href=""></a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>