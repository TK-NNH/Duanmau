<style>
    td {
        padding: 0 20px;
    }

    .box_content1 {
        display: flex;
    }

    .box_content1 img {
        float: left;
    }

    .box_content1 p {
        float: right;
        margin: 10px 20px;
    }
    
    #loginButton {
        display: inline-block;
        padding: 10px 0px;
        
        color: black;
        cursor: pointer;
        border: none;
    }

a {
    text-decoration: none;
}
</style>
<main class="catalog  mb ">
    <div class="boxleft">
        <?php extract($sanpham); ?>
        <div class="  mb">
            <div class="box_title">
                <?php echo $name; ?>
            </div>
            <div class="box_content1">
                <?php
                $img = $img_path . $img;
                echo "<img src='$img' width='300'>";
                echo "<p>$mota</p>";
                ?>

            </div>
        </div>

        <div class="mb">
            <div class="box_title">BÌNH LUẬN</div>
            <div class="box_content2  product_portfolio binhluan ">
                <table>
                    <?php foreach ($binhluan as $value) : ?>
                        <tr>
                            <td><?php echo $value['noidung'] ?></td>
                            <td><?php echo $value['user'] ?></td>
                            <td><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="box_search">
                <?php if (isset($_SESSION['user'])) : 
                ?>
                    <form action="index.php?act=sanphamct&idsp=<?= $id ?>" method="POST">
                        <input type="hidden" name="idpro" value="<?= $id ?>">
                        <input type="text" name="noidung">
                        <input type="submit" name="guibinhluan" value="Gửi bình luận">
                    </form>

                <?php else : 
                ?>
                    <p>Vui lòng đăng nhập để gửi bình luận.</p>
                    <label for="dangnhap" id="loginButton" >Đăng Nhập</label>
                <?php endif; ?>
            </div>


        </div>

        <div class=" mb">
            <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="box_content">
                <?php foreach ($sanphamcl as $value) : ?>
                    <li>
                        <a href="index.php?act=sanphamct&idsp=<?= $value['id'] ?>">
                            <?= $value['name'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php
    include "view/boxright.php";
    ?>

</main>