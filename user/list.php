<?php
require_once '../actions/user/list_action.php';
$base = '/dethitotnghiep1';
$gender = [
    'male' => 'Nam',
    'female' => 'Nữ',
    'other'  => 'Khác'
];
ob_start();
?>

<h1 class="title mb-10"><b>Danh sách người dùng</b></h1>
<div class="mb-10">
    <a href="create.php" class="ws-btn mb-2">Thêm mới</a>
</div>
<table class="my_table">
    <tr>
        <th>STT</th>
        <th>Tên Người dùng</th>
        <th>Tên đăng nhập</th>
        <th>Giới tính</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    <?php foreach ($users as $k => $user) { ?>
        <tr>
            <td><?= ++$k ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $gender[$user['gender']] ?></td>
            <td><?= $user['phone'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <a href="<?=$base?>/user/edit.php?id=<?= $user['id'] ?>" class="ws-btn">Sửa</a>
                <form action="<?=$base?>/actions/user/delete_action.php" method="POST" style="display: inline">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <button class="ws-btn" type="submit" style="margin: 0">Xóa</button>
                </form>
            </td>
        </tr>
    <?php } ?>


</table>

<?php
$content = ob_get_clean();

include '../admin.php';
?>