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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Nunito Sans', Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .product-detail {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            margin: 20px auto;
        }

        .product-images {
            flex: 1;
            text-align: center;
        }

        .product-images img {
            width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .thumbnails {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        .thumbnails img {
            width: 60px;
            height: auto;
            cursor: pointer;
        }

        .product-info {
            flex: 1;
            text-align: left;
        }

        .product-info h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .price {
            font-size: 28px;
            color: red;
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .rating-section {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
        }

        .shipping-info {
            margin-bottom: 20px;
            font-size: 14px;
            color: #666;
        }

        .quantity-stock {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .quantity-buttons {
            display: flex;
            align-items: center;
        }

        .quantity-btn {
            width: 30px;
            height: 30px;
            font-size: 16px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        .quantity-buttons input {
            width: 50px;
            text-align: center;
            border: 1px solid #ccc;
            margin: 0 5px;
        }

        .product-action {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .cart-btn,
        .buy-btn {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            color: white;
            border-radius: 5px;
        }

        .cart-btn {
            background-color: #007bff;
        }

        .buy-btn {
            background-color: #28a745;
        }

        .product-description {
            margin: 40px auto;
            text-align: center;
        }

        .product-description h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .product-description p,
        .product-features li {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .product-features {
            list-style-type: disc;
            padding-left: 40px;
            text-align: left;
        }

        .rating-overview,
        .reviews {
            margin: 20px auto;
            max-width: 1000px;
        }

        .rating-score {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 24px;
        }

        .star-rating {
            font-size: 20px;
            color: orange;
        }

        .review-item {
            border-bottom: 1px solid #ddd;
            padding: 20px 0;
        }

        .review-user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .helpful-btn {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .helpful-btn:hover {
            background-color: #0056b3;
        }

        /* CSS untuk review media dan gambar */
.review-media {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}

.review-image {
    width: 100px;  /* Gambar lebih kecil */
    height: 100px;
    object-fit: cover;  /* Untuk mengatur gambar agar tidak terdistorsi */
    cursor: pointer;  /* Agar user tahu gambar bisa diklik */
}

video {
    width: 200px;  /* Atur ukuran video */
    height: auto;
}

/* CSS untuk pop-up modal */
.popup-modal {
    display: none; /* Sembunyikan modal secara default */
    position: fixed; 
    z-index: 1000; /* Di atas semua konten */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.8); /* Latar belakang gelap */
}

.popup-content {
    margin: auto;
    display: block;
    max-width: 80%;
    max-height: 80%;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 25px;
    color: white;
    font-size: 35px;
    font-weight: bold;
    cursor: pointer;
}
.helpful-btn {
            display: flex;
            align-items: center;
            background: none;
            border: none;
            color: black;
            cursor: pointer;
            transition: color 0.3s; /* Transisi warna saat hover */
        }
        .helpful-btn i {
            margin-right: 5px;
        }
        .helpful-btn:hover {
            color: orange; /* Warna tombol saat hover */
        }
        .like-count {
            margin-left: 5px;
            color: black; /* Warna default untuk jumlah like */
        }
    </style>
</head>

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
                        <a href="shop.html">
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
    <!-- Header Section End -->

    <div class="container">
        <!-- Product Detail Section -->
        <div class="product-detail">
            <div class="product-images">
                <img id="mainImage" src="img/ever/1.png" alt="Product Image" />
                <div class="thumbnails">
                    <img src="img/ever/4.png" alt="Photo 1" onclick="changeImage('4.png')" />
                    <img src="img/ever/2.png" alt="Photo 2" onclick="changeImage('2.png')" />
                    <img src="img/ever/3.png" alt="Photo 3" onclick="changeImage('3.png')" />
                </div>
            </div>

            <div class="product-info">
                <h2>Prestone Air Radiator Coolant Hijau 3.78 Liter Cairan Pendingin Mobil Motor Antifreeze Original</h2>

                <!-- Rating Section -->
                <div class="rating-section">
                    <span>⭐⭐⭐⭐⭐</span>
                    <span>297 Penilaian</span> |
                    <span>630 Terjual</span>
                </div>

                <!-- Price Section -->
                <p class="price">Rp115.000</p>

                <!-- Shipping Info -->
                <div class="shipping-info">
                    <p>Pengembalian: Bebas Pengembalian</p>
                    <p>Pengiriman: Gratis Ongkir | Pengiriman Ke: <strong>KOTA JAKARTA PUSAT</strong></p>
                </div>

                <!-- Quantity and Stock -->
                <div class="quantity-stock">
                    <label for="quantity" style="margin-right: 1%;">Qty:</label>
                    <div class="quantity-buttons">
                        <button class="quantity-btn" onclick="decrementQuantity()">-</button>
                        <input type="number" id="quantity" value="1" min="1">
                        <button class="quantity-btn" onclick="incrementQuantity()">+</button>
                    </div>
                    <p style="margin-left: 10px;">Tersisa 842 buah</p>
                </div>

                <!-- Action Buttons -->
                <div class="product-action">
                    <button class="cart-btn">Masukkan Keranjang</button>
                    <button class="buy-btn"><a href="shopping-cart.html">Beli Sekarang</a></button>
                </div>
            </div>
        </div>

        <!-- Product Description Section -->
        <section class="product-description">
            <h2>Product Description</h2>
            <p>This is an excellent product that provides superior comfort and durability. Crafted with premium materials, it is designed to last and cater to your style needs.</p>
            <ul class="product-features">
                <li>High-quality fabric</li>
                <li>Comfortable fit</li>
                <li>Available in various sizes</li>
                <li>Durable stitching</li>
                <li>Unique design patterns</li>
            </ul>
        </section>
    </div>


    <div class="product-reviews">
        <!-- Rating Section -->
        <div class="rating-overview">
            <div class="rating-score">
                <h2>5.0</h2>
                <p>dari 5</p>
                <div class="star-rating">
                    <span>⭐⭐⭐⭐⭐</span>
                </div>
            </div>
            
            <div class="rating-filters">
                <button class="filter-btn">Semua</button>
                <button class="filter-btn">5 Bintang (286)</button>
                <button class="filter-btn">4 Bintang (11)</button>
                <button class="filter-btn">3 Bintang (0)</button>
                <button class="filter-btn">2 Bintang (0)</button>
                <button class="filter-btn">1 Bintang (0)</button>
                <button class="filter-btn">Dengan Media (48)</button>
                <button class="filter-btn">Langganan (7)</button>
            </div>
        </div>
    
<!-- Review Comments Section -->
<!-- HTML Review Section -->
<div class="reviews">
    <div class="review-item">
        <div class="review-header">
            <div class="review-user">
                <img src="img/ever/gita.jpeg" alt="user-avatar" class="user-avatar">
                <span class="user-name">Nagita Slavina</span>
                <span class="review-date">2023-04-13 11:28</span>
            </div>
            <div class="review-rating">
                <span>⭐⭐⭐⭐⭐</span>
            </div>
        </div>
        <div class="review-body">
            <p><strong>Performa:</strong> precision</p>
            <p><strong>Kualitas:</strong> extended life</p>
            <p><strong>Cocok Untuk:</strong> pendingin radiator mesin</p>
            <p>Alhamdulillah paket coolant telah sampai. Produk Aman packing rapi ga penyok2. Prestone kwality... Rekomendasi tokonya amanah. Puas belanja di sini. Jangan ragu belanja disini. Terimakasih.. selamat menunaikan ibadah puasa.</p>
            <div class="review-media">
                <img src="img/ever/2.png" alt="review media" class="review-image" onclick="openPopup(this.src)">
                <img src="img/ever/prestone.png" alt="review media" class="review-image" onclick="openPopup(this.src)">
                <video controls>
                    <source src="img/ever/vierra.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="review-footer">
            <button class="helpful-btn" id="like-btn">
                <span class="like-count" id="like-count">0</span><i class="fas fa-thumbs-up ml-2"></i> 
                Membantu? 
            </button>
        </div>
        <div class="comments mt-3">
        <textarea name="message-comment" id="" style="width: 100%;" placeholder=" Balas Pesan..."></textarea>
    </div>
    </div>
</div>
<div class="reviews">
    <div class="review-item">
        <div class="review-header">
            <div class="review-user">
                <img src="img/ever/raffi.jpg" alt="user-avatar" class="user-avatar">
                <span class="user-name">Raffi Ahmad</span>
                <span class="review-date">2023-04-13 11:28</span>
            </div>
            <div class="review-rating">
                <span>⭐⭐⭐⭐⭐</span>
            </div>
        </div>
        <div class="review-body">
            <p><strong>Performa:</strong> precision</p>
            <p><strong>Kualitas:</strong> extended life</p>
            <p><strong>Cocok Untuk:</strong> pendingin radiator mesin</p>
            <p>Alhamdulillah paket coolant telah sampai. Produk Aman packing rapi ga penyok2. Prestone kwality... Rekomendasi tokonya amanah. Puas belanja di sini. Jangan ragu belanja disini. Terimakasih.. selamat menunaikan ibadah puasa.</p>
            <div class="review-media">
                <img src="img/ever/2.png" alt="review media" class="review-image" onclick="openPopup(this.src)">
                <img src="img/ever/prestone.png" alt="review media" class="review-image" onclick="openPopup(this.src)">
                <video controls>
                    <source src="img/ever/vierra.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="review-footer">
            <button class="helpful-btn" id="like-btn">
                <span class="like-count" id="like-count">0</span><i class="fas fa-thumbs-up ml-2"></i> 
                Membantu? 
            </button>
        </div>
        <div class="comments mt-3">
        <textarea name="message-comment" id="" style="width: 100%;" placeholder=" Balas Pesan..."></textarea>
    </div>
    </div>
</div>

<!-- Pop-up Modal -->
<div id="popup-modal" class="popup-modal">
    <span class="close-btn" onclick="closePopup()">&times;</span>
    <img class="popup-content" id="popup-image">
</div>

</div>

<div class="row justify-content-center">
    <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="img/ever/000051.png">
                <ul class="product__hover">
                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6 style="font-size: 12px;">TOP 1 Air Radiator Power Coolant Merah 1 Liter Cairan Pendingin Mobil Motor Pencegah Karat & Korosi</h6>
                <a href="#" class="add-cart" style="font-size: 12px;">+ Add To Cart</a>
                <div class="rating">
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                </div>
                <h5 style="font-size: 14px;">Rp33.500</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="product__item sale">
            <div class="product__item__pic set-bg" data-setbg="img/ever/1.png">
                <span class="label">Sale</span>
                <ul class="product__hover">
                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6 style="font-size: 12px;">TOP 1 Air Radiator Power Coolant Hijau 1 Liter Cairan Pendingin Mobil Motor Pencegah Karat & Korosi</h6>
                <a href="#" class="add-cart" style="font-size: 12px;">+ Add To Cart</a>
                <div class="rating">
                    <i class="fa fa-star" style="font-size: 10px;"></i>
                    <i class="fa fa-star" style="font-size: 10px;"></i>
                    <i class="fa fa-star" style="font-size: 10px;"></i>
                    <i class="fa fa-star" style="font-size: 10px;"></i>
                    <i class="fa fa-star" style="font-size: 10px;"></i>
                </div>
                <h5 style="font-size: 14px;">Rp33.500</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="img/ever/3.png">
                <ul class="product__hover">
                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6 style="font-size: 12px;">Master Air Radiator Coolant Hijau 1 Liter Cairan Pendingin Mobil Motor Pencegah Karat & Korosi Original</h6>
                <a href="#" class="add-cart" style="font-size: 12px;">+ Add To Cart</a>
                <div class="rating">
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                </div>
                <h5 style="font-size: 14px;">Rp20.800</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="img/ever/3.png">
                <ul class="product__hover">
                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6 style="font-size: 12px;">Master Air Radiator Coolant Hijau 1 Liter Cairan Pendingin Mobil Motor Pencegah Karat & Korosi Original</h6>
                <a href="#" class="add-cart" style="font-size: 12px;">+ Add To Cart</a>
                <div class="rating">
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                    <i class="fa fa-star-o" style="font-size: 10px;"></i>
                </div>
                <h5 style="font-size: 14px;">Rp20.800</h5>
            </div>
        </div>
    </div>
</div>

</body>

    
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function changeImage(image) {
                document.getElementById("mainImage").src = "img/ever/" + image;
            }

            function playVideo() {
                document.getElementById("videoModal").style.display = "block";
                document.getElementById("productVideo").play(); // Memutar video saat modal terbuka
            }

            function closeVideo() {
                document.getElementById("videoModal").style.display = "none";
                document.getElementById("productVideo").pause(); // Menghentikan video saat modal ditutup
                document.getElementById("productVideo").currentTime = 0; // Mengatur waktu video kembali ke awal
            }

            // Menambah jumlah produk
            document.querySelectorAll('.quantity-btn').forEach(function (button) {
                button.addEventListener('click', function () {
                    var input = this.parentNode.querySelector('input[type="number"]');
                    var currentValue = parseInt(input.value);

                    // Jika tombol yang diklik adalah tombol minus
                    if (this.innerText === '-') {
                        if (currentValue > 1) {
                            input.value = currentValue - 1;
                        }
                    }

                    // Jika tombol yang diklik adalah tombol plus
                    if (this.innerText === '+') {
                        input.value = currentValue + 1;
                    }
                });
            });

            function openPopup(src) {
    var modal = document.getElementById("popup-modal");
    var popupImage = document.getElementById("popup-image");

    // Set the source of the popup image
    popupImage.src = src;
    
    // Display the modal
    modal.style.display = "block";
}

function closePopup() {
    var modal = document.getElementById("popup-modal");
    modal.style.display = "none";
}
const likeBtn = document.getElementById('like-btn');
    const likeCount = document.getElementById('like-count');
    let count = 0;

    likeBtn.addEventListener('click', function() {
        count++; // Tambah jumlah like
        likeCount.textContent = count; // Tampilkan jumlah like
    });
        </script>
</body>

</html>