

<body>
    <section>
        <div class="img-bg">
        <img src="./view/css/images/log.png" alt="Hình Ảnh Minh Họa" style="width = 70%">
        </div>
        <div class="noi-dung">
            <div class="form">
                <h2>register</h2>
                <form action="index.php?act=dangky" method="POST">
                    <div class="input-form">
                        <span>Tên Người Dùng</span>
                        <input type="text" name="user" required>
                    </div>
                    <div class="input-form">
                        <span>Số điện thoại</span>
                        <input type="text" name="tel" required>
                    </div>
                    <div class="input-form">
                        <span>Email</span>
                        <input type="email" name="email" required>
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="pass" required>
                    </div>
                    <div class="input-form">
                        <span>Address</span>
                        <input type="text" name="address" required>
                    </div>
                    <div class="input-form">
                        <input type="submit" value="Đăng Ký" name="dangky">
                        
                    </div>

                </form>

            </div>
        </div>
    </section>
</body>

</html>
