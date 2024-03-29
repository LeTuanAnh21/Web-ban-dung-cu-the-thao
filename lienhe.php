<!-- 
    File: lienhe.php
    @updated: Dec-19-2021  
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">
    <title>Liên Hệ</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- header section-->
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
        <section class="contact">
            <img class="contact__banner" src="images/contact.png" alt="">
            <div class="contact__icons">

                <div class="icon">
                    <i class="fas fa-phone"></i>
                    <h3>Số Điện Thoại</h3>
                    <p>+123-456-7890</p>
                    <p>+111-222-3333</p>
                </div>

                <div class="icon">
                    <i class="fas fa-envelope"></i>
                    <h3>Địa Chỉ Email</h3>
                    <p>SportsLandTeam#gmail.com</p>
                    <p>sportsland@gmail.com</p>
                </div>

                <div class="icon">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Địa Chỉ</h3>
                    <p>Cần Thơ, Việt Nam</p>
                </div>

            </div>

            <div class="contact__form">

                <form action="">
                    <h3>Liên Lạc Qua Thư Điện Tử</h3>
                    <div class="form__inputBox">
                        <input type="text" placeholder="Vui lòng nhập họ tên" class="inputBox--box">
                        <input type="email" placeholder="Vui lòng nhập email" class="inputBox--box">
                    </div>
                    <div class="form__inputBox">
                        <input type="text" placeholder="Vui lòng nhập số điện thoại" class="inputBox--box">
                        <select class="inputBox--box" id="subject" name="subject">			
                            <option >Về Sản Phẩm/ Dịch Vụ</option>
                            <option >Về Thông Tin Khuyến Mãi</option>
                            <option >Về Thông Tin Tuyển Dụng</option>
                        </select>
                    </div>
                    <textarea placeholder="Nội dung" cols="30" rows="10"></textarea>
                    <input type="submit" value="send message" class="inputBox--btn">

                </form>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8414543437307!2d105.76842661475509!3d10.029938975270118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zxJDhuqFpIGjhu41jIEPhuqduIFRoxqE!5e0!3m2!1svi!2s!4v1639905785616!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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