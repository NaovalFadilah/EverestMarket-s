<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
.container-2 {
    max-width: 1000px;
    margin: 0 auto;
    font-family: Arial, sans-serif;
}

.tab-buttons {
    display: flex;
    margin-bottom: 20px;
}

.tab-btn {
    flex: 1;
    padding: 10px;
    cursor: pointer;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    border-bottom: none;
    text-align: center;
    font-weight: bold;
}

.tab-btn.active {
    background-color: #fff;
    border-bottom: 2px solid #ff5722;
    color: #ff5722;
}

.product-list {
    display: none;
    border: 1px solid #ddd;
    padding: 10px;
    background-color: #fff;
}

.product-list.active {
    display: block;
}

.product-item {
    display: flex;
    align-items: center;
    padding: 15px 0;
    border-bottom: 1px solid #eee;
}

.product-item:last-child {
    border-bottom: none;
}

.product-image {
    width: 10%;
    margin-right: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.product-info {
    display: flex;
    flex-direction: column;
}

.product-info h4 {
    margin: 0;
    font-size: 20px;
    font-weight: bold;
}

.product-info p {
    margin: 5px 0 0;
    color: #666;
}




</style>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->
<!-- Profile Page Begin -->
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Sign in</a>
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html">
                            <!-- <img src="img/logo.png" alt=""> -->
                             <h3 style="font-weight: bold;">EVEREST</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./shop.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                        <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Hero Section End -->

<br>
<div class="container-2">
    <div class="tab-buttons">
        <button class="tab-btn active" onclick="showTab('all')">Semua</button>
        <button class="tab-btn" onclick="showTab('unpaid')">Belum Bayar</button>
        <button class="tab-btn" onclick="showTab('unpaid2')">Di Kemas</button>
        <button class="tab-btn" onclick="showTab('unpaid3')">Di Kirim</button>
        <button class="tab-btn" onclick="showTab('unpaid4')">Pengembalian</button>
        <button class="tab-btn" onclick="showTab('unpaid5')">Selesai</button>
        <button class="tab-btn" onclick="showTab('unpaid6')">Di Batalkan</button>
    </div>
    
    <div id="all" class="product-list active">
        <div class="product-item">
            <img src="img/ever/4.png" alt="Produk A" class="product-image">
            <div class="product-info">
                <h4>Produk A</h4>
                <p>Status: Dibayar</p>
            </div>
        </div>
        <div class="product-item">
            <img src="img/ever/2.png" alt="Produk B" class="product-image">
            <div class="product-info">
                <h4>Produk B</h4>
                <p>Status: <span style="color: red;">Belum Dibayar</span></p>
            </div>
        </div>
        <div class="product-item">
            <img src="img/ever/3.png" alt="Produk C" class="product-image">
            <div class="product-info">
                <h4>Produk C</h4>
                <p>Status: Dibayar</p>
            </div>
        </div>
    </div>
    
    <div id="unpaid" class="product-list">
        <div class="product-item">
            <h4>Produk B</h4>
            <p>Status: Belum Dibayar</p>
        </div>
    </div>
    <div id="unpaid2" class="product-list">
        <div class="product-item">
            <h4>Produk B</h4>
            <p>Status: Belum Dibayar</p>
        </div>
    </div>
    <div id="unpaid3" class="product-list">
        <div class="product-item">
            <h4>Produk B</h4>
            <p>Status: Belum Dibayar</p>
        </div>
    </div>
    <div id="unpaid4" class="product-list">
        <div class="product-item">
            <h4>Produk B</h4>
            <p>Status: Belum Dibayar</p>
        </div>
    </div>
    <div id="unpaid5" class="product-list">
        <div class="product-item">
            <h4>Produk B</h4>
            <p>Status: Belum Dibayar</p>
        </div>
    </div>
    <div id="unpaid6" class="product-list">
        <div class="product-item">
            <h4>Produk B</h4>
            <p>Status: Belum Dibayar</p>
        </div>
    </div>
</div>    
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="script.js"></script>
    <script src="js/main.js"></script>
    <script>
function showTab(tab) {
    document.querySelectorAll('.tab-btn').forEach(button => button.classList.remove('active'));
    document.querySelectorAll('.product-list').forEach(list => list.classList.remove('active'));

    document.querySelector(`[onclick="showTab('${tab}')"]`).classList.add('active');
    document.getElementById(tab).classList.add('active');
}




    </script>
</body>

</html>