<div class="boxright">

    <div class="mb">
        <div class="box_title">TÀI KHOẢN</div>
        <?php if (!$_SESSION) { ?>
        <div class="box_content form_account">
            <form action="index.php?act=dangnhap"  method="POST">
            <h4>Tên đăng nhập</h4><br>
            <input type="text" name="user" id="dangnhap">
            <h4>Mật khẩu</h4><br>
            <input type="password" name="pass" id=""><br>
            <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
            <br><input type="submit" value="Đăng nhập" name="dangnhap">
            <br>
            <?php if (isset($loginMess)&&$loginMess != '') {
                echo $loginMess;
            } ?>
            </form>
            <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
        </div>
        <?php } else { ?>
            <p>Hello <?=$_SESSION['user']?></p>
            <button><a href="index.php?act=dangxuat" style="text-decoration: none;" class="dangxuat">Đăng xuất</a></button>
        <?php } ?>

        <?php
        if (isset($_SESSION['user']) && $_SESSION['user'] == "admin") {
            echo "<a href='admin/index.php?act=listsp' target='_blank'><input class='mr20' type='button' value='Quản lý sản phẩm'></a>";
        }
        ?>
    </div>
    <div class="mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
            <ul>
                <?php
                      foreach($dsdm as $dm){
                          extract($dm);
                          $linkdm="index.php?act=sanpham&iddm=".$id;
                          echo '<li><a href="">'.$name.' </a></li>';

                      }
                      ?>
                <!--                     <li><a href="">Đồng hồ </a></li>-->
                <!--                     <li><a href="">Laptop</a></li>-->
                <!--                     <li><a href="">Điện thoại</a></li>-->
                <!--                     <li><a href="">Ipad</a></li>-->
                <!--                     <li><a href="">Tivi</a></li>-->
            </ul>
        </div>
        <div class="box_search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" id="" placeholder="Từ khóa tìm kiếm" name="keyword">
            </form>
        </div>
    </div>
    <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
    <div class="mb">
        <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
        <div class="box_content">
            <?php
                    foreach($dstop10 as $sp){
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $img=$img_path.$img;
                        echo'<div class="selling_products" style="width:100%;">
                  <img src="'.$img.'" alt="anh" style:"height:70px">
                  <a href="'.$linksp.'" >'.$name.'</a>
                </div>';
                    }
                    ?>
        </div>
    </div>
</div>
