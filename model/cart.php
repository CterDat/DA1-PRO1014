<?php
function loadall_order(){
    $sql = "select * from order_detail";
    $listdh = pdo_query($sql);
    return $listdh;
}

function loadall_tbl_order(){
    $sql ="
    SELECT id_order, id_user, hoten, sdt, email, diachi, tongtien,
    CASE
    WHEN pttt = 1 THEN 'Thanh toán khi nhận hàng'
    WHEN pttt = 2 THEN 'Chuyển khoản'
    ELSE 'Không xác định'
    END AS pttt_text,
    ngaydathang,
    CASE
    WHEN trangthai = 1 THEN 'Đang chờ duyệt'
    WHEN trangthai = 2 THEN 'Đã xác nhận'
    WHEN trangthai = 3 THEN 'Đang vận chuyển'
    WHEN trangthai = 4 THEN 'Hoàn thành'
    ELSE 'Không xác định'
    END AS trangthai_text
    FROM tbl_order;
    ";   
    $listtbl = pdo_query($sql);
    return $listtbl;
}
?>
