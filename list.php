<?php
require_once 'database.php';

if (isset($_POST) && count($_POST) > 0) {
    $id = $_POST['id'];
    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $id
    ]);
    if ($stmt->rowCount() > 0) {
        header("Location: ./admin.php");
        exit;
    } else {
        die("Xóa người dùng bị lỗi");
    }
} else {
    $sql = "SELECT * FROM users";
    $stmp = $pdo->prepare($sql);
    $stmp->execute();
    $users = $stmp->fetchAll();

    $role = [
        'admin' => 'Quản trị',
        'customer' => 'Khách hàng'
    ];
}

?>

<h1 class="mb10 tmnd">Sửa người dùng</h1>
<div class="mb10">
    <a href="create.php" class="btn-ct">Thêm mới</a>
</div>
<table class="my_table" border="1" cellspacing="0" cellpadding="10" style="width: 100%;">
    <tr>
        <th>STT</th>
        <th>Tên Người dùng</th>
        <th>Tên đăng nhập</th>
        <th>Mật khẩu</th>
        <th>Quyền</th>
        <th>Hành động</th>
    </tr>


    <?php foreach ($users as $k => $user) { ?>
        <tr>
            <td><?= ++$k ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $user['password'] ?></td>
            <td><?= $role[$user['role']] ?></td>
            <td>
                <!-- Nút sửa -->
                <a href="./edit.php?id=<?= $user['id'] ?>" class="btn-ct">Sửa</a>
                <!-- Nút xóa -->
                <form action="" method="POST" style="display: inline">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <button class="btn-ct" type="submit" style="margin: 0" onclick="return confirmDelete()">Xóa</button>
                </form>
            </td>
        </tr>
    <?php } ?>


</table>

<script>
function confirmDelete() {
  if(!confirm("Bạn có muốn xóa!")){
    return false; // Quan trọng để chặn hoàn toàn
  }
}
</script>