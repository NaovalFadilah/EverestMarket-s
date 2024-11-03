<!-- resources/views/shop.blade.php -->
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
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
    }

    .image-scroll-container {
        width: 100%;
        max-width: 1000px;
        overflow: hidden;
        position: relative;
        margin: 0 auto;
        /* height: 300px; */
    }

    .image-scroll {
        display: flex;
        transition: transform 0.5s ease;
    }

    .image-scroll img {
        width: 100%;
        height: 100%;
        /* Fill the container height */
        object-fit: contain;
        /* Maintain aspect ratio without cutting */
        flex-shrink: 0;
    }

    .nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        z-index: 1;
    }

    .prev-btn {
        left: 10px;
    }

    .next-btn {
        right: 10px;
    }

    .shop__product__option__right {
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.shop__product__option__right p {
    margin-right: 10px;
}

.shop__product__option__right select {
    margin-right: 10px;
}

.text-show-all a {
    color: #007bff;
    text-decoration: none;
}

.text-show-all a:hover {
    text-decoration: underline;
}
</style>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Sign in</a>
                                <a href="#">FAQs</a>
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
                            <a href="{{ route('shop.index') }}">
                            <!-- <img src="img/logo.png" alt=""> -->
                             <h3 style="font-weight: bold;">EVEREST</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li class="active"><a href="./shop.html">Shop</a></li>
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
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                        <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">Rp 100.000</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="shop__sidebar__search">
                <form action="#">
                    <input type="text" placeholder="Cari Barang ...">
                    <button type="submit"><span class="icon_search"></span></button>
                </form>
            </div>
        </div>
    </section>
    <br>
    <!-- Breadcrumb Section End -->
    <div class="container">
        <div class="image-scroll-container">
            <div class="image-scroll" id="scroll-container">
                <img src="img/ever/section1.jpg" alt="Image 1">
                <img src="img/ever/section2.jpg" alt="Image 2">
                <img src="img/ever/section3.jpg" alt="Image 3">
            </div>
            <button class="nav-btn prev-btn" onclick="scrollPrev()">&#10094;</button>
            <button class="nav-btn next-btn" onclick="scrollNext()">&#10095;</button>
        </div>
    </div>
    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Kategori</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li><a href="#">Coolant/Air Radiator (20)</a></li>
                                                    <li><a href="#">Ban Dalam (20)</a></li>
                                                    <li><a href="#">Air Accu (20)</a></li>
                                                    <li><a href="#">Klakson (20)</a></li>
                                                    <li><a href="#">Busi Mobil (20)</a></li>
                                                    <li><a href="#">Busi Motor (20)</a></li>
                                                    <li><a href="#">Kampas Rem Belakang (20)</a></li>
                                                    <li><a href="#">Kampas Rem Depan (20)</a></li>
                                                    <li><a href="#">Filter Udara (20)</a></li>
                                                    <li><a href="#">Filter Oli (20)</a></li>
                                                    <li><a href="#">Oli Pertamina (20)</a></li>
                                                    <li><a href="#">Oli Castrol (20)</a></li>
                                                    <li><a href="#">Oli Honda (20)</a></li>
                                                    <li><a href="#">Oli Idemitsu (20)</a></li>
                                                    <li><a href="#">Oli Total (20)</a></li>
                                                    <li><a href="#">Oli Motul (20)</a></li>
                                                    <li><a href="#">Oli SGO (20)</a></li>
                                                    <li><a href="#">Oli TMO (20)</a></li>
                                                    <li><a href="#">Parfum (20)</a></li>
                                                    <li><a href="#">Minyak Rem (20)</a></li>
                                                    <li><a href="#">Turtle Wax & Kit (20)</a></li>
                                                    <li><a href="#">Samurai Paint (20)</a></li>
                                                    <li><a href="#">Perawatan Kendaraan (20)</a></li>
                                                    <li><a href="#">Wiper Bosch Advantage (20)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Brand</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li><a href="#">3M</a></li>
                                                    <li><a href="#">AHM</a></li>
                                                    <li><a href="#">AION</a></li>
                                                    <li><a href="#">Auto Fit</a></li>
                                                    <li><a href="#">Brighton</a></li>
                                                    <li><a href="#">Castrol</a></li>
                                                    <li><a href="#">Cobra</a></li>
                                                    <li><a href="#">Daihatsu</a></li>
                                                    <li><a href="#">Daikin</a></li>
                                                    <li><a href="#">Daikin</a></li>
                                                    <li><a href="#">Dextone</a></li>
                                                    <li><a href="#">Federal</a></li>
                                                    <li><a href="#">Honda</a></li>
                                                    <li><a href="#">Isuzu</a></li>
                                                    <li><a href="#">Kingland</a></li>
                                                    <li><a href="#">NGK</a></li>
                                                    <li><a href="#">Suzuki</a></li>
                                                    <li><a href="#">Threebond</a></li>
                                                    <li><a href="#">Toyota</a></li>
                                                    <li><a href="#">Turtle Wax</a></li>
                                                    <li><a href="#">Yamaha</a></li>
                                                    <li><a href="#">Yuasa</a></li>
                                                    <li><a href="#">Zone</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of 126 results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right d-flex align-items-center justify-content-end">
                                    <p>Urutkan berdasarkan:</p>
                                    <select>
                                        <option value="">Harga</option>
                                        <option value="">Harga Rendah ke Tinggi</option>
                                        <option value="">Tinggi ke Harga Rendah</option>
                                    </select>
                                    <div class="text-show-all ml-3">
                                        <a href="#" style="text-decoration: none;"><span>Lihat Semua</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/ever/000051.png">
                                    <ul class="product__hover">
                                        <li><a href="shop-details.html"><img src="img/icon/heart.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>TOP 1 Air Radiator Power Coolant Merah 1 Liter Cairan Pendingin Mobil Motor Pencegah Karat & Korosi</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>Rp33.500</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/ever/1.png">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>TOP 1 Air Radiator Power Coolant Hijau 1 Liter Cairan Pendingin Mobil Motor Pencegah Karat & Korosi</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h5>Rp33.500</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/ever/2.png">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Master Air Radiator Coolant Hijau 1 Liter Cairan Pendingin Mobil Motor Pencegah Karat dan Korosi Original</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>Rp20.800</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/ever/3.png">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Prestone Air Radiator Coolant Hijau 1 Liter Cairan Pendingin Mobil Motor Antifreeze Original    </h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>Rp35.000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/ever/4.png">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Prestone Air Radiator Coolant Hijau 3.78 Liter Cairan Pendingin Mobil Motor Antifreeze Original</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>Rp115.000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/ever/5.png">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Wurth Air Radiator Coolant Hijau 5 Liter Cairan Pendingin Mobil Motor Pencegah Karat dan Korosi</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>    
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>Rp107.000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg">
                                    <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98z-lrgqs3qtxlis79.webp"
                                        alt="">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Yuasa Air Aki Accu 1 Liter Demineralized Battery Water untuk nambah</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>Rp8.500</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg">
                                    <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98x-m03vlycnixgtaf.webp"
                                        alt="">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Pertamina Enduro Racing 4T SAE 10W-40 1 Liter API SN Oli Motor Manual Mesin Bensin Pelumas Full Synthetic Anti Slip Original</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>Rp68.000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg">
                                    <img src="https://down-id.img.susercontent.com/file/sg-11134201-22110-daikp78hqejv8b.webp"
                                        alt="">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>OLI SCOOTER MOTUL LE 10W-30 0.8L - OLI MOTUL SCOOTER LE 10W30 MATIC</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>Rp72.800</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg">
                                    <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98r-ltqj2sy304c66a@resize_w450_nl.webp"
                                        alt="">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Prestone Air Radiator Coolant Hijau 1 Liter Cairan Pendingin Mobil Motor Antifreeze Original</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>Rp35.000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg">
                                    <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98y-ltmbz6ix51j660@resize_w450_nl.webp"
                                        alt="">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Oli Mesin Mobil Castrol MAGNATEC 10W-40 (4L)</h6>
                                    <br>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>Rp422.151</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg">
                                    <img src="https://down-id.img.susercontent.com/file/id-11134207-7r991-lrmrejcfcx8mc2.webp"
                                        alt="">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Burgari Gemuk Chassis Merah 455gr High Temperatur Grease Hi-Temp Stempet Chasis Tahan Panas Pelumas</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>Rp42.000</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2020
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

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
    <script src="js/main.js"></script>
    <script>
        let scrollPosition = 0;
        const scrollContainer = document.getElementById('scroll-container');
        const images = scrollContainer.getElementsByTagName('img');
        const totalImages = images.length;
        let imageWidth = scrollContainer.clientWidth;

        // Auto-scroll interval set to 3 seconds
        let autoScroll = setInterval(scrollNext, 3000);

        // Move to the next image
        function scrollNext() {
            if (scrollPosition > -(imageWidth * (totalImages - 1))) {
                scrollPosition -= imageWidth;
            } else {
                scrollPosition = 0;
            }
            scrollContainer.style.transform = `translateX(${scrollPosition}px)`;
        }

        // Move to the previous image
        function scrollPrev() {
            if (scrollPosition < 0) {
                scrollPosition += imageWidth;
            } else {
                scrollPosition = -(imageWidth * (totalImages - 1));
            }
            scrollContainer.style.transform = `translateX(${scrollPosition}px)`;
        }

        // Reset auto-scroll when navigation buttons are clicked
        function resetAutoScroll() {
            clearInterval(autoScroll);
            autoScroll = setInterval(scrollNext, 3000);
        }

        document.querySelector('.next-btn').addEventListener('click', resetAutoScroll);
        document.querySelector('.prev-btn').addEventListener('click', resetAutoScroll);

        // Update image width on window resize
        window.addEventListener('resize', function () {
            imageWidth = scrollContainer.clientWidth;
            const currentImageIndex = Math.abs(scrollPosition / imageWidth);
            scrollPosition = -imageWidth * currentImageIndex;
            scrollContainer.style.transform = `translateX(${scrollPosition}px)`;
        });

    </script>
</body>

</html>