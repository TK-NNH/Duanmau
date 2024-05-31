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
    font-size: 14px;
  }
</style>
<main class="catalog  mb ">
  <div class="boxleft">
    <div class="banner">
      <img id="banner" src="./img/anh0.jpg" alt="">
      <button class="pre" onclick="pre()">&#10094;</button>
      <button class="next" onclick="next()">&#10095;</button>
    </div>

    <div class="items">
      <?php
      $i = 0;
      foreach ($spnew as $sp) {
        extract($sp);
        $hinh =  $img_path . $img;
        if ($trangthai == 0) {
          if (($i == 2) || ($i == 5) || ($i == 8)) {
            $mr = "";
          } else {
            $mr = "mr";
          }
          $linksp = "index.php?act=sanphamct&idsp=" . $id;

          echo '<div class="post-item ' . $mr . '">
                  <div class="post-item_img">
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
<script>
   var album=[];
for(var i=0;i<3;i++){
    album[i]=new Image();
    album[i].src="./img/anh"+i+".jpg";
}
 var interval=setInterval(slideshow,5000);
index=0;
function slideshow(){
    index++;
    if(index>2){
        index=0;
    }
    document.getElementById("banner").src=album[index].src;
   
    
}
function next(){
    index++;
    if(index>2){
        index=0;
    }
    document.getElementById("banner").src=album[index].src;
   
}
function pre(){
    index--;
    if(index<0){
        index=2;
    }
    document.getElementById("banner").src=album[index].src;
   
}
  </script>
<!-- BANNER 2 -->