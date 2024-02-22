<!-- 
    File: SanPhamdemo.php
    @updated: Dec-19-2021  
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">
    <title>Sản Phẩm</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
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
    <main>
        <div class="banner">
            <img src="images/banner-2.png" alt="" class="banner--left">
            <img src="images/banner-3.png" alt="" class="banner--right">
        </div>

        <section class="products">
            <h1 class="products__title"><span>Sản Phẩm</span> ></a> </h1>
          
            <h2>máy tập cơ bụng</h2>
            <div class="products__box-container">

                <div class="box-container box-container__box">
                    <div class="box__icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                       
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class=" box__image">
                        <img src="../images/maytapcobung/con-lan-tap-bung-ab-2018.png" alt="">
                    </div>
                    <div class="box__content">
                        <h3>Máy tập bụng AB carver pro <PRO-06></PRO-06></h3>
                        <div class="item-price">480000</div>
                    </div>
                </div>

                <div class="box-container box-container__box">
                    <div class="box__icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="box__image">
                        <img src="../images/maytapcobung/con-lan-tap-bung-4-banh-ab-2019.png" alt="">
                    </div>
                    <div class="box__content">
                        <h3>Con lăn tập bụng 4 bánh AB 2019</h3>
                        <div class="item-price">340000</div>
                    </div>
                </div>

                <div class="box-container box-container__box">
                    <div class="box__icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                      
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="box__image">
                        <img src="../images/maytapcobung/con-lan-tap-bung-ab-carver-pro.png" alt="">
                    </div>
                    <div class="box__content">
                        <h3>Con lăn tập bụng AB 2018</h3>
                        <div class="item-price">340000</div>
                    </div>
                </div>
            </div>
        
        </br>
           
            <div class="products__box-container">

                <div class="box-container box-container__box">
                    <div class="box__icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="box__image">
                        <img src="../images/maytapcobung/may-tap-da-nang-total-gym.jpg" alt="">
                    </div>
                    <div class="box__content">
                        <h3>Máy tập đa năng total gym</h3>
                        <div class="item-price">2250000</div>
                    </div>
                </div>

                <div class="box-container box-container__box">
                    <div class="box__icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="box__image">
                        <img src="../images/maytapcobung/New Six Pack Care 2016.png" alt="">
                    </div>
                    <div class="box__content">
                        <h3>Máy tập cơ bụng New Six Pack Care 2016</h3>
                        <div class="item-price">1250000</div>
                    </div>
                </div>

                <div class="box-container box-container__box">
                    <div class="box__icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="box__image">
                        <img src="../images/maytapcobung/con-lan-dan-hoi-tap-bung.png" alt="">
                    </div>
                    <div class="box__content">
                        <h3> Con lăn tập bụng </h3>
                        <div class="item-price">590000</div>
                        
                    </div>
                </div>

            </div>
        </section>
    </main>
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
    <!-- footer section ends -->


    <!-- jquery link -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- Javascripts file link -->
    <script src="js/scripts.js"></script>
    <script src="js/sanPham.js"></script>
    <script src="js/gioHang.js"></script>
    <script>      
        // Gán đơn vị tiền tệ vào giá sản phẩm
        var prices = document.querySelectorAll('.item-price');         
        prices.forEach(item => { 
        item.innerText = Number(item.innerText).toLocaleString('de-DE', {
            style : 'currency', 
            currency : 'VND'}); 
        });
        window.addEventListener('load', loadShoppingCart, false); 
    </script>
</body>

</html>