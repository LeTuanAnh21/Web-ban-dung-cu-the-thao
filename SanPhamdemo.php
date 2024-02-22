<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">
    <title>Sản Phẩm</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">

    <link rel="stylesheet" href="css/responsive.css">
        
 
    </head>
    <body>
    <header class="header" >
        <a href="trangchu.php" class="header__logo"><img src="../images/logo.png" alt="logo"></a>
        <nav class="header__nav-bar">
            <ul class="nav-bar__items">
                <div class="icon__btn fas fa-times close-btn"></div>
                <li class="nav-bar__item"><a href="trangchu.php">Trang Chủ</a></li>
                <li class="nav-bar__item"><a href="gioithieu.php">Giới Thiệu</a></li>
                <li class="nav-bar__item">
                    <a class="item__sub-btn" href="sanphamdemo.php">Sản phẩm <!--<i class="fas fa-angle-down"></i>--></a>
                    <ul class="item__sub-menu">
                        <li class="sub-menu__sub-item more">
                            <a class="more-btn" href="SP_XEDAP.php">Xe đạp tập thể dục</a>
                        </li>
                        <li class="sub-menu__sub-item more">
                            <a class="more-btn" href="SP_MAYTAPCOBUNG.php">Máy tập cơ bụng</a>
                        </li>
                       
                        <li class="sub-menu__sub-item more">
                            <a class="more-btn" href="SP_GHEMASSAGE.php">Ghế massage</a>
                        </li>
                       
                        <li class="sub-menu__sub-item more">
                            <a class="more-btn" href="SP_MAYCHAYBO.php">Máy chạy bộ</a>
                        </li>
                        <li class="sub-menu__sub-item more">
                            <a class="more-btn" href="SP_THEHINHGD.php">Dụng cụ thể hình gia đình</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-bar__item"><a href="dangnhap.php">Đăng Nhập</a></li>
                <li class="nav-bar__item"><a href="dangky.php">Đăng Ký</a></li>
                <li class="nav-bar__item"><a href="lienhe.php">Liên Hệ</a></li>
            </ul>
        </nav>

        <div class="header__icons">
            <div class="icon__btn fas fa-bars menu-btn"></div>
            <div class="icon__btn fas fa-search search-btn"></div>
            <div class="icon__btn fas fa-shopping-cart cart-btn">
                <span class="cart-btn__quantity">0</span>
            </div>
        </div>

        <div class="header__search-form">
            <form action="" class="search-form">
                <input type="search" placeholder="Nhập nội dung cần tìm..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>
        </div>

    </header>
    
      <?php 
            include './connect_db.php';
            $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:4;
            $current_page = !empty($_GET['page'])?$_GET['page']:1;
            $offset = ($current_page - 1) * $item_per_page;
            $products = mysqli_query ($conn, "SELECT * FROM `sanpham` ORDER by `sp_ma` ASC LIMIT ".$item_per_page." OFFSET ".$offset."");
            $totalRecords = mysqli_query($conn, "SELECT * FROM `sanpham`");
            $totalRecords = $totalRecords->num_rows;
            $totalPages = ceil($totalRecords / $item_per_page);
      ?>
      
        <div style="margin: top 70px;" class="container">
           <br> <br><br> <br>
        
            <div class="product-items"> 
                <br>
        
            <h1 style="color: #2E4C6D; text-align: center; font-size: 4rem;" > Tất Cả sản phẩm</h1>
            
            <?php
                 
                while ($row = mysqli_fetch_array($products)) {   
            ?>
        

                    <div class="product-item">
                        <div class="product-img">
                        <a href="SP_detail.php? sp_ma=<?= $row['sp_ma'] ?>"><img src="../images/<?php echo  $row['sp_hinhanh'];?>" title="<?= $row['sp_ten'] ?>" />

                        </div>
                        <strong style="font-size: 17px;" > <a href="SP_detail.php? sp_ma=<?= $row['sp_ma'] ?>"> <?= $row['sp_ten'] ?></strong><br/>

                        <label style="font-size: 17px;" >Giá: </label><span style="font-size: 17px;" class="product-price"><?= number_format($row['sp_gia'], 0, ",", ".") ?> đ</span><br/>

                     

                       

                    </div>
                <?php } ?>

                 <!-- pagination -->

                <?php if($current_page > 3 ){
                    $first_page = 1;
                    ?>
                    <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $first_page ?>">First</a>
                <?php } ?>  


                <?php for ($num = 1 ; $num <= $totalPages; $num++) { ?>
                    <?php if($num != $current_page){ ?>
                        <?php if($num > $current_page - 3 && $num < $current_page + 3){?>
                            <a class="page-item" style="font-size: 17px;" href="?per_page=<?=$item_per_page?> &page=<?=$num?>"><?=$num?></a>
                        <?php } ?>
                    <?php }else{ ?>
                        <strong class="curent-page page-item"><?=$num?></strong>
                    <?php } ?>
                <?php } ?>

                <?php if($current_page < $totalPages- 3 ){
                    $end_page = $totalPages;
                    ?>
                    <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">Last</a>
                <?php } ?> 


                <!---->

                <div class="clear-both"></div>
             
        
            </div>
        </div>
    </body>
</html>