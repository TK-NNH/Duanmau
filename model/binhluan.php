<?php 
    function loadall_binhluan($idsp){
        $sql = "
            SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
            WHERE sanpham.id = $idsp;
        ";
        $result =  pdo_query($sql);
        return $result;
    }
    function insert_binhluan($idpro, $noidung){
        $date = date('Y-m-d');
        $sql = "
            INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
            VALUES ('$noidung','1','$idpro','$date');
        ";
        //echo $sql;
        //die;
        pdo_execute($sql);
    }

//     //function insert_binhluan($idpro, $noidung, $iduser){
//     $date = date('Y-m-d');
//     $sql = "
//         INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
//         VALUES ('$noidung', '$iduser', '$idpro', '$date');
//     ";
//     pdo_execute($sql);
// }

// <input type="hidden" name="iduser" value="php $_SESSION['user']['id']  Thêm form gửi bình luận
?>