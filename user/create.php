<?php
$base = '/dethitotnghiep1';
$gender = [
    'male' => 'Nam',
    'female' => 'Nữ',
    'other' => 'Khác'
];
ob_start();
?>

<h1 class="title mb-10"><b>Thêm mới người dùng</b></h1>

<div class="mb-10">
    <a href="<?=$base?>/user/list.php" class="mb-2 ws-btn w3-block w3-margin-top w3-padding-16">Quay lại</a>
</div>
<div class="form">
    <form action="<?= $base ?>/actions/user/create_action.php" class="test" method="POST" enctype="multipart/form-data">
        <div class="flex">
            <?php include 'form.php' ?>
        </div>

        <button type="submit" class="ws-btn">Thêm mới</button>
    </form>
</div>

<?php
$content = ob_get_clean();

include '../admin.php';
?>