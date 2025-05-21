<?php
require_once '../actions/product/list_action.php';

ob_start();
?>

<h1 class="title mb-10"><b>Danh sách Sản phẩm</b></h1>
<div class="mb-10">
    <a href="create.php" class="ws-btn mb-2">Thêm mới</a>
</div>
<table class="my_table">
    <tr>
        <th>STT</th>
        <th>Ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá mới</th>
        <th>Giá cũ</th>
        <th>Thao tác</th>
    </tr>
    <?php foreach ($products as $k => $product) { ?>
        <tr>
            <td><?= ++$k ?></td>
            <td><img src="/baitap-mau/uploads/<?= $product['image'] ?>" alt="Ảnh sản phẩm" class="avatar"></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['quantity'] ?></td>
            <td><?= $product['price_new'] ?></td>
            <td><?= $product['price_old'] ?></td>
            <td>
                <a href="/baitap-mau/product/show.php?id=<?= $product['id'] ?>" class="ws-btn">Xem</a>
                <form action="/baitap-mau/actions/product/delete_action.php" method="POST" style="display: inline">
                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
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