@extends('pages.app')
@section('title', 'Male-Fashion | Checkout')

@section('content')
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a
                                    href="#">Click
                                    here</a> to enter your code</h6>
                            <h6 class="checkout__title">Details Checkout</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nama Depan<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nama Lengkap<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Negara<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Alamat<span>*</span></p>
                                <input type="text" placeholder="Provinsi, Kota, Kecamatan, Kode POS"
                                    class="checkout__input__add">
                            </div>
                            <div class="checkout__input">
                                <p>Alamat<span>*</span></p>
                                <input type="text" placeholder="Nama Jalan, Gedung, No Rumah, Detail lainya"
                                    class="checkout__input__add">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nomor Handphone<span>*</span></p>
                                        <input type="number">
                                    </div>
                                </div>
                                <div class="checkout__input">
                                    <p>Kode Voucher Promo<span>*</span></p>
                                    <input type="text" placeholder="B134-XXXX-XXXX" class="checkout__input__add">
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Alamat Email<span>*</span></p>
                                        <input type="email">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="checkout__input__checkbox">
                                            <label for="acc">
                                                Create an account?
                                                <input type="checkbox" id="acc">
                                                <span class="checkmark"></span>
                                            </label>
                                            <p>Create an account by entering the information below. If you are a returning customer
                                            please login at the top of the page</p>
                                        </div> -->
                        </div>
                    </div>
                </form>
                <a href="shopping-cart.html" class="primary-btn">Simpan</a>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
@endsection('content')
