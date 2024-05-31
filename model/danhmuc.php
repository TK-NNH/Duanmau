<?php
function loadall_danhmuc(){
    $sql="select * from danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from danhmuc where id=".$iddm;  // Sửa thành bảng danhmuc thay vì sanpham
        $dm = pdo_query_one($sql);

        if ($dm) {
            return $dm['name'];
        } else {
            return "";
        }
    } else {
        return "";
    }
}