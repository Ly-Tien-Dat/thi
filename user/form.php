<div class="item mb-10">
    <label for="name">Tên người dùng</label>
    <input type="text" id="name" name="name" value="<?= isset($user['name']) ? $user['name'] : '' ?>"
        placeholder="Nhập họ tên..">
</div>
<div class="item mb-10">
    <label for="username">Tài khoản</label>
    <input type="text" id="username" name="username" value="<?= isset($user['username']) ? $user['username'] : '' ?>"
        placeholder="Nhập tài khoản..">
</div>
<?php if (!isset($user)): ?>
    <div class="item mb-10">
        <label for="password">Mật khẩu</label>
        <input type="password" id="password" name="password" placeholder="Nhập mật khẩu..">
    </div>
<?php endif; ?>

<div class="item mb-10">
    <label for="gender">Giới tính</label>
    <select name="gender" id="gender">
        <?php foreach ($gender as $k => $v): ?>
            <option value="<?= $k ?>" <?= isset($user['gender']) ? ($k == $user['gender'] ? 'selected' : '') : '' ?>><?= $v ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>

<div class="item mb-10">
    <label for="phone">Số điện thoại</label>
    <input type="number" id="phone" name="phone" value="<?= isset($user['phone']) ? $user['phone'] : '' ?>"
        placeholder="Nhập điện thoại..">
</div>

<div class="item mb-10">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Nhập email.."
        value="<?= isset($user['email']) ? $user['email'] : '' ?>">
</div>