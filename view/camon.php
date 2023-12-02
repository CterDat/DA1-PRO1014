<?php
 

 if(isset($_GET['partnerCode'])){
    $code_order= rand(0,9999);
    $partnerCode= $_GET['partnerCode'];
    $orderId= $_GET['orderId'];
    $amount= $_GET['amount'];
    $orderInfo= $_GET['orderInfo'];
    $orderType= $_GET['orderType'];
    $transId= $_GET['transId'];
    $payType= $_GET['payType'];
    
    $insert_momo = "INSERT INTO tbl_momo(partner_Code,order_Id, amount, order_Info, order_Type, trans_Id, pay_Type,code_cart) 
    VALUE('".$partner_Code."','".$order_Id."','".$amount."','".$order_Info."','".$order_Type."','".$trans_Id."','".$pay_Type."','".$code_cart."')";
    $cart_query= mysqli_query($mysqli, $insert_momo);
    if($cart_query){
        foreach ($_SESSION['cart'] as $key => $value) {
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_order_details = "INSERT INTO tbl_cart_detail(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
            mysql_query($mysqli,$insert_order_details);
        }
        echo '<h3>Giao dich bằng MOMO thành công</h3>';
        echo '<p>Vui lòng xem vào trang  <a target="_blank" href="#">Lịch sử đơn hàng</a>Để xem chi tiết đơn hàng của bạn</p>' ;
    }else{
        echo 'Giao dịch MOMO thất bại';
    }
 }


?>