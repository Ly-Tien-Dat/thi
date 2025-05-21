<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form-v4 by Colorlib</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v4">
<div class="page-content">
    <div class="form-v4-content">
        <form class="form-detail" action="actions/login_action.php" method="post" id="myform">
            <h2><center>ĐĂNG NHẬP</center></h2>
            <div class="form-row form-row-1">
                <label for="name">Tài khoản</label>
                <input type="text" name="username" id="username" class="input-text">
            </div>
            <div class="form-row  ">
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" id="password" class="input-text" required>
            </div>
            <div class="form-row-last">
                <input type="submit" name="login" class="register" value="Đăng nhập">
                <p>Chưa có tài khoản vui lòng <a href="register.php">Đăng ký</a></p>
            </div>
        </form>
    </div>
</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>