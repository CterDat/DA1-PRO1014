<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Container styles */
        /* .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        } */

        /* Form styles */

        
        /* form {
            display: flex;
            flex-direction: column;
        }

        form div {
            margin-bottom: 15px;
        }

        /* Input styles */
        /* input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Button styles */
        /* input[type="submit"],
        input[type="reset"] {
            background-color: red;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        } */

        /* input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        } */

        /* Message styles */
        /* .message {
            margin-top: 15px;
            color: #ff0000;
        }  */ 
        
    </style>
</head>
<body>
    <!-- Your HTML code here -->
</body>
</html>
     <!-- END HEADER -->
          
    <div>
    <section class="d-flex">
        <div class="img-bg">
            
            <img src="view/css/images/log.png" alt="Hình Ảnh Minh Họa" style="width: 70%,  margin-left= 20px">
        </div>
        <div class="noi-dung">
            <div class="form">
            <h2>Đổi mật khẩu</h2>
                <div class="container">
                    <?php
                    if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                    ?>
                    <form action="index.php?act=edit_taikhoan" method="post">
                    <div>
                    <div class="input-form">
                        <span>Email</span>
                        <input type="email" name="email" value="<?=$email?>" placeholder="email">
                    </div>
                    <div class="input-form">
                        <span>  Tên đăng nhập</span>
                        <input type="text" name="user" value="<?=$user?>"  placeholder="user">
                    </div>
                    <div class="input-form">
                        <span>  Mật khẩu</span>
                        <input type="password" name="pass" value="<?=$pass?>"  placeholder="pass">
                    </div>
                    <div class="input-form">
                        <span>   Địa chỉ</span>
                        <input type="text" name="address"value="<?=$address?>"  placeholder="address">
                    </div>
                    <div class="input-form">
                        <span> Điện thoại</span>
                        <input type="text" name="tel"value="<?=$tel?>"  placeholder="tel">
                    </div>

                    <input type="hidden" name="id" value="<?=$id?>">
                    <div class="input-form">
                    <input type="submit" value="Cập nhật" name="capnhat">>
                    </div>
                    <div class="input-form">
                        <p>Bạn nhập sai?   <input type="reset" value="Nhập lại"></p>
                    </div>
                  </form>
                  <?php
                  if(isset($thongbao)&&($thongbao!="")){
                 echo $thongbao;
                      }
                  ?>
                  </div>
                </div>
                </div>
        </div>
    </section>