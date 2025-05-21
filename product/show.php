<?php
require_once '../actions/product/show_action.php';

ob_start();

?>

<h1 class="title mb-10"><b>Chỉnh sửa người dùng</b></h1>

<div class="flex">
    <div class="item-29">
        <img src="/baitap-mau/uploads/<?= $product['image'] ?>" alt="Avatar" class="image">
    </div>

    <section class="item-70" class="cards">
        <div class="card">
            <h3><b><?= $product['name'] ?></b></h3>
            <hr>
            <p>
                Giá tiền:
                <del><b style="color: red;"><?= number_format($product['price_old']) ?>đ</b></del>
                &nbsp;&nbsp;
                <b style="font-size: 20px;"><?= number_format($product['price_new']) ?>đ</b>
            </p>
            <p>Số lượng: <b><?= $product['quantity'] ?> sản phẩm</b></p>
        </div>
    </section>

    <div class="item-100">
        <div class="card">
            <span class="mb-10">Mô tả:</span>
            <p><?= $product['description'] ?></p>
        </div>
    </div>

</div>


<?php
$content = ob_get_clean();
include '../admin.php';
?>