<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .table {
       width: 70%;
       border-collapse: collapse;
       margin-left: 200px;
       margin-bottom: 100px;
}

.tr, th{
    background-color: #FF6600;
    color: white;
}
    </style>
</head>
<body>
<div class="flex-auto p-0 md:p-4">                                 
                                    <table class="table table-striped">
                                        <h1 style=" text-align: center;margin-bottom: 70px;margin-top: 40px; color:#FF6600">Chi Tiết Đơn Hàng</h1>
                                    <tr>
                                        <th scope="col">ID Order</th>
                                        <th scope="col">ID PRO</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Thành tiền</th>
                                        <th scope="col">TỔNG TIỀN</th>
                                        <th scope="col"></th>
                                    </tr>
                                    <?php
                                        foreach ($listor as $or) {
                                            extract($or);
                                            $huy="index.php?act=chitiet&id=".$id_order;
                                            $xacnhan="index.php?act=chitiet&id=".$id_order;
                                            
                                            echo '<tr>
                                            <td>'.$id_order.'</td>
                                            <td>'.$id_pro.'</td>
                                            <td>'.$giamua.'</td>
                                            <td>'.$soluong.'</td>
                                            <td>'.$thanhtien.' <u>đ</u></td>
                                            <td><a href="'.$xacnhan.'"> <input type="button" value="Xác nhận" class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium"></a><a href="'.$huy.'"> <input type="button" value="Hủy" class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium"></a></td>
                                        </tr>';
                                        }
                                    ?>
                                    
                                    </table>
                                </div><!--end card-body--> 
                                
                            </div><!--end card-->   
</body>
</html>