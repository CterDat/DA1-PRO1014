<h1>SSSSSSSSSSSSSS</h1><br>
<h1>SSSSSSSSSSSSSS</h1><br>
<h1>SSSSSSSSSSSSSS</h1><br>
<h1>SSSSSSSSSSSSSS</h1>



<div class="row">
            <div class="row frmtittle mb">
                <h1>DANh SÁCH HÀNG HÓA</h1>
            </div>
            <form action="index.php?act=lissp" method="post">
                            <input type="text" name="kyw">
                            <select name="iddm" >
                            <option value="0" selected>Tất cả</option>
                            <?php 
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option> ';
                                }
                            ?>   
                            </select>
                            <input type="submit" name="listok" value="GO">
            </form>
            <div class="row frmcontent">
                <form action="#" method="post">
                    <div class="row mb10 frmdsloai">
                       <table>
                            <tr>
                                <th></th>
                                <th>Mã Loại</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Hình</th>
                                <th>Giá</th>
                                <th>Mô tả</th>
                                <th>Lượt Xem</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach ($listsanpham as $sanpham) {
                                    extract($sanpham);
                                    $suasp="index.php?act=suasp&id=".$id;
                                    $xoasp="index.php?act=xoasp&id=".$id;
                                    $hinhpath="../upload/".$img;
                                    if(is_file($hinhpath)){
                                        $hinh = "<img src='".$hinhpath."' height='80'";
                                    }else{
                                        $hinh="no photo";
                                    }
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$mota.'</td>
                                    <td>'.$luotxem.'</td>
                                    <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"> <input type="button" value="Xóa"></a></td>
                                </tr>';
                                }
                            ?>
                            
                       </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                    </div>
                </form>
            </div>
        </div>
