<?php
    session_start();
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/taikhoan.php";
    include "model/order.php";
    include "model/cart.php";
    include "global.php";

    ob_start();
    
    $spnew=loadall_sanpham_home();
    $dsdm=loadall_danhmuc();
    $dstop10=loadall_sanpham_top10();
    include "view/header.php";
    if ((isset($_GET['act']))&&($_GET['act']!="")) {
        $act=$_GET['act'];
        switch ($act) {
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            case 'sanphamct':
                if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
                    $id=$_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    $spcungloai=load_sanpham_cungloai($id,$iddm);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }
                break;
            case 'dh':  
                $listtbl = loadall_tbl_order();

                include "view/cart/mybill.php";
                break;
            case 'chitiet':  
                if (isset($_GET['id_order'])&&($_GET['id_order']>0)){
                    loadone_orderdetail($_GET['id_order']);
                }
                $listor=loadall_order();
                include "view/cart/ctsp.php";
                break;
            case "listCart":
            // Kiểm tra xem giỏ hàng có dữ liệu hay không
            if (!empty($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];

                // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
                $productId = array_column($cart, 'id');
                
                // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
                $idList = implode(',', $productId);
                
                // Lấy sản phẩm trong bảng sản phẩm theo id
                $dataDb = loadone_sanphamCart($idList);
                // var_dump($dataDb);
            }
            include "view/listCartOrder.php";
            break;
            case 'suatbl':
                if(isset($_GET['id_order'])&&($_GET['id_order']>0)) {
                    $id_order =$_GET['id_order'];
                    update_xn($id_order,4);
                    header("Location: index.php?act=dh");
                }
                
                
                break;
            // case "camon":
            //     include "view/camon.php";
            //     break;
            case "order":
            if (isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                
                if (isset($_POST['order_confirm'])) {
                    $txthoten = $_POST['txthoten'];
                    $txttel = $_POST['txttel'];
                    $txtemail = $_POST['txtemail'];
                    $txtaddress = $_POST['txtaddress'];
                    $pttt = $_POST['pttt'];
                    // date_default_timezone_set('Asia/Ho_Chi_Minh');
                    // $currentDateTime = date('Y-m-d H:i:s');
                    if (isset($_SESSION['user'])) {
                        $id_user = $_SESSION['user']['id'];
                    } else {
                        $id_user = 0;
                    }
                    $idBill = addOrder($id_user, $txthoten, $txttel, $txtemail, $txtaddress, $_SESSION['resultTotal'], $pttt);
                    foreach ($cart as $item) {
                        addOrderDetail($idBill, $item['id'], $item['price'], $item['quantity'], $item['price'] * $item['quantity']);
                    }
                    unset($_SESSION['cart']);
                    $_SESSION['success'] = $idBill;
                    header("Location: index.php?act=success");
                }
                include "view/order.php";
            } else {
                header("Location: index.php?act=listCart");
            }
            break;

            case "success":
                if (isset($_SESSION['success'])) {
                    include 'view/success.php';
                } else {
                    header("Location: index.php");
                }
                break;
                case 'sanpham':
                    if (isset($_POST['kyw'])&&($_POST['kyw']!="")){
                        $kyw=$_POST['kyw'];
                    }else{
                        $kyw="";
                    }
                    if (isset($_GET['iddm'])&&($_GET['iddm']>0)) {
                        $iddm=$_GET['iddm'];
                        
                    }else{
                        $iddm=0;
                    }
                    $dssp=loadall_sanpham($kyw,$iddm);
                    $tendm=load_ten_dm($iddm);
                    include "view/sanpham.php";
                    break;
            case 'dangky':
                if (isset($_POST['dangky'])&&($_POST['dangky'])) {
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    insert_taikhoan($email,$user,$pass,$address,$tel);
                    $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập.";
                    header('Location: index.php?act=dangnhap');
                }
                include "view/taikhoan/register.php";
                break;
    

            case 'dangnhap':
                
                if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($user,$pass);
                    if (is_array($checkuser)) {
                        $_SESSION['user']= $checkuser;
                        $_SESSION['pass'] = $checkuser;
                        header('Location: index.php');
                        
                    }else{
                        $thongbao="Tài khoản không tồn tại!";    
                    }
                    
                }
                include "view/taikhoan/login.php";
                break;
            case 'edit_taikhoan':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $id=$_POST['id'];
                    update_taikhoan($id,$user,$pass,$email,$address,$tel);
                    $_SESSION['user']=checkuser($user,$pass);
                    header('location: index.php?act=edit_taikhoan');   
                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
            
            case 'quenmk':
                if (isset($_POST['guiemail'])&&($_POST['guiemail'])) {
                    $email=$_POST['email'];

                    $checkemail=checkemail($email);
                    if (is_array($checkemail)) {
                        $thongbao="Mật khẩu của bạn là:".$checkemail['pass'];
                    }else{
                        $thongbao="Email không tồn tại!";
                    }
                }
                include "view/taikhoan/quenmk.php";
                break;
            
            case 'gioithieu':
                
                include "view/gioithieu.php";
                break;
            case 'lienhe':
                
                include "view/lienhe.php";
                break;
            
            case 'thoat':
                session_unset();
                header('Location: index.php');
                include "view/home.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    }else {
        include "view/home.php";
    }
    
    include "view/footer.php";
    ob_end_flush();
?>