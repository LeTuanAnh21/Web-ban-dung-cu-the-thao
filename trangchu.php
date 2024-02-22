
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <title>Trang Chủ</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- jquery link -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/home.css">
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
    <!-- main section -->
    <main>
        <section class="container-slider">
            <div class="slider">
                <img src="../images/b1.jpg" alt="" class="slider-item" number="0">
                <img src="../images/b2.gif" alt="" class="slider-item" number="1" style="display: none;" />
                <img src="../images/b3.jpg" alt="" class="slider-item" number="2" style="display: none;" />
                <img src="../images/b4.png" alt="" class="slider-item" number="3" style="display: none;" />
                <a href="#" id="next" class="fas fa-chevron-right"></a>
                <a href="#" id="prev" class="fas fa-chevron-left"></a>
            </div>
        </section>
        <section class="products">
            <h1 class="products__title"><span>Sản Phẩm Nổi Bật Trong Tháng</span> <a href="sanpham.php">Xem Chi Tiết >></a> </h1>
            <h2>Danh sách sản phẩm</h2>
            <ul class="list__item">
                <li class="item active">Mới nhất</li>
                <li class="item">Bán chạy</li>
               
            </ul>
            <div id="trend" class="products__box-container">


                <div class="box-container box-container__box">
                    <div class="box__icons">
                        <a href="sanpham.php" class="fas fa-eye"></a>
                    </div>
                    <div class="box__image">
                        <img src="../images/ghe massage/ghe-massage-14-rollers-electric-massage-chair.png" alt="">
                    </div>
                    <div class="box__content">
                        <h3>Ghế massage rollers</h3>
                    </div>
                </div>

                <div class="box-container box-container__box">
                    <div class="box__icons">
                        <a href="sanpham.php" class="fas fa-eye"></a>
                    </div>
                    <div class="box__image">
                        <img src="../images/dungcuthehinhgiadinh/BONGTA.png" alt="">
                    </div>
                    <div class="box__content">
                        <h3>Bóng tạ</h3>
                    </div>
                </div>

                <div class="box-container box-container__box">
                    <div class="box__icons">
                       
                        <a href="sanpham.php" class="fas fa-eye"></a>
                    </div>
                    <div class="box__image">
                        <img src="../images/may tap co bung/5620138may-tap-leo-nui-royal-100-jpeg.png" alt="">
                    </div>
                    <div class="box__content">
                        <h3>Máy tập leo núi royal</h3>
                    </div>
                </div>
            </div>
            <div id="new" class="products__box-container">

                <div class="box-container box-container__box">
                    <div class="box__icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="sanpham.php" class="fas fa-eye"></a>
                    </div>
                    <div class=" box__image">
                        <img src="../images/XD01.png" alt="">
                    </div>
                    <div class="box__content">
                        <h3>Xe đạp HC</h3>                       
                    </div>
                </div>
                

                <div class="box-container box-container__box">
                    <div class="box__icons">
                        <a href="sanpham.php" class="fas fa-eye"></a>
                    </div>
                    <div class="box__image">
                        <img src="../images/XD02.png" alt="">
                    </div>
                    <div class="box__content">
                        <h3>Xe đạp Hayo</h3>
                    </div>
                </div>

                <div class="box-container box-container__box">
                    <div class="box__icons">                        
                        <a href="sanpham.php" class="fas fa-eye"></a>
                    </div>
                    <div class="box__image">
                        <img src="../images/XD03.png" alt="">
                    </div>
                    <div class="box__content">
                        <h3>Xe đạp HI</h3>
                    </div>
                </div>
            </div>
           
            <h2>Dụng cụ thể hình gia đình</h2>
            <div class="products__box-container">

                <div class="box-container box-container__box">
                    <div class="box__icons">
                        <a href="sanpham.php" class="fas fa-eye"></a>
                    </div>
                    <div class=" box__image">
                        <img src="../images/dungcuthehinhgiadinh/605601.png" alt="">
                    </div>
                    <div class="box__content">
                        <h3>Ghế Đẩy Tạ Đơn HC</h3>
                        
                    </div>
                </div>
                

                <div class="box-container box-container__box">
                    <div class="box__icons">
                        <a href="sanpham.php" class="fas fa-eye"></a>
                    </div>
                    <div class="box__image">
                        <img src="../images/dungcuthehinhgiadinh/FS08.png" alt="">
                    </div>
                    <div class="box__content">
                        <h3> Ghế Cong Tập Bụng FS8</h3> 
                    </div>
                </div>

                <div class="box-container box-container__box">
                    <div class="box__icons">
                        <a href="sanpham.php" class="fas fa-eye"></a>
                    </div>
                    <div class="box__image">
                        <img src="../images/dungcuthehinhgiadinh/THANHXUAN2.png" alt="">
                    </div>
                    <div class="box__content">
                        <h3>Ghế Cong Tập Bụng TX2 </h3>  
                    </div>
                    </div>

 
                
                </div>
                <h2> Ghế massage</h2>
                <div class="products__box-container">
                    <div class="box-container box-container__box">
                        <div class="box__icons">
                             <a href="sanpham.php" class="fas fa-eye"></a>
                         </div>
                         <div class="box__image">
                             <img src="../images/ghe massage/Xiaomi AI JOYPAL MONSTER 3209D.png" alt="">
                         </div>
                         <div class="box__content">
                             <h3> Ghế massage Xiaomi</h3>
                             
                         </div>
                     </div>
                 
                     <div class="box-container box-container__box">
                         <div class="box__icons">
                              <a href="sanpham.php" class="fas fa-eye"></a>
                          </div>
                          <div class="box__image">
                              <img src="../images/ghe massage/ghe-massage-cao-cap-rk-7909b.PNG" alt="">
                          </div>
                          <div class="box__content">
                              <h3> Ghế massage cao cấp RK-7909</h3>
                          </div>
                      </div>
                      <div class="box-container box-container__box">
                         <div class="box__icons">
                              <a href="sanpham.php" class="fas fa-eye"></a>
                          </div>
                          <div class="box__image">
                              <img src="../images/ghe massage/ghe-massage-cao-c-p-rk-790b.png" alt="">
                          </div>
                          <div class="box__content">
                              <h3> Ghế massage cao Cấp RK-7908</h3>
                          </div>
                      </div>
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
    <div id="back-top" class="fas fa-chevron-up"></div>
    <!-- Javascripts file link -->
    <script src="js/scripts.js"></script>
</body>

</html>
