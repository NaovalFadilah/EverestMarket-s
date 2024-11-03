@extends('pages.app')
@section('title', 'Male-Fashion | Information')

@section('content')
    <style>
        #page-footer {
            display: none;
        }

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
    </div>

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
    <script>
        function showTab(tab) {
            document.querySelectorAll('.tab-btn').forEach(button => button.classList.remove('active'));
            document.querySelectorAll('.product-list').forEach(list => list.classList.remove('active'));

            document.querySelector(`[onclick="showTab('${tab}')"]`).classList.add('active');
            document.getElementById(tab).classList.add('active');
        }
    </script>
@endsection('content')
