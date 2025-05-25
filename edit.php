<?php
require_once 'database.php';

if (isset($_POST) && count($_POST) > 0) {
    $sql =
        "UPDATE users
            SET name = :name, 
            username = :username, 
            password=:password, 
            role=:role
            WHERE id=:id;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name' => $_POST['name'],
        ':username' => $_POST['username'],
        ':id' => $_POST['id'],
        ':password' => $_POST['password'],
        ':role' => $_POST['role'],
    ]);
    // Kiểm tra số dòng bị ảnh hưởng
    if ($stmt->rowCount() > 0) {
        header("Location: /webmypham/admin.php");
        exit;
    } else {
        die("Đăng ký không thành công");
    }
} else {
    $user = [];
    if (isset($_GET['id'])) {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $_GET['id']]);
        $user = $stmt->fetch();
    }
    $role = [
        'admin' => 'Quản trị',
        'customer' => 'Khách hàng'
    ];
}



ob_start();
?>

<h1 class="mb10 tmnd">Sửa người dùng</h1>

<div class="form">
    <form action="" class="test" method="POST" enctype="multipart/form-data">
        <div class="flex">
            <input type="hidden" value="<?= $user['id'] ?>" name="id">
            <div class="mb10">
                <label class="lb" for="name">Tên người dùng</label>
                <input type="text" id="name" name="name" value="<?= isset($user['name']) ? $user['name'] : '' ?>"
                    placeholder="Nhập họ tên..">
            </div>
            <div class="mb10">
                <label class="lb" for="username">Tài khoản</label>
                <input type="text" id="username" name="username" value="<?= isset($user['username']) ? $user['username'] : '' ?>"
                    placeholder="Nhập tài khoản..">
            </div>

            <div class="mb10">
                <label class="lb" for="password">Mật khẩu</label>
                <input type="text" id="password" name="password" value="<?= isset($user['password']) ? $user['password'] : '' ?>" placeholder="Nhập mật khẩu..">
            </div>

            <div class="mb10">
                <label class="lb" for="role">Quyền</label>
                <select name="role" id="role">
                    <?php foreach ($role as $k => $v): ?>
                        <option value="<?= $k ?>" <?= isset($user['role']) ? ($k == $user['role'] ? 'selected' : '') : '' ?>><?= $v ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <button type="submit" class="btn-ct">Cập nhật</button>
    </form>
</div>

<?php
$content = ob_get_clean();

include 'admin.php';
?>