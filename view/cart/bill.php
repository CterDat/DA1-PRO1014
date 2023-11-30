            <div class="">
            <form action="index.php?act=billcomfirm" method="post">
            
                <div  style=" margin: 20px; light-height: 60px;">Thông tin đặt hàng</div>
                <table class="table table-striped">
                <?php
                    if(isset($_SESSION['user'])){
                        $name=$_SESSION['user']['user'];
                        $address=$_SESSION['user']['address'];
                        $email=$_SESSION['user']['email'];
                        $tel=$_SESSION['user']['tel'];
                    }else{
                        $name="";
                        $address="";
                        $email="";
                        $tel="";
                    }
                ?>
                <tr>
                    <td>Người đặt hàng</td>
                    <td><input type="text" name="name" value="<?=$name?>"></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="address"  value="<?=$address?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?=$email?>"></td>
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td><input type="text" name="tel" value="<?=$tel?>"></td>
                </tr>
                </table>
        
            
                <div class="theme_inner_title" style=" margin: 20px; light-height: 60px;">Phương thức thanh toán</div>
                    
                        <table class="table table-striped">
                                <tr>
                                    <td><input type="radio" name="pttt">Trả tiền khi nhận hàng</td>
                                    <td><input type="radio" name="pttt">Chuyển khoản ngân hàng</td>
                                    <td><input type="radio" name="pttt">Thanh toán online</td>
                                </tr>
                        </table>
                    
                     
            
           
            <div class="theme_inner_title" style=" margin: 20px; light-height: 60px;">Giỏ hàng</div>
            <table class="table table-striped">
                
                <?php
                    viewcart(0);
                ?>
                
            </table>
        <input type="submit" name="dongy" value="Đồng ý đặt hàng">              
                  
            
            
        </form>
        </div>
        
       

    
