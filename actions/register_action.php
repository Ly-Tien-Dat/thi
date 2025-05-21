<?php
// truyền kết nối database vào
require_once('../database.php');

function loginAction($pdo) {
    // các dữ liệu từ form đẩy lên server xử lý
// lấy dữ liệu để lưu lại lên server
if (isset($_POST)) {
    // xử lý upload ảnh
    $avatar = uploadFile($_FILES['avatar']);
    // Mã hóa mật khẩu trường hợp bảo mật
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    // Bắt đầu truy vấn lưu dữ liệu 
    // ? : giá trị tương đương với từng cột 
    $sql = "INSERT INTO users(name, username, password,avatar) 
    VALUES (:name, :username, :password, :avatar)";
    // từ câu truy vấn đưa vào cơ sở dữ liệu để xử lý
    $stmt = $pdo->prepare($sql);
    // Định dạng kiểu cho khi lưu , s là string , i là interger , d là double.....
    $stmt->execute([
        'name' => $_POST["name"],
        'username' => $_POST['username'],
        'password' => $password,
        'avatar' => $avatar
    ]);

    // Kiểm tra số dòng bị ảnh hưởng
    if ($stmt->rowCount() > 0) {
        header("Location: ../login.php");
        exit;
    } else {
       die("Đăng ký không thành công");
    }
} else {
    die("Yêu cầu không hợp lệ.");
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
        $uploadDir = '../uploads/';
        // Cấp quyền cho những tệp ảnh sau
        $allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];

        // đường dẫn ảnh để lưu lại
        $fileResult = $uploadDir .  $fileName;


        // trường hợp thư mục không tồn tại thì tạo
        // Không có thì bỏ qua
        if(!file_exists($uploadDir)){
            mkdir($uploadDir, '0777', true);
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

loginAction($pdo);