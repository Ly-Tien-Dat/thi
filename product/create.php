<?php
$base = '/dethitotnghiep1';
ob_start();
?>

<h1 class="title mb-10"><b>Thêm mới người dùng</b></h1>

<div class="mb-10">
    <a href="index.php" class="mb-2 ws-btn w3-block w3-margin-top w3-padding-16">Quay lại</a>
</div>
<div class="form">
    <form action="<?=$base?>/actions/product/create_action.php" class="test" method="POST" enctype="multipart/form-data">
        <div class="flex">
            <div class="item mb-10">
                <label for="name">Ảnh sản phẩm</label>
                <input type="file" id="avatar" name="image" placeholder="Chọn ảnh.." required>
            </div>

            <div class="item mb-10">
                <label for="name">Tên sản phẩm</label>
                <input type="text" id="name" name="name" placeholder="Nhập tên sản phẩm..">
            </div>

            <div class="item mb-10">
                <label for="price_old">Giá cũ sản phẩm</label>
                <input type="number" id="price_old" name="price_old" placeholder="Nhập giá tiền..">
            </div>

            <div class="item mb-10">
                <label for="price_new">Giá mới sản phẩm</label>
                <input type="number" id="price_new" name="price_new" placeholder="Nhập giá tiền..">
            </div>

            <div class="item mb-10">
                <label for="quantity">Số lượng còn hàng</label>
                <input type="number" id="quantity" name="quantity" placeholder="Nhập số lượng..">
            </div>
        </div>
        <div class="mb-10">
            <label for="description">Mô tả sản phẩm</label>
            <textarea name="description" id="description"></textarea>
        </div>


        <button type="submit" class="ws-btn">Thêm mới</button>
    </form>
</div>

<?php
$content = ob_get_clean();

include '../admin.php';
?>