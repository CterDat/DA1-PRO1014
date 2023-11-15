<?php
// Thêm danh mục 
function insert_danhmuc($tenloai){
    $sql = "insert into danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
}
// Xóa danh mục
function delete_danhmuc($id){
    $sql = "delete from danhmuc where id = ".$id;
    pdo_query($sql);
}
// Hiển thị danh sách
function loadall_danhmuc(){
    $sql = "select * from danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

// Hiển thị 1 loại 
function loadone_danhmuc($id){
    $sql = "select * from danhmuc where id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;            
}
// Cập nhật hoặc sửa thông tin của danh mục
function update_danhmuc($id,$tenloai){
    $sql = "update danhmuc set name='".$tenloai."'where id=".$id;
    pdo_execute($sql);
}
?>
