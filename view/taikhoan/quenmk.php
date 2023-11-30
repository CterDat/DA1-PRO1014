<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="POST" action="index.php?action=fgpass">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Quên mật khẩu</h5>
                       
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tên đăng nhập</label> <br>
                            <input type="text" class="form-control" id="recipient-name" name="user_name" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mật khẩu</label> <br>
                            <input type="password" class="form-control" id="recipient-name" name="pass1" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Xác nhận mật khẩu</label> <br>
                            <input type="password" class="form-control" id="recipient-name" name="pass2" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <span><?=isset($mes)&& !empty($mes)?$mes:''?></span> <br>
                       
                        <button type="submit" class="btn btn-primary" name="btn_forgot_pass">Update</button>
                    </div>
                </div>
            </div>
        </form>
</body>
</html>