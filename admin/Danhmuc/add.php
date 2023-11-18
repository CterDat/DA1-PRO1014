<div class="row">
            <div class="row frmtittle">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã Loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên Loại <br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Thêm mới" name="themmoi">
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