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
        <form method="post" action="edit.php">
            <td><?php echo $row['id']; ?><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td>
            <td><input type="text" name="username" value="<?php echo $row['username']; ?>"></td>
            <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
            <td><input type="text" name="password" value="<?php echo $row['password']; ?>"></td>
            <td>
                <select name="role">
                    <option value="user" <?php if ($row['role'] == 'user') echo 'selected'; ?>>User</option>
                    <option value="admin" <?php if ($row['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                </select>
            </td>
            <td>
                <button type="submit" name="edit_user">Sửa</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Xóa user này?');">Xóa</a>
            </td>
        </form>
    <?php endwhile; ?>
</table>