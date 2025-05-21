<?php
// require_once '../actions/list_action.php';

ob_start();
?>
<header>
    <h1>Thêm mới người dùng</h1>
</header>
<div>
    <a href="index.php" class="mb-2 ws-btn w3-block w3-margin-top w3-padding-16">Quay lại</a>
</div>
<div class="form">
    <form action="actions/create_action.php" class="test" method="POST" enctype="multipart/form-data">
        <label for="name">Ảnh sản phẩm</label>
        <div>
            <img src="" id="preview" class="avatar" alt="Ảnh avatar">
        </div>
        <input type="file" id="avatar" name="image" placeholder="Chọn ảnh.." required>

        <label for="name">Tên sản phẩm</label>
        <input type="text" id="name" name="name" placeholder="Nhập tên sản phẩm..">

        <label for="price">Giá cũ sản phẩm</label>
        <input type="number" id="price_old" name="price_old" placeholder="Nhập giá tiền..">

        <label for="price">Giá mới sản phẩm</label>
        <input type="number" id="price" name="price" placeholder="Nhập giá tiền..">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Nhập email..">

        <label for="phone">Số điên thoại</label>
        <input type="text" id="phone" name="phone" placeholder="Nhập số diện thoại..">

        <button type="submit" class="ws-btn">Thêm mới</button>
    </form>
</div>


<script>
    const imageInput = document.getElementById('avatar');
    const preview = document.getElementById('preview');

    imageInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            }

            reader.readAsDataURL(file);
        }
    });
</script>


<?php
$content = ob_get_clean();

include '../admin.php';
?>