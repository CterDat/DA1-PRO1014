<?php
function viewcart($del){
    global $img_path;
    $tong=0;
    $i=0;
    if($del == 1){
        $xoasp_th='<th>Thao tác<th/>';
        
    }else{
        $xoasp_th="";
        
    };
    echo'
    <tr>
                    <th >Hình</th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    '.$xoasp_th.'
    </tr>
    ';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh=$img_path.$cart[2];
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
        if($del == 1){
            
            $xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>';
        }else{
            
            $xoasp_td="";
        };

        
        echo '
        
        <tr>
            <td><img src="'.$hinh.'" alt="" height="80px"></td>
            <td>'.$cart[1].'</td>
            <td>'.$cart[3].'</td>
            <td>'.$cart[4].'</td>
            <td>'.$ttien.'</td>
            '.$xoasp_td.'
        </tr>';
        $i+=1;
    }
    echo '
    <tr>
        <td colspan="4">Tổng đơn hàng</td>
        
        <td>'.$tong.'</td>
        <td></td>
    </tr>
    ';
}

function show_chitiet_bill($bill){
    global $img_path;
    $tong=0;
    $i=0;
    echo'
    <tr>
                    <th >Hình</th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
    </tr>
    ';
    foreach ($listbill as $cart) {
        $hinh=$img_path.$cart['img'];
    
        $tong+=$cart['thanhtien'];        
        echo '
        
        <tr>
            <td><img src="'.$hinh.'" alt="" height="80px"></td>
            <td>'.$cart['name'].'</td>
            <td>'.$cart['price'].'</td>
            <td>'.$cart['soluong'].'</td>
            <td>'.$cart['thanhtien'].'</td>
        </tr>';
        $i+=1;
    }
    echo '
    <tr>
        <td colspan="4">Tổng đơn hàng</td>
        
        <td>'.$tong.'</td>
        <td></td>
    </tr>
    ';
} 


function tongdonhang(){
    
    $tong=0;
    
    
    foreach ($_SESSION['mycart'] as $cart) {
       
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;

    }
    return $tong;
} 

function insert_bill($name,$email,$adress,$tel,$pttt ,$ngaydathang,$tongdonhang){
    $sql="insert into bill(bill_name,bill_email,bill_adress,bill_tel,bill_pttt,ngaydathang,total) values('$name','$email','$adress','$tel','$pttt' ,'$ngaydathang','$tongdonhang')";
    pdo_execute_return_lastInsertId($sql);
}

function insert_cart($iduser,$idpro,$img,$name,$price ,$soluong,$thanhtien, $idbill){
    $sql="insert into cart(iduser,idpro,img,name,price,soluong,thanhtien, idbill) values('$iduser','$idpro','$img','$name','$price' ,'$soluong','$thanhtien','$idbill')";
    pdo_execute($sql);
}

function loadone_bill($id){
    $sql = "select * from bill where id=".$id;
    $bill = pdo_query_one($sql);
    return $bill;            
}
function loadall_cart($idbill){
    $sql = "select * from cart where idbill=".$idbill;
    $bill = pdo_query($sql);
    return $bill;            
}
?>