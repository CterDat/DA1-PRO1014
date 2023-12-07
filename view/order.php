<style>
    h1 {
  text-align: center;
  margin-top: 30px;
  color: red;
  font-size: 30px;
  margin-bottom: 30px;
}

    h2{
        margin-bottom: 20px;
        font-size: 24px;
        text-align: center
        ;}
    input[type="text"],input[type="tel"],input[type="email"]{
        padding: 8px 10px;
        width: 300px;
        margin-bottom: 10px;
        border-radius: 10px;
    }
    input[type="submit"]{
        padding: 10px 20px;
        margin-top: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
    }
    .page-order{
        display: flex;}
    .form-order{
        width: 70%;
        padding-left: 300px;
        
    }
    .form-order h2{
        color: red;
        margin-bottom: 20px;
        font-size: 20px;
        padding-right: 530px;
    }
    .sub-order{
        width: 30%;
        padding-right: 100px;
    }
    .sub-order h2{
        color: red;
        font-size: 20px;
    }
    .sub-order td,.sub-order th
    {padding: 5px;
    }
    .sub-order td:first-child,.sub-order th:first-child{
        width: 70%;
    }
    .sub-order td:last-child,.sub-order th:last-child{
        text-align: right;
    }
    .btn{
        background-color: #FF6600;
        color: white;
    }
</style>
<!-- <img src="images/payment-logo.png" alt="Logo thanh toán"> -->
<h1>Thanh toán</h1>
<hr>
<div class="page-order">

    <div class="form-order" style="margin: 0 auto;">
        <form action="" method="post" >
         
            <h2>Thông tin khách hàng</h2>
            <div><input type="text" name="txthoten" id="" placeholder="Họ và tên" required></div>
            <div><input type="tel" name="txttel" id="" placeholder="Số điện thoại" required></div>
            <div><input type="email" name="txtemail" id="" placeholder="Email" required></div>
            <div><input type="text" name="txtaddress" id="" placeholder="Địa chỉ" required></div>
            <h3>Phương thức thanh toán</h3>
            <p><input type="radio" name="pttt" id="" value="1" required> Thanh toán khi giao hàng</p>
            <p><input type="radio" name="pttt" id="" value="2" required> Chuyển khoản ngân hàng</p>
            <p><a href="view/thanhtoanmomo_atm.php"> Liên kết qua momo</a></p>
            <?php if(isset($_SESSION['user'])) {
                extract($_SESSION['user'])?>
            <input type="submit" value="Xác nhận đặt hàng" name="order_confirm" class="btn">
            <?php }else{  ?>
            <input type="submit" value="Xác nhận đặt hàng" name="lg" class="btn btn-danger">
            <?php } ?>    
        </form>
        <!-- <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
         action="view/thanhtoanmomo_atm.php">
         <input type="submit"  name="momo" value="Thanh toán momo atm" class="btn btn-danger">
        </form> -->
    </div>
    
    <div class="sub-order">
        <h2>Đơn hàng</h2>
        <table class="table table-striped">
            <tr>
                <th scope="col">Sản phẩm</th>
                <th scope="col">Thành tiền</th>
            </tr>
            <?php 
                // print_r($cart);
                foreach ($cart as $item) {
            ?>
            <tr>
                <td>
                <?php echo $item['name'];?><br>
                    <small>SL: <?php echo $item['quantity'];?></small>
                </td>
                <td><?php echo number_format($item['quantity']*$item['price'], 0, ",", "."); ?> ₫</td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td><b>Tổng tiền</b></td>
                <td><b><?php echo number_format($_SESSION['resultTotal'], 0, ",", "."); ?> ₫</b></td>
            </tr>
        </table>
    </div>
</div>