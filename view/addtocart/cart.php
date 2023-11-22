
            <div class="boxtitle">Giỏ Hành</div>
            <table class="table table-striped">
                <tr>
                    <th >Hình</th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th >Thao tác</th>
                </tr>
                <?php
                    $tong=0;
                    $i=0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh=$img_path.$cart[2];
                        $ttien=$cart[3]*$cart[4];
                        $tong+=$ttien;

                        $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a>';
                        echo '
                        <tr>
                            <td><img src="'.$hinh.'" alt="" height="80px"></td>
                            <td>'.$cart[1].'</td>
                            <td>'.$cart[3].'</td>
                            <td>'.$cart[4].'</td>
                            <td>'.$ttien.'</td>
                            <td>'.$xoasp.'</td>
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
                ?>
                
            </table>
        </div>
  

    <div class="row">
        <input type="submit" value="Đông Ý Đặt Hàng"> <a href="index.php?act=delcart"><input type="button" value="Xóa Giỏ Hàng"></a>    
        </div>
    </div>
    </div> 