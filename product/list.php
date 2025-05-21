<?php
require_once '../actions/list_action.php';

ob_start();
?>

<h1 class="title">Danh sách Sản phẩm</h1>
<div>
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
            <td><img src="<?= $product['image'] ?>" alt="Ảnh sản phẩm" class="avatar"></td>    
            <td><?= $product['name'] ?></td>
            <td><?= $product['quantity'] ?></td>
            <td><?= $product['price_new'] ?></td>
            <td><?= $product['price_old'] ?></td>
            <td>
                <a href="show.php?id=<?= $product['id']?>" class="ws-btn">Xem</a>
            </td>
        </tr>
    <?php } ?>


</table>

<?php
$content = ob_get_clean();

include '../admin.php';
?>