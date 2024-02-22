<!-- 
    File: gioithieu.php
    @updated: Dec-19-2021  
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" type="image/vnd.microsoft.icon" href="../images/favicon.ico">
    <title>Giới Thiệu</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
    <!-- header section -->
    <header class="header">
        <a href="trangchu.php" class="header__logo"><img src="../images/logo.png" alt="logo"></a>
        <nav class="header__nav-bar">
            <ul class="nav-bar__items">
                <div class="icon__btn fas fa-times close-btn"></div>
                <li class="nav-bar__item"><a href="trangchu.php">Trang Chủ</a></li>
                <li class="nav-bar__item"><a href="gioithieu.php">Giới Thiệu</a></li>
                <li class="nav-bar__item">
                    <a class="item__sub-btn" href="SanPhamdemo.php">Sản phẩm <!--<i class="fas fa-angle-down"></i>--></a>
                    <ul class="item__sub-menu">
                        <li class="sub-menu__sub-item more">
                            <a class="more-btn" href="#">Xe đạp tập thể dục</a>
                        </li>
                        <li class="sub-menu__sub-item more">
                            <a class="more-btn" href="#">Máy tập cơ bụng</a>
                        </li>
                        <li class="sub-menu__sub-item more">
                            <a class="more-btn" href="#">Dụng cụ bơi lội</a>
                        </li>
                        
                        <li class="sub-menu__sub-item more">
                            <a class="more-btn" href="#">Máy tập cơ chân</a>
                        </li>
                        <li class="sub-menu__sub-item more">
                            <a class="more-btn" href="#">Ghế massage</a>
                        </li>
                        <li class="sub-menu__sub-item more">
                            <a class="more-btn" href="#">Máy massage</a>
                        </li>
                        <li class="sub-menu__sub-item more">
                            <a class="more-btn" href="#">Máy chạy bộ</a>
                        </li>
                        <li class="sub-menu__sub-item more">
                            <a class="more-btn" href="#">Dụng cụ thể hình gia đình</a>
                        </li>
                        <li class="sub-menu__sub-item more">
                            <a class="more-btn" href="#">Dụng cụ bóng chuyền</a>
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
    <!-- main section -->
    <main>
        <section class="about">
            <div class="about__image">
                <img src="../images/gt1.png" alt="">
                <img src="../images/gt3.jpg" alt="">
            </div>
            <div class="about__content">
                <h3>Về chúng tôi</h3>
                <p>Sport Land Team là hệ thống bán lẻ hoạt động với mong muốn đồng hành cùng các bạn giúp bạn có thể nâng cao khả năng cũng như trình độ thể thao,
                    có một sức khõe thật tốt, dễ dàng chinh phục mọi thử thách.
                     Sport Land Team luôn nỗ lực hết mình để có thể đem đến cho khách hàng những sản phẩm, dịch
                    vụ và tiện ích tốt nhất. Với sứ mệnh tự đặt ra là "trở thành người bạn hỗ trợ thể thao tin cậy của bạn",
                     shop ngày càng khẳng định được vị thế của mình trên thị trường. Đặc biệt, Sport Land Team còn là đơn vị cung cấp Dụng cụ thể dục - thể thao đang được yêu thích nhất trên internet trong khoảng thời gian gần đây với những loại sản phẩm vô cùng đa dạng.</p>
            </div>
            </div>
        </section>
    </main>
    <!-- footer section -->

    <div class="wrapper__footer">
        <footer class="footer">
            <div class="footer_box-container">
                <div class="box-container__box-item">
                    <h3>menu</h3>
                    <a href="trangchu.php"> <i class="fas fa-arrow-right"></i> Trang Chủ</a>
                    <a href="SanPhamdemo.php"> <i class="fas fa-arrow-right"></i> Sản Phẩm</a>
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
    <div id="back-top" class="fas fa-chevron-up"></div>

    <!-- jquery link -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- Javascripts file link -->
    <script src="js/scripts.js"></script>
</body>

</html>