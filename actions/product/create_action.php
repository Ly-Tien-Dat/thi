<?php
require_once ('../../database.php');

function createAction($pdo)
{

    if(isset($_POST)){
        $image  = uploadFile($_FILES['image']);
        $sql =
            "INSERT INTO products (name, price_new, price_old, quantity, image, description)
VALUES (:name, :price_new, :price_old, :quantity, :image, :description)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $_POST['name'],
            ':price_new' => $_POST['price_new'],
            ':price_old' => $_POST['price_old'],
            ':quantity' => $_POST['quantity'],
            ':image' => $image,
            ':description' => $_POST['description']
        ]);

        // Kiểm tra số dòng bị ảnh hưởng
        if ($stmt->rowCount() > 0) {
            header("Location: /baitap-mau/product/list.php");
            exit;
        } else {
            die("Đăng ký không thành công");
        }
    }


}


//Hàm xử lý upload ảnh
function uploadFile($avatar = ""){
    // khởi tạo đường dẫn file
    $fileName = "";
    // xử lý ảnh trước
    if ($avatar && $avatar['error'] === UPLOAD_ERR_OK) {
        // sinh ra đường dẫn tạm thời hay còn gọi là bản nháp
        $fileTmpPath = $avatar['tmp_name'];
        // tên ảnh từ nguồn ảnh
        $fileName = time() . '_' . $avatar['name'];
        // kiểu ảnh : png , jpg,.....
        $fileType = mime_content_type($avatar['tmp_name']);
        // Cần 1 thư mục quản lý ảnh
        $uploadDir = '../../uploads/';
        // Cấp quyền cho những tệp ảnh sau
        $allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];

        // đường dẫn ảnh để lưu lại
        $fileResult = $uploadDir .  $fileName;


        // trường hợp thư mục không tồn tại thì tạo
        // Không có thì bỏ qua
        if(!file_exists($uploadDir)){
            if (!mkdir($uploadDir, '0777', true) && !is_dir($uploadDir)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $uploadDir));
            }
        }

        if (!in_array($fileType, $allowedTypes)) {
            die("File không đúng định dạng : $fileType");
        }


        if(!move_uploaded_file($fileTmpPath, $fileResult)){
            die('Lỗi lưu ảnh!');
        }
    }
    return $fileName;
}

/** @var TYPE_NAME $pdo */
createAction($pdo);
?>