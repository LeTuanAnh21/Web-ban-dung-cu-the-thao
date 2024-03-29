<!-- 
    File: template.php
    @updated: Dec-15-2021  
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
     <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <!-- Header section start -->
    <header class="header">
        <a href="trangchu.php" class="header__logo"><img src="assets/images/logo.png" alt="logo"></a>
        <nav class="header__nav-bar">
            <ul class="nav-bar__items">
                <div class="icon__btn fas fa-times close-btn"></div>
                <li class="nav-bar__item"><a href="trangchu.php">Trang Chủ</a></li>
                <li class="nav-bar__item"><a href="gioithieu.php">Giới Thiệu</a></li>
                <li class="nav-bar__item">
                    <a class="item__sub-btn" href="sanpham.php">Sản phẩm <i class="fas fa-angle-down"></i></a>
                    <ul class="item__sub-menu">
                        <li class="sub-menu__sub-item"><a href="#">Sub Item 01</a></li>
                        <li class="sub-menu__sub-item"><a href="#">Sub Item 02</a></li>
                        <li class="sub-menu__sub-item more">
                          <a class="more-btn" href="#">More Items <i class="fas fa-angle-right"></i></a>
                          <ul class="more-menu">
                            <li class="more-item"><a href="#">More Item 01</a></li>
                            <li class="more-item"><a href="#">More Item 02</a></li>
                            <li class="more-item"><a href="#">More Item 02</a></li>
                          </ul>
                        </li>

                        <li class="sub-menu__sub-item more">
                          <a class="more-btn" href="#">More Items <i class="fas fa-angle-right"></i></a>
                          <ul class="more-menu">
                            <li class="more-item"><a href="#">More Item 01</a></li>
                            <li class="more-item"><a href="#">More Item 02</a></li>
                            <li class="more-item"><a href="#">More Item 02</a></li>
                          </ul>
                        </li>
                      </ul>
                </li>
                <li class="nav-bar__item"><a href="dangnhap.php">Đăng Nhập</a></li>
                <li class="nav-bar__item"><a href="lienhe.php">Liên Hệ</a></li>
            </ul>
        </nav>

        <div class="header__icons">
            <div class="icon__btn fas fa-bars menu-btn"></div>
            <div class="icon__btn fas fa-search search-btn"></div>
            <div class="icon__btn fas fa-shopping-cart cart-btn"></div>
        </div>

        <div class="header__search-form">
            <form action="" class="search-form js-search-form">
              <input type="search" placeholder="Nhập nội dung cần tìm..." id="search-box">
              <label for="search-box" class="fas fa-search "></label>
            </form>
        </div>
       
    </header>
    <!-- Header section end -->

    <main style= "height: 1000px;">
      
    </main>


    <!-- footer section start  -->
	<div class="wrapper__footer">
		  <footer class="footer">
			<div class="footer__box-container">
				<div class="box-container__box-item">
					<h3>menu</h3>
					<a href="trangchu.php"> <i class="fas fa-arrow-right"></i> Trang Chủ</a>
					<a href="sanpham.php"> <i class="fas fa-arrow-right"></i> Sản Phẩm</a>
					<a href="gioithieu.php"> <i class="fas fa-arrow-right"></i> Giới Thiệu</a>
					<a href="lienhe.php"> <i class="fas fa-arrow-right"></i> Liên Hệ</a>
				</div>
	  
				<div class="box-container__box-item">
					<h3>extra links</h3>
					<a href="#"> <i class="fas fa-arrow-right"></i> Giỏ Hàng </a>
					<a href="#"> <i class="fas fa-arrow-right"></i> Sản Phẩm Yêu Thích </a>
					<a href="#"> <i class="fas fa-arrow-right"></i> Tài Khoản </a>
					<a href="#"> <i class="fas fa-arrow-right"></i> Chính sách và điều khoản </a>
				</div>
	  
				<div class="box-container__box-item">
					<h3>Mạng xã hội</h3>
					<a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
					<a href="#"> <i class="fab fa-twitter"></i> twitter </a>
					<a href="#"> <i class="fab fa-instagram"></i> instagram </a>
					<a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
					<a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
				</div>
	  
				<div class="box-container__box-item">
					<h3>Thông báo</h3>
					<p>Đăng ký để nhận thông tin</p>
					<form action="" class="box-item__form">
						<input type="email" placeholder="Email...">
						<input type="submit" value="Đăng Ký" class="form__subscribe-btn">
					</form>
				</div>
	  
			</div>
		  </footer>
		  <section class="footer__credit"> Powered by Sports Land Team </section>
	</div>
	<!-- button for back to top -->
	<div id="back-top" class="fas fa-chevron-up"></div>

    <!-- footer section ends -->


	<!-- jquery link -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<!-- Javascripts file link -->
	<script src="assets/js/scripts.js"></script>
</body>
</html>