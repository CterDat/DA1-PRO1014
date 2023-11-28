<?php
if (isset($_SESSION['mes'])) {
    $mes = $_SESSION['mes'];
    unset($_SESSION['mes']);
}
?>
<body>
    <section class="d-flex">
        <div class="img-bg">
            
            <img src="view/css/images/1.jpg" alt="Hình Ảnh Minh Họa">
        </div>
        <div class="noi-dung">
            <div class="form">
                <h2>LOGIN</h2>
                <form action="index.php?act=dangnhap" method="POST">
                    <div class="input-form">
                        <span>Tên Người Dùng</span>
                        <input type="text" name="user">
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="pass">
                    </div>
                    <div class="nho-dang-nhap">
                        <label><input type="checkbox" name=""> Nhớ Đăng Nhập</label>
                    </div>
                    <div class="input-form">
                        <input type="submit" value="Đăng Nhập" name="dangnhap">
                    </div>
                    <div class="input-form">
                        <p>Bạn Chưa Có Tài Khoản? <a href="register.php">Đăng Ký</a></p>
                    </div>
                    <div class="input-form">
                    <a href="quenmk.php">Quên mật khẩu</a>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <!--MODAL thêm danh mục sản phẩm BOOTSTRAP-->
    

</body>

