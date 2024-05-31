<style>
  .post {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 30px;

  }

  .post-item {
    position: relative;
    overflow: hidden;

  }

  .post-item img {
    width: 100%;
    vertical-align: middle;
    transition: 2s ease-in-out;
    margin: 20px;
    transition: transform 1s ease-in-out, filter 0.3s ease-in-out;
    max-height: 500px;
    height: 500px;
  }

  .post-item img:hover {

    transform: scale(1.1);
  }

  .post-item .sub {
    text-align: center;
    padding-top: 15px;
    position: absolute;
    bottom: -165px;
    background-color: #FFF;
    width: 100%;
    transition: .5s ease-in-out;
  }

  .sub a {
    color: black;
    font-size: 24px;
    text-decoration: none;
  }

  .add:hover {
    background-color: white;
  }

  .name-item {
    font-size: 20px;
  }

  a.book {
    font-size: 20px;
    display: block;
    padding: 10px 0;
    color: white;
    background-color: black;
  }

  a.book:hover {
    transform: scale(1.1);
  }

  .post-item:hover .sub {
    bottom: 0;
  }

  .content {
    text-align: center;
  }

  .content a {
    text-decoration: none;
  }

  .dangxuat {
    text-decoration: none;
    color: black;
    font-size: 15px;
  }

  .box_content a {
    color: black;
    font-size: 20px;
  }
</style>
<main class="catalog  mb ">
  <div class="boxleft">
    <?php
    // Khởi tạo biến tên danh mục
    $danhMucTitle = "";

    if (isset($_GET['act']) && $_GET['act'] === 'sanpham') {
      if (isset($_GET['iddm'])) {

        $iddm = $_GET['iddm'];

        $sql = "SELECT name FROM danhmuc WHERE id = $iddm";
        $result = pdo_query_one($sql);
        if ($result) {
          $danhMucTitle = $result['name'];
        }
      }
    }
    ?>

    <h2>DANH MỤC: <?php echo $danhMucTitle; ?></h2>
    <div class="items">
      <?php
      $i = 0;
      foreach ($dssp as $sp) {
        extract($sp);
        $hinh =  $img_path . $img;
        $linksp = "index.php?act=sanphamct&idsp=" . $id;

        if (($i == 2) || ($i == 5) || ($i == 8)) {
          $mr = "";
        } else {
          $mr = "mr";
        }

        echo '<div class="post-item ' . $mr . '">
                <div class="post-item_img" >
            <img src="' . $hinh . '" alt="">
            <section class="sub">
            <a class="add" href="' . $linksp . '">' . $name . '</a>
            </section>
         </div>
         
         <section class="content">
         <a class="name-item" href="' . $linksp . '">' . $name . '</a>
          <p class="name-item">' . $price . '  VND</p>
          </section>
          
       </div>';
        $i += 1;
      }
      ?>

      <!--           <div class="box_items">-->
      <!--             <div class="box_items_img">-->
      <!--                <img src="img/iphoneX.jpg" alt="">-->
      <!--                <div class="add" href="">ADD TO CART</div>-->
      <!--             </div>-->
      <!--              <a class="item_name" href="">SamSung J4</a>-->
      <!--              <p class="price">$4000</p>-->
      <!--              -->
      <!--           </div>-->
      <!--           <div class="box_items">-->
      <!--             <div class="box_items_img">-->
      <!--                <img src="img/iphoneX.jpg" alt="">-->
      <!--                <div class="add" href="">ADD TO CART</div>-->
      <!--             </div>-->
      <!--              <a class="item_name" href="">SamSung J4</a>-->
      <!--              <p class="price">$4000</p>-->
      <!--              -->
      <!--           </div>-->
      <!--           <div class="box_items">-->
      <!--             <div class="box_items_img">-->
      <!--                <img src="./img/item1.jpg" alt="">-->
      <!--                <div class="add" href="">ADD TO CART</div>-->
      <!--             </div>-->
      <!--              <a class="item_name" href="">SamSung J4</a>-->
      <!--              <p class="price">$4000</p>-->
      <!--              -->
      <!--           </div>-->
      <!--           <div class="box_items">-->
      <!--             <div class="box_items_img">-->
      <!--                <img src="./img/item0.jfif" alt="">-->
      <!--                <div class="add" href="">ADD TO CART</div>-->
      <!--             </div>-->
      <!--              <a class="item_name" href="">SamSung J4</a>-->
      <!--              <p class="price">$4000</p>-->
      <!--              -->
      <!--           </div>-->
      <!--           <div class="box_items">-->
      <!--             <div class="box_items_img">-->
      <!--                <img src="./img/galaxyJ4.jfif" alt="">-->
      <!--                <div class="add" href="">ADD TO CART</div>-->
      <!--             </div>-->
      <!--              <a class="item_name" href="">SamSung J4</a>-->
      <!--              <p class="price">$4000</p>-->
      <!--              -->
      <!--           </div>-->
      <!--           <div class="box_items">-->
      <!--             <div class="box_items_img">-->
      <!--                <img src="./img/iphoneX.jpg" alt="">-->
      <!--                <a class="add" href="">ADD TO CART</a>-->
      <!--             </div>-->
      <!--              <a class="item_name" href="">SamSung J4</a>-->
      <!--              <p class="price">$4000</p>-->
      <!--              -->
      <!--           </div>-->
      <!--           <div class="box_items">-->
      <!--             <div class="box_items_img">-->
      <!--                <img src="./img/item0.jfif" alt="">-->
      <!--                <div class="add" href="">ADD TO CART</div>-->
      <!--             </div>-->
      <!--              <a class="item_name" href="">SamSung J4</a>-->
      <!--              <p class="price">$4000</p>-->
      <!--              -->
      <!--           </div>-->
      <!--           <div class="box_items">-->
      <!--             <div class="box_items_img">-->
      <!--                <img src="./img/anh5.jpg" alt="">-->
      <!--                <div class="add" ><a href="danhsach.html">ADD TO CART</a></div>-->
      <!--             </div>-->
      <!--              <a class="item_name" href="">SamSung J4</a>-->
      <!--              <p class="price">$4000</p>-->
      <!--           </div>-->
    </div>
  </div>
  <?php
  include_once "view/boxright.php";
  ?>

</main>
<!-- BANNER 2 -->