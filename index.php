
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhất Phát Shop</title>
    <!-- Font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon fontanwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Reset css & grid sytem -->
    <link rel="stylesheet" href="./assets/css/library.css">
    <link href="./assets/owlCarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <!-- Layout -->
    <link rel="stylesheet" href="./assets/css/common.css">
    <!-- index -->
    <link href="./assets/css/home.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl caroucel Js-->
    <script src="./assets/owlCarousel/owl.carousel.min.js"></script>

</head>

<body>
    <div class="header scrolling" id="myHeader">
        <div class="grid wide">
            <div class="header__top">
                <div class="navbar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <a href="" class="header__logo">
                
                    <img  src="./assets/img/slider/slide-logo.png" alt="" class="imgL">
                    
                    
                </a>
                <div class="header__search">
                    <div class="header__search-wrap">
                        <input type="text"class="header__search-input" placeholder="Tìm kiếm">
                        <a class="header__search-icon" href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="header__account">
                    <a href="#my-Login" class="header__account-login">Đăng Nhập</a>
                    <a href="#my-Register" class="header__account-register">Đăng Kí</a>
                </div>
                <!-- Cart -->
                <div class="header__cart have" href="#">
                    <i class="fas fa-shopping-basket"></i>
                    <div class="header__cart-amount">
                        3
                    </div>
                    <div class="header__cart-wrap">
                        <ul class="order__list">
                            <li class="item-order">
                                <div class="order-wrap">
                                    <a href="product.html" class="order-img">
                                        <img src="./assets/img/product/Slide1.JPG" alt="">
                                    </a>
                                    <div class="order-main">
                                        <a href="product.html" class="order-main-name">Áo sơ mi caro </a>
                                        <div class="order-main-price"> 45,000 ₫</div>
                                    </div>
                                    <a href="product.html" class="order-close"><i class="far fa-times-circle"></i></a>
                                </div>
                            </li>
                            <li class="item-order">
                                <div class="order-wrap">
                                    <a href="product.html" class="order-img">
                                        <img src="./assets/img/product/Slide2.JPG" alt="">
                                    </a>
                                    <div class="order-main">
                                        <a href="product.html" class="order-main-name">Áo khoác đen</a>
                                        <div class="order-main-price"> 476,000 ₫</div>
                                    </div>
                                    <a href="product.html" class="order-close"><i class="far fa-times-circle"></i></a>
                                </div>
                            </li>
                            <li class="item-order">
                                <div class="order-wrap">
                                    <a href="product.html" class="order-img">
                                        <img src="./assets/img/product/Slide23.JPG" alt="">
                                    </a>
                                    <div class="order-main">
                                        <a href="product.html" class="order-main-name">Áo phông xanh </a>
                                        <div class="order-main-price">210,000 ₫</div>
                                    </div>
                                    <a href="product.html" class="order-close"><i class="far fa-times-circle"></i></a>
                                </div>
                            </li>
                        </ul>
                        <div class="total-money">Tổng cộng: 135.000đ</div>
                        <a href="cart.html" class="btn btn--default cart-btn">Xem giỏ hàng</a>
                        <a href="pay.html" class="btn btn--default cart-btn orange">Thanh toán</a>
                        <!-- norcart -->
                        <!-- <img class="header__cart-img-nocart" src="http://www.giaybinhduong.com/images/empty-cart.JPG" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu -->
        <div class="header__nav">
            <ul class="header__nav-list">
                <li class="header__nav-item nav__search">
                    <div class="nav__search-wrap">
                        <input class="nav__search-input" type="text" name="" id="" placeholder="Tìm sản phẩm...">
                    </div>
                    <div class="nav__search-btn">
                        <i class="fas fa-search"></i>
                    </div>
                </li>
                <li class="header__nav-item authen-form">
                    <a href="#" class="header__nav-link">Tài Khoản</a>
                    <ul class="sub-nav">
                        <li class="sub-nav__item">
                            <a href="#my-Login" class="sub-nav__link">Đăng Nhập</a>
                        </li>
                        <li class="sub-nav__item">
                            <a href="#my-Register" class="sub-nav__link">Đăng Kí</a>
                        </li>
                    </ul>
                </li>
                <li class="header__nav-item index">
                    <a href="index.php" class="header__nav-link">Trang chủ</a>
                </li>
                <li class="header__nav-item">
                    <a href="#" class="header__nav-link">Giới Thiệu</a>
                </li>
                <li class="header__nav-item">
                    <a href="#" class="header__nav-link">Sản Phẩm</a>
                    <div class="sub-nav-wrap grid wide">
                        <ul class="sub-nav">
                            <li class="sub-nav__item">
                                <a href="" class="sub-nav__link heading">Thời trang</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Áo khoác mùa đông</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Quần bò</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Sửa rửa mặt </a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Đồng hồ đeo tay</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Mũ thời trang</a>
                            </li>
                        </ul>
                        <ul class="sub-nav">
                            <li class="sub-nav__item">
                                <a href="" class="sub-nav__link heading">Thời trang</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Áo khoác mùa đông</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Quần bò</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Sửa rửa mặt </a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Đồng hồ đeo tay</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Mũ thời trang</a>
                            </li>
                        </ul>
                        <ul class="sub-nav">
                            <li class="sub-nav__item">
                                <a href="" class="sub-nav__link heading">Thời trang</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Áo khoác mùa đông</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Quần bò</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Sửa rửa mặt </a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Đồng hồ đeo tay</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Mũ thời trang</a>
                            </li>
                        </ul>
                        <ul class="sub-nav">
                            <li class="sub-nav__item">
                                <a href="" class="sub-nav__link heading">Thời trang</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Áo khoác mùa đông</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Quần bò</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Sửa rửa mặt </a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Đồng hồ đeo tay</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.html" class="sub-nav__link">Mũ thời trang</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="header__nav-item">
                    <a href="news.html" class="header__nav-link">Tin Tức</a>
                </li>
                <li class="header__nav-item">
                    <a href="contact.html" class="header__nav-link">Liên Hệ</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main">
        <!-- Slider -->
        <div class="main__slice">
            <div class="slider">
                <div class="slide active" style="background-image:url(./assets/img/slider/slide-7.jpg)">
                    <div class="container">
                        <div class="caption">
                            <h1>Giảm giá 30%</h1>
                            <p>Giảm giá cực sốc trong tháng 2!</p>
                            <a href="listProduct.html" class="btn btn--default">Xem ngay</a>

                        </div>
                    </div>
                </div>
                <div class="slide active" style="background-image:url(./assets/img/slider/slide-8.jfif)">
                    <div class="container">
                        <div class="caption">
                            <h1>Giảm giá 30%</h1>
                            <p>Giảm giá cực sốc trong tháng 2!</p>
                            <a href="listProduct.html" class="btn btn--default">Xem ngay</a>

                        </div>
                    </div>
                </div>
                <div class="slide active" style="background-image:url(./assets/img/slider/slide-11.jpg)">
                    <div class="container">
                        <div class="caption">
                            <h1>Giảm giá 30%</h1>
                            <p>Giảm giá cực sốc trong tháng 2!</p>
                            <a href="listProduct.html" class="btn btn--default">Xem ngay</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- controls  -->
            <div class="controls">
                <div class="prev">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="next">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <!-- indicators -->
            <div class="indicator">
            </div>
        </div>
        <!--Product Category -->
        <div class="main__tabnine">
            <div class="grid wide">
                <!-- Tab items -->
                <div class="tabs">
                    <div class="tab-item active">
                        Bán Chạy
                    </div>
                    <div class="tab-item">
                        Giá tốt
                    </div>
                    <div class="tab-item">
                        Mới Nhập
                    </div>
                    <div class="line"></div>
                </div>

                <!-- Tab content -->
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="row">
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide2.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo khoác mùa đông cho nam</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide3.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo Khoác đen</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                390.000 đ
                                            </div>
                                            <div class="price__new">260.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">20%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide4.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo khoác lông cừu</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                195.000 đ
                                            </div>
                                            <div class="price__new">110.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">32%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide5.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo da</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                350.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">44%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide7.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo phông nam</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                310.000 đ
                                            </div>
                                            <div class="price__new">170.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">65%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide8.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo ngắn tay</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                590.000 đ
                                            </div>
                                            <div class="price__new">340.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">44%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide9.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo thể thao</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                400.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">34%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide10.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo phông đỏ</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide13.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo đi biển</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide15.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo gucci</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide18.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo khoác túi</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide16.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo khoác có mũ</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                        </div>
                    </div>



                    

                    <div class="tab-pane">
                        <div class="row">
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide33.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo trắng</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide34.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo vest đen</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide35.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">vest xám</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide36.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo gió trắng</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide37.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">vest tím</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide38.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">quần áo thể thao</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide39.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">bộ thể thao tím</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide41.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">quần bò</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide42.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo phông panda</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide40.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo len tím</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide15.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo phông xanh</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide22.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo teble</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="tab-pane">
                        <div class="row">
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide26.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo phông teble</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide18.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo phông gió </h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide3.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo Khoác đen</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                390.000 đ
                                            </div>
                                            <div class="price__new">260.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">20%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide4.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo khoác lông cừu</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                190.000 đ
                                            </div>
                                            <div class="price__new">110.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">32%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide5.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo da</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                350.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">44%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide7.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo phông nam</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                310.000 đ
                                            </div>
                                            <div class="price__new">170.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">65%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide8.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo ngắn tay</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                590.000 đ
                                            </div>
                                            <div class="price__new">340.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">44%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide9.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo thể thao</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                400.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">34%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide10.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Áo phông đỏ</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide13.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo đi biển</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide15.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo gucci</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/Slide18.JPG);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">áo khoác túi</h3>
                                        <div class="product__price">
                                            <div class="price__old">
                                                300.000 đ
                                            </div>
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span class="product__sale-percent">24%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HightLight  -->
        <div class="main__frame">
            <div class="grid wide">
                <h3 class="category__title">Nhất Phát Men's Fashion</h3>
                <h3 class="category__heading">SẢN PHẨM NỔI BẬT</h3>
                <div class="owl-carousel hight owl-theme">
                    <div class="product">
                        <div class="product__avt" style="background-image: url(./assets/img/product/Slide18.JPG);">
                        </div>
                        <div class="product__info">
                            <h3 class="product__name">áo khoác túi</h3>
                            <div class="product__price">
                                <div class="price__old">
                                    300.000 đ
                                </div>
                                <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                            </div>
                            <div class="product__sale">
                                <span class="product__sale-percent">24%</span>
                                <span class="product__sale-text">Giảm</span>
                            </div>
                        </div>
                        <a href="product.html" class="viewDetail">Xem chi tiết</a>
                        <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                    </div>


                    
                    <div class="product">
                        <div class="product__avt" style="background-image: url(./assets/img/product/Slide15.JPG);">
                        </div>
                        <div class="product__info">
                            <h3 class="product__name">áo gucci</h3>
                            <div class="product__price">
                                <div class="price__old">
                                    300.000 đ
                                </div>
                                <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                            </div>
                            <div class="product__sale">
                                <span class="product__sale-percent">24%</span>
                                <span class="product__sale-text">Giảm</span>
                            </div>
                        </div>
                        <a href="product.html" class="viewDetail">Xem chi tiết</a>
                        <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                    </div>


                    <div class="product">
                        <div class="product__avt" style="background-image: url(./assets/img/product/Slide10.JPG);">
                        </div>
                        <div class="product__info">
                            <h3 class="product__name">Áo phông đỏ</h3>
                            <div class="product__price">
                                <div class="price__old">
                                    300.000 đ
                                </div>
                                <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                            </div>
                            <div class="product__sale">
                                <span class="product__sale-percent">24%</span>
                                <span class="product__sale-text">Giảm</span>
                            </div>
                        </div>
                        <a href="product.html" class="viewDetail">Xem chi tiết</a>
                        <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                    </div>

                    
               
                        <div class="product">
                            <div class="product__avt" style="background-image: url(./assets/img/product/Slide3.JPG);">
                            </div>
                            <div class="product__info">
                                <h3 class="product__name">Áo Khoác đen</h3>
                                <div class="product__price">
                                    <div class="price__old">
                                        390.000 đ
                                    </div>
                                    <div class="price__new">260.000 <span class="price__unit">đ</span></div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">20%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                            </div>
                            <a href="product.html" class="viewDetail">Xem chi tiết</a>
                            <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                        </div>
                   
                        <div class="product">
                            <div class="product__avt" style="background-image: url(./assets/img/product/Slide4.JPG);">
                            </div>
                            <div class="product__info">
                                <h3 class="product__name">Áo khoác lông cừu</h3>
                                <div class="product__price">
                                    <div class="price__old">
                                        190.000 đ
                                    </div>
                                    <div class="price__new">110.000 <span class="price__unit">đ</span></div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">32%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                            </div>
                            <a href="product.html" class="viewDetail">Xem chi tiết</a>
                            <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                        </div>
                   
                
                        <div class="product">
                            <div class="product__avt" style="background-image: url(./assets/img/product/Slide5.JPG);">
                            </div>
                            <div class="product__info">
                                <h3 class="product__name">Áo da</h3>
                                <div class="product__price">
                                    <div class="price__old">
                                        350.000 đ
                                    </div>
                                    <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">44%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                            </div>
                            <a href="product.html" class="viewDetail">Xem chi tiết</a>
                            <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                        </div>
                   
                    
                        <div class="product">
                            <div class="product__avt" style="background-image: url(./assets/img/product/Slide7.JPG);">
                            </div>
                            <div class="product__info">
                                <h3 class="product__name">Áo phông nam</h3>
                                <div class="product__price">
                                    <div class="price__old">
                                        310.000 đ
                                    </div>
                                    <div class="price__new">170.000 <span class="price__unit">đ</span></div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">65%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                            </div>
                            <a href="product.html" class="viewDetail">Xem chi tiết</a>
                            <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                        </div>
                   
                   
                        <div class="product">
                            <div class="product__avt" style="background-image: url(./assets/img/product/Slide8.JPG);">
                            </div>
                            <div class="product__info">
                                <h3 class="product__name">áo ngắn tay</h3>
                                <div class="product__price">
                                    <div class="price__old">
                                        590.000 đ
                                    </div>
                                    <div class="price__new">340.000 <span class="price__unit">đ</span></div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">44%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                            </div>
                            <a href="product.html" class="viewDetail">Xem chi tiết</a>
                            <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- Sales Policy -->
        <div class="main__policy">
            <div class="row">
                <div class="col l-3 m-6">
                    <div class="policy bg-1">
                        <img src="./assets/img/policy/policy1.png" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">GIAO HÀNG MIỄN PHÍ</h3>
                            <p class="policy__description">Cho đơn hàng từ 300K</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6">
                    <div class="policy bg-2">
                        <img src="./assets/img/policy/policy2.png" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">ĐỔI TRẢ HÀNG</h3>
                            <p class="policy__description">Trong 3 ngày đầu tiên</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6">
                    <div class="policy bg-1">
                        <img src="./assets/img/policy/policy3.png" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">HÀNG CHÍNH HÃNG</h3>
                            <p class="policy__description">Cam kết chất lượng</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6">
                    <div class="policy bg-2">
                        <img src="./assets/img/policy/policy4.png" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">TƯ VẤN 24/24</h3>
                            <p class="policy__description">Giải đáp mọi thắc mắc</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- News -->
        <div class="main__frame bg-3">
            <div class="grid wide">
                <h3 class="category__title">Nhất Phát Men's Fashion</h3>
                <h3 class="category__heading">Tin Tức</h3>
                <div class="owl-carousel news owl-theme">
                    <a href="news.html" class="news">
                        <div class="news__img">
                            <img src="./assets/img/news/TinTuc.png" alt="">
                        </div>
                        <div class="news__body">
                            <h3 class="news__body-title">Phối đồ nam đúng cách</h3>
                            <div class="new__body-date">13/6/2021</div>
                            <p class="news__description">
                                Một bộ suit đẹp là một bộ đồ đứng form, có những đường cắt vừa mềm mại khoe những ưu điểm cơ thể, vừa cứng cáp để làm bật lên sự nam tính của người mặc....


                        </div>
                    </a>
                    <a href="news.html" class="news">
                        <div class="news__img">
                            <img src="./assets/img/news/TinTuc.png" alt="">
                        </div>
                        <div class="news__body">
                            <h3 class="news__body-title">Phối đồ nam đúng cách</h3>
                            <div class="new__body-date">13/6/2021</div>
                            <p class="news__description">
                                Một bộ suit đẹp là một bộ đồ đứng form, có những đường cắt vừa mềm mại khoe những ưu điểm cơ thể, vừa cứng cáp để làm bật lên sự nam tính của người mặc....


                        </div>
                    </a>
                    <a href="news.html" class="news">
                        <div class="news__img">
                            <img src="./assets/img/news/TinTuc.png" alt="">
                        </div>
                        <div class="news__body">
                            <h3 class="news__body-title">Phối đồ nam đúng cách</h3>
                            <div class="new__body-date">13/6/2021</div>
                            <p class="news__description">
                                Một bộ suit đẹp là một bộ đồ đứng form, có những đường cắt vừa mềm mại khoe những ưu điểm cơ thể, vừa cứng cáp để làm bật lên sự nam tính của người mặc....
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="main__bands">
            <div class="grid wide">
                <div class="owl-carousel bands">
                    <a href="listProduct.html" class="band__item" style="background-image: url(./assets/img/band/band1.png)"></a>
                    <a href="listProduct.html" class="band__item" style="background-image: url(./assets/img/band/band2.png)"></a>
                    <a href="listProduct.html" class="band__item" style="background-image: url(./assets/img/band/band3.png)"></a>
                    <a href="listProduct.html" class="band__item" style="background-image: url(./assets/img/band/band4.png)"></a>
                    <a href="listProduct.html" class="band__item" style="background-image: url(./assets/img/band/band5.png)"></a>
                    <a href="listProduct.html" class="band__item" style="background-image: url(./assets/img/band/band6.png)"></a>
                    <a href="listProduct.html" class="band__item" style="background-image: url(./assets/img/band/band7.png)"></a>
                </div>
            </div>
        </div>

    </div>
    <div class="footer">
        <div class="grid wide">
            <div class="row">
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Menu</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="#" class="footer__link">Thời trang</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Phụ kiện </a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">dày dép</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">quần áo</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link"> Sữa rửa mặt </a>
                        </li>
                    </ul>
                </div>
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Hỗ trợ khách hàng</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="#" class="footer__link">Hướng dẫn mua hàng</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Giải đáp thắc mắc</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Chính sách mua hàng</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Chính sách đổi trả</a>
                        </li>
                    </ul>
                </div>
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Liên hệ</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <span class="footer__text">
                                    <i class="fas fa-map-marked-alt"></i> Đường Z 115
                                    Xã Quyết Thắng, Thành Phố Thái Nguyên, Thái Nguyên
                                </span>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">
                                <i class="fas fa-phone"></i> 0333588937
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">
                                <i class="fas fa-envelope"></i> NguyenKeLuong@gmail.com
                            </a>
                        </li>
                        <li class="footer__item">
                            <div class="social-group">
                                <a href="#" class="social-item"><i class="fab fa-facebook-f"></i>
                                    </a>
                                <a href="#" class="social-item"><i class="fab fa-twitter"></i>
                                    </a>
                                <a href="#" class="social-item"><i class="fab fa-pinterest-p"></i>
                                    </a>
                                <a href="#" class="social-item"><i class="fab fa-invision"></i>
                                    </a>
                                <a href="#" class="social-item"><i class="fab fa-youtube"></i>  
                                    </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Đăng kí</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <span class="footer__text">Đăng ký để nhận được được thông tin ưu đãi mới nhất từ chúng tôi.</span>
                        </li>
                        <li class="footer__item">
                            <div class="send-email">
                                <input class="send-email__input" type="email" placeholder="Nhập Email...">
                                <a href="#" class="send-email__link">
                                    <i class="fas fa-paper-plane"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <span class="footer__text"> &copy Bản quyền thuộc về <a class="footer__link" href="#"> Nguyễn Kế Lương</a></span>
        </div>
    </div>
    <!-- Modal Form -->

    <?php
$ErrorMessages = array();
$oldValues = array();

$ErrorMessagesLogin = array();
$oldValuesLogin = array();

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["btn btn--default"])) {
   
    // Kiểm tra username
    if (empty($_POST["form-userName"])) {
        $ErrorMessages["form-userName"] = "Vui lòng nhập tên người dùng";
    } else {
        $username = $_POST["form-userName"];
        if (!preg_match("/^[a-zA-Z]*$/", $username) || preg_match("/[0-9]/", $username)) {
            $ErrorMessages["form-userName"] = "Tên không được chứa ký tự đặc biệt hoặc số";
        } else {
            $oldValues["form-userName"] = $username; // Lưu giá trị đã nhập đúng
        }
    }

    // Kiểm tra email
    if (empty($_POST["form-email"])) {
        $ErrorMessages["form-email"] = "Vui lòng nhập địa chỉ email";
    } else {
        $email = $_POST["form-email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $ErrorMessages["form-email"] = "Địa chỉ email không hợp lệ";
        } else {
            $oldValues["form-email"] = $email; // Lưu giá trị đã nhập đúng
        }
    }

    // Kiểm tra password
    if (empty($_POST["form-password"])) {
        $ErrorMessages["form-password"] = "Vui lòng nhập mật khẩu";
    } else {
        $password = $_POST["form-password"];
        // Kiểm tra xem mật khẩu có ít nhất một ký tự đặc biệt và một số không
        if (!preg_match("/[!@#$%^&*()\-_=+{};:,<.>]/", $password) || !preg_match("/[0-9]/", $password)) {
            $ErrorMessages["form-password"] = "Mật khẩu cần chứa ít nhất một ký tự đặc biệt và một số";
        } else {
            $oldValues["form-password"] = $password; // Lưu giá trị đã nhập đúng
        }
    }

    // Kiểm tra confirm password
    if (empty($_POST["confirm-password"])) {
        $ErrorMessages["confirm-password"] = "Vui lòng nhập lại mật khẩu";
    } else {
        $confirm_password = $_POST["confirm-password"];
        if ($confirm_password !== $password) {
            $ErrorMessages["confirm-password"] = "Mật khẩu không khớp";
        }
    }

    // Kiểm tra nếu không có lỗi thì chuyển hướng trang về lại form đăng ký
    if (empty($ErrorMessages)) {
        // Thực hiện xử lý đăng ký ở đây hoặc chuyển hướng trang
        // header("Location: register_process.php");
        // exit;
    }


    // Kiểm tra email đăng nhập
    if (empty($_POST["form-email-login"])) {
        $ErrorMessagesLogin["form-email-login"] = "Vui lòng nhập địa chỉ email";
    } else {
        $emailLogin = $_POST["form-email-login"];
        if (!filter_var($emailLogin, FILTER_VALIDATE_EMAIL)) {
            $ErrorMessagesLogin["form-email-login"] = "Địa chỉ email không hợp lệ";
        } else {
            $oldValuesLogin["form-email-login"] = $emailLogin; // Lưu giá trị đã nhập đúng
        }
    }

    // Kiểm tra password đăng nhập
    if (empty($_POST["passwordlogin"])) {
        $ErrorMessagesLogin["passwordlogin"] = "Vui lòng nhập mật khẩu";
    } else {
        // Xử lý mật khẩu đăng nhập tại đây nếu cần
    }

    // Kiểm tra nếu không có lỗi thì chuyển hướng hoặc xử lý đăng nhập
    if (empty($ErrorMessagesLogin)) {
        // Thực hiện xử lý đăng nhập ở đây hoặc chuyển hướng trang
        // header("Location: login_process.php");
        // exit;
    }
}
?>

<div class="ModalForm">
    <div class="modal" id="my-Register">
        <a href="#" class="overlay-close"></a>
        <div class="authen-modal register">
            <h3 class="authen-modal__title">Đăng Kí</h3>

            <form action="index.php#my-Register" method="post" name="register-form">
                <div class="form-group">
                    <label for="register-account" class="form-label">Họ Tên</label>
                    <p>.</p>
                    <div class="error"><?php echo isset($ErrorMessages["form-userName"]) ? $ErrorMessages["form-userName"] : "" ?></div>
                    <input id="register-account" name="form-userName" type="text" class="form-control" value="<?php echo isset($oldValues['form-userName']) ? htmlspecialchars($oldValues['form-userName']) : ''; ?>">
                    <p>.</p>
                </div>
                <div class="form-group">
                    <label for="register-email" class="form-label">Tài khoản Email *</label>
                    <p>.</p>
                    <div class="error"><?php echo isset($ErrorMessages["form-email"]) ? $ErrorMessages["form-email"] : "" ?></div>
                    <input id="register-email" name="form-email" type="text" class="form-control" value="<?php echo isset($oldValues['form-email']) ? htmlspecialchars($oldValues['form-email']) : ''; ?>">
                    <div>.</div>
                </div>
                <div class="form-group">
                    <label for="register-password" class="form-label">Mật khẩu *</label>
                    <p>.</p>
                    <div class="error"><?php echo isset($ErrorMessages["form-password"]) ? $ErrorMessages["form-password"] : "" ?></div>
                    <input id="register-password" name="form-password" type="password" class="form-control" value="<?php echo isset($oldValues['form-password']) ? htmlspecialchars($oldValues['form-password']) : ''; ?>">
                    <p>.</p>
                </div>
                <div class="form-group">
                    <label for="confirm-password" class="form-label">Nhập lại mật khẩu *</label>
                    <p>.</p>
                    <div class="error"><?php echo isset($ErrorMessages["confirm-password"]) ? $ErrorMessages["confirm-password"] : "" ?></div>
                    <input id="confirm-password" name="confirm-password" type="password" class="form-control" value="<?php echo isset($oldValues['confirm-password']) ? htmlspecialchars($oldValues['confirm-password']) : ''; ?>">
                    <p>.</p>
                </div>

                <div class="authen__btns">
                    <button type="submit" class="btn btn--default">Đăng Ký</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal" id="my-Login">
    <a href="#" class="overlay-close"></a>
    <form action="index.php#my-Login" method="post">
        <div class="authen-modal login">
            <h3 class="authen-modal__title">Đăng Nhập</h3>
            <div class="form-group">
                <label for="login-account" class="form-label">Địa chỉ email *</label>
                <br>
                <div class="error"><?php echo isset($ErrorMessagesLogin["form-email-login"]) ? $ErrorMessagesLogin["form-email-login"] : "" ?></div>
                <input id="login-account" name="form-email-login" type="text" class="form-control" value="<?php echo isset($oldValuesLogin['form-email-login']) ? htmlspecialchars($oldValuesLogin['form-email-login']) : ''; ?>">
                <a>.</a>
            </div>
            <div class="form-group">
                <label for="login-password" class="form-label">Mật khẩu *</label>
                <div class="error"><?php echo isset($ErrorMessagesLogin["passwordlogin"]) ? $ErrorMessagesLogin["passwordlogin"] : "" ?></div>
                <input id="login-password" name="passwordlogin" type="password" class="form-control">
            </div>

            <div class="authen__btns">
                <button type="submit" class="btn btn--default">Đăng Nhập</button>
                <input type="checkbox" class="authen-checkbox">
                <label class="form-label">Ghi nhớ mật khẩu</label>
            </div>
            
            <a class="authen__link">Quên mật khẩu ?</a>
        </div>
    </form>
</div>


            
        </div>
        </form>
        <div class="up-top" id="upTop" onclick="goToTop()">
            <i class="fas fa-chevron-up"></i>
        </div>

    </div>
    <script>
        $('.owl-carousel.hight').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
        $('.owl-carousel.news').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        })
        $('.owl-carousel.bands').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        })
    </script>
    <!-- Script common -->
    <script src="./assets/js/homeScript.js"></script>
    <script src="./assets/js/commonscript.js"></script>
</body>

</html>
<?php
function checklogin(){

}
?>