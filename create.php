<?php
require_once 'database.php';

if (isset($_POST) && count($_POST) > 0) {
    $sql =
        "INSERT INTO users (name, username, password, role)
VALUES (:name, :username, :password, :role)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name' => $_POST['name'],
        ':username' => $_POST['username'],
        ':password' => $_POST['password'],
        ':role' => $_POST['role'],
    ]);
    // Kiểm tra số dòng bị ảnh hưởng
    if ($stmt->rowCount() > 0) {
        header("Location: ./admin.php");
        exit;
    } else {
        die("Đăng ký không thành công");
    }
}else{
    $role = [
        'admin' => 'Quản trị',
        'customer' => 'Khách hàng'
    ];
}


ob_start();
?>

<h1 class="mb10 tmnd">Thêm mới người dùng</h1>

<div class="form">
    <form action="" class="test" method="POST">
        <div>
            <div class="mb10">
                <label class="lb" for="name">Tên người dùng</label>
                <input type="text" id="name" name="name" value=""
                    placeholder="Nhập họ tên..">
            </div>
            <div class="mb10">
                <label class="lb" for="username">Tài khoản</label>
                <input type="text" id="username" name="username"
                    placeholder="Nhập tài khoản..">
            </div>

            <div class="mb10">
                <label class="lb" for="password">Mật khẩu</label>
                <input type="text" id="password" name="password" placeholder="Nhập mật khẩu..">
            </div>

            <div class="mb10">
                <label class="lb" for="role">Quyền</label>
                <select name="role" id="role">
                    <?php foreach ($role as $k => $v): ?>
                        <option value="<?= $k ?>"><?= $v ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <button type="submit" class="btn-ct">Thêm mới</button>
    </form>
</div>

<?php
$content = ob_get_clean();

include 'admin.php';
?>