<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/webmypham/css/style.css">
    <link rel="stylesheet" href="/webmypham/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <!-- <link rel="stylesheet" href="css/table.css"> -->
</head>

<body>
    <div class="main">
        <!--Phần header-->
        <div class="header">
            <!-- Phần đăng ký, đăng nhập-->
            <div class="header__navbar">
                <ul class="header__navbar--list">
                    <li class="header__navbar--item">
                        <i class="far fa-bell"></i> Thông báo
                    </li>
                    <li class="header__navbar--item">
                        <i class="far fa-question-circle"></i> Trợ giúp
                    </li>
                    <li class="header__navbar--item header__navbar--item--gach"><a href="formdangky.html">Đăng ký</a></li>
                    <li class="header__navbar--item"><a href="formdangnhapcss.html">Đăng nhập</a></li>
                </ul>
            </div>
            <!--Phần tìm kiếm-->
            <div class="header-search">
                <div class="header__logo">
                    <img src="/webmypham/images/logo.png" alt="">
                </div>
                <div class="header__search-text">
                    <input class="item" type="text" placeholder="Tìm kiếm">
                </div>
                <div class="header__search-icon">
                    <button class="item1"><i class="fas fa-search"></i></button>
                </div>

                <div class="header__cart">
                    <button class="item"><i class="fas fa-cart-plus"></i> Giỏ hàng</button>
                </div>
            </div>
        </div>
        <!--Phần menu-->
        <div class="menu">
            <ul class="menu__container">
                <li class="menu__item"><a href="#">Trang chủ </a></li>
                <li class="menu__item"><a href="#">Giới thiệu</a></li>
                <li class="menu__item"><a href="#">Sản phẩm</a></li>
                <li class="menu__item"><a href="#">Đăng ký đại lý</a></li>
                <li class="menu__item"><a href="#">Khuyến mại</a></li>
                <li class="menu__item"><a href="#">Kiểm tra đơn hàng</a></li>
                <li class="menu__item"><a href="#">Tuyển dụng</a></li>
                <li class="menu__item"><a href="#">Liên hệ</a></li>
            </ul>
        </div>
        <!--Phần banner-->
        <div class="para2">
            <div class="menudoc">
                <h4>danh mục sách</h4>
                <ul class="menu_ul">
                    <li class="menu_li"><a href="" class="a1">Sản phẩm dưỡng da</a></li>
                    <li class="menu_li"><a href="">Kem dưỡng da</a></li>
                    <li class="menu_li"><a href="">Sữa rửa mặt</a></li>
                    <li class="menu_li"><a href="">Dầu gội, sữa tắm</a></li>
                    <li class="menu_li"><a href="">Son, phấn nền</a></li>
                    <li class="menu_li"><a href="">Nước hoa</a></li>
                    <li class="menu_li"><a href="">Serum dưỡng da</a></li>
                    <li class="menu_li"><a href="">Kem chống nắng</a></li>
                </ul>
            </div>
            <div class="banner">
                <img src="/webmypham/images/banner.webp" alt="">
            </div>
        </div>
        <!--Phần thân-->
        <div class="content">
            <?php
            if (isset($content)) {
                echo $content;
            } else {
                include 'user/list.php';
            }
            ?>
            <!--Tin tức & Sự kiện-->
            <div class="text_title" style="margin-top: 50px;">Tin tức & Sự kiện</div>
            <hr>
            <div class="new">
                <div class="content13">
                    <img src="/webmypham/images/6096652077f59-nhung-loai-kem-chong-lao-hoa-tot-nhat.jpg">
                    <h5>Top 3 sản phẩm kem dưỡng da mắt bán chạy nhất Nhật Bản</h5>
                    <p class="date">15/08/2023</p>
                </div>
                <div class="content13">
                    <img src="/webmypham/images/37.png">
                    <h5>Khuyến mại giảm giá sập sàn lên tới 70% các sản phẩm của Vichy</h5>
                    <p class="date">16/08/2023</p>
                </div>
                <div class="content13">
                    <img src="/webmypham/images/pjimage-23.jpg">
                    <h5>Nước hoa Hàn mê mẩn: Yoona dùng mùi nhẹ nhàng mà sang trọng</h5>
                    <p class="date">15/08/2023</p>
                </div>
            </div>
        </div>
        <hr>
        <!--Phần footer-->
        <footer class="footer">
            <div class="footer1">
                <img src="/webmypham/images/logo.png" alt="">
                <p>Lầu 5, 387-389 Hai Bà Trưng Quận 3 TP HCM - Công Ty Cổ Phần Hercometic - 62 Lê Lợi, Quận 1, TP. HCM, Việt Nam Hercometic nhận đặt hàng trực tuyến và giao hàng tận nơi. KHÔNG hỗ trợ đặt mua và nhận hàng trực tiếp tại văn phòng cũng như tất cả Hệ Thống Hercometic trên toàn quốc.</p>
            </div>
            <div class="footer1">
                <h3>Thông tin liên hệ</h3>
                <p>Công Ty Cổ Phần Hercometic</p>
                <p>ĐKKD số 0110016683 do Sở kế hoạch và Đầu tư Tp Hà Nội cấp ngày 1/6/2022 </p>
                <p>Người đại diện:</p>
                <p>Email:</p>
                <p>Điện thoại:</p>
                <p>Địa chỉ:</p>
            </div>
            <div class="footer1">
                <h3>Dịch vụ</h3>
                <p>Điều khoản sử dụng</p>
                <p>Chính sách bảo mật thông tin cá nhân</p>
                <p>Chính sách bảo mật thanh toán</p>
                <p>Giới thiệu Hercometic</p>
                <p>Hệ thống trung tâm - nhà sách</p>
            </div>
            <div class="footer1">
                <h3>Hỗ trợ khách hàng</h3>
                <p>Chính sách đổi trả - hoàn tiền</p>
                <p>Chính sách bảo hành - bồi hoàn</p>
                <p>Giao hàng & vận chuyển</p>
                <p>Chính sách đổi trả hàng</p>
                <p>Phương thức thanh toán và xuất hóa đơn</p>
            </div>
        </footer>

</body>

</html>