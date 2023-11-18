<?php
    if (is_array($dm)) {
        extract($dm);
    }
?>
<div class="row">
            <div class="row frmtittle">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        Mã Loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên Loại <br>
                        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập Lại">
                        <a href="index.php?act=lisdm"><input type="button" value="Danh Sách"></a>
                        <!-- hang_hoa.php -->
                    </div>
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                        }
                        
                    ?>
                </form>
            </div>
        </div>
    </div>