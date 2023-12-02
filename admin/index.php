<?php 
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "../model/cart.php";

    include "header.php";

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case "listsp":
                if(isset($_POST['clickOK'])&&($_POST['clickOK'])){
                    $keyw=$_POST['keyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $keyw="";
                    $iddm=0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($keyw,$iddm);
                include "sanpham/list.php";
            break;
            case 'adddm':
                //Kiểm tra xem người dùng có click vào nút add hay không ?
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm thành công";
                }
                
                include "danhmuc/add.php";
                break;
            case 'lisdm':
                $listdanhmuc = loadall_danhmuc();

                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    
                    
                    $dm = loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="Cập nhật thành công";
                }
            
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/add.php";
                break;
            case 'addsp':
                //Kiểm tra xem người dùng có click vào nút add hay không ?
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    
                        $thongbao="Thêm thành công";
                      } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    
                }
                $listdanhmuc = loadall_danhmuc();
                // var_dump($listdanhmuc);
                include "sanpham/add.php";
                break;
            case 'lissp':
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];

                }else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw, $iddm);

                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)) {                   
                    $sanpham = loadone_sanpham($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/add.php";
                break;
                
            case 'dskh':
                $listtaikhoan = loadall_taikhoan();

                include "taikhoan/list.php";
                break;
            case 'xoatk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_taikhoan($_GET['id']);
                }
                
                $listtaikhoan = loadall_taikhoan("",0);
                include "taikhoan/list.php";
                break;
            case 'dsbl':
                $listbinhluan = loadall_binhluan(0);

                include "binhluan/list.php";
                break;
            case 'xoabl':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_binhluan($_GET['id']);
                }
                
                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            case 'thongke':
                $listthongke = loadall_thongke();

                include "thongke/list.php";
                break;
            case 'bieudo':
                $listthongke = loadall_thongke();
                include "thongke/bieudo.php";
                break;
            case 'lisdh':
                
                $listdh = loadall_order();
                $listtbl = loadall_tbl_order();

                include "donhang/list.php";
                break;
            case 'listbl':
                
                $listtbl = loadall_tbl_order();

                include "donhang/listtbl.php";
                break;
            case 'xoatbl':
                if(isset($_GET['id_order'])&&($_GET['id_order']>0)){
                    delete_tbl($_GET['id_order']);
                }
                
                $listtbl = loadall_tbl_order();
                include "donhang/listtbl.php";
                break;
            case 'suatbl':
                if(isset($_GET['id_order'])&&($_GET['id_order']>0)) {
                    $tbl =loadone_tbl($_GET['id_order']);
                }
                include "donhang/updatetbl.php";
                break;
            case 'updatetbl':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){   
                    $id_order = $_POST['id_order'];
                    $trangthai = $_POST['trangthai'];
                    update_tbl($id_order,$trangthai);
                    
                }
            
                $listtbl = loadall_tbl_order();
                include "donhang/listtbl.php";
                break;
            default:
                include "home.php";
                break;   
        }
    }else {
        include "home.php";
    }

    include "footer.php";
?>