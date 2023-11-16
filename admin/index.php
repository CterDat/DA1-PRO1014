<?php 
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case '':
                # code...
                break;
        }
    }else {
        include "home.php";
    }
?>