
                    
                        
<?php
    if(isset($bill)&&(is_array($bill))){
        extract($bill);
    }       
       
?>
<div class="flex-auto p-0 md:p-4">
    <div class="">Thông tin đơn hàng</div>
    <div class="">
        <li>- Mã Đơn Hàng: <?=$bill['id'];?></li> 
        <li>- Ngày đặt hàng: <?=$bill['ngaydathang'];?></li> 
        <li>- Tổng đơn hàng: <?=$bill['total'];?></li> 
        <li>- Phương thức thanh toán: <?=$bill['bill_pttt'];?></li>
    </div>
</div>             
<div class="flex-auto p-0 md:p-4">
    <div class="">Thông tin đơn hàng</div>                              
    <table class="table table-striped">
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Hình</th>
        <th scope="col">Sản phẩm</th>
        <th scope="col">Đơn Giá</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Thành tiền</th>
        
    </tr>
    <?php
        
        show_chitiet_bill($billct);
    ?>
    
    </table>
    
</div>
            
                
                        
                                      

