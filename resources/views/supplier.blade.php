@extends('layouts.mainLayout')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center position-relative">
        <div class="ornament">
            <img src="{{ asset('img/right.png') }}" class="ornament-right img-fluid" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-img align-self-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/supplier-cover.png') }}" class="img-fluid mobile-show" alt="" />
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center text-lg-start">
                    <h1 data-aos="fade-up">
                        Kamu Produsen? <br>
                        Ingin Bisnis Lebih Besar Lagi? <br>
                        Yuk Gabung Bersama Kami
                    </h1>
                    <div class="col-lg-6 hero-img align-self-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('img/supplier-cover.png') }}" class="img-fluid mobile-hide" alt="" />
                    </div>
                    <h2 data-aos="fade-up" data-aos-delay="400">
                        Bayangkan jika kamu menjadi Supplier di HERVA ID dan punya 100
                        Dropshipper saja, rata-rata 1 orang Dropshipper mengiklankan
                        produk kamu kurang lebih 50 - 100 ribu perhari.
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="">
                            <a href="/daftar-supplier"
                                class="btn-get-started d-inline-flex align-items-center justify-content-center align-self-center">
                                <span class="text-white">Daftar Sekarang</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <div class="position-relative little-yellow-right">
        <div class="ornament">
            <img src="{{ asset('img/little-right-yellow.png') }}" class="ornament-right" />
        </div>
    </div>

    <main id="main">
        <!-- mengapa kami -->
        <section id="mk" class="mk position-relative big-left-yellow">
            <div class="ornament">
                <img src="{{ asset('img/left-yellow.png') }}" alt="ornament" class="ornament-left" />
            </div>
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="" data-aos="fade-up" data-aos-delay="200">
                        <div class="mengapa-kami">
                            <header class="section-header mt-3 pb-0">
                                <img src="{{ asset('img/logo-herva.png') }}" alt="logo-herva-id" class="img-fluid" />
                                <h2 class="mt-4">
                                    ADALAH PLATFORM YANG MUNCUL UNTUK MEMBANTU MENGGABUNGKAN
                                    ANTARA SUPPLIER DAN RESELLER
                                </h2>
                                <br />
                                <p class="mb-lg-3">Mengapa Harus Memilih Kami ?</p>
                            </header>

                            <div class="col-lg-12 mt-5 mt-lg-0 d-flex">
                                <div class="row align-self-center gy-4 mb-3 features">
                                    <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                                        <div class="feature-box d-flex align-items-center">
                                            <i class="bi bi-check"></i>
                                            <h3>
                                                Bekerjasama dengan <span>ratusan reseller </span> yang
                                                siap memasarkan produk supplier
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="col-md-12" data-aos="zoom-out" data-aos-delay="300">
                                        <div class="feature-box d-flex align-items-center">
                                            <i class="bi bi-check"></i>
                                            <h3>
                                                Bekerjasama dengan berbagai ekspedisi untuk distribusi
                                                dan pengiriman barang
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="col-md-12" data-aos="zoom-out" data-aos-delay="400">
                                        <div class="feature-box d-flex align-items-center">
                                            <i class="bi bi-check"></i>
                                            <h3>
                                                <span>Gratis biaya pendaftaran</span> sebagai mitra
                                                supplier
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="col-md-12" data-aos="zoom-out" data-aos-delay="500">
                                        <div class="feature-box d-flex align-items-center">
                                            <i class="bi bi-check"></i>
                                            <h3>Menyediakan sistem dropship</h3>
                                        </div>
                                    </div>

                                    <div class="col-md-12" data-aos="zoom-out" data-aos-delay="600">
                                        <div class="feature-box d-flex align-items-center">
                                            <i class="bi bi-check"></i>
                                            <h3><span>Team support</span> yang siap membantu</h3>
                                        </div>
                                    </div>

                                    <div class="col-md-12" data-aos="zoom-out" data-aos-delay="700">
                                        <div class="feature-box d-flex align-items-center">
                                            <i class="bi bi-check"></i>
                                            <h3>
                                                Fokus <span>membantu supplier</span> atau
                                                <span>UMKM lokal (JAWA TIMUR)</span> yang membutuhkan
                                                chanel pemasaran baru melalui platform
                                                <span>HERVA.ID</span>
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="col-md-12" data-aos="zoom-out" data-aos-delay="800">
                                        <div class="feature-box d-flex align-items-center">
                                            <i class="bi bi-check"></i>
                                            <h3>
                                                Memberi edukasi kepada UMKM/Supplier dan reseller
                                                dalam bisnis
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="col-md-12" data-aos="zoom-out" data-aos-delay="900">
                                        <div class="feature-box d-flex align-items-center">
                                            <i class="bi bi-check"></i>
                                            <h3>
                                                Kami <span>berkomitmen</span> untuk terus meningkatkan
                                                kualitas layanan, serta menambah range produk,
                                                sehingga pangsa pasar akan menjadi
                                                <span>semakin luas</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of mengapa kami -->

        <div class="big-left-green position-relative">
            <section class="ornament">
                <img src="{{ asset('img/left-green.png') }}" alt="ornament" class="ornament-left" />
            </section>
        </div>

        <!-- ======= Features Section ======= -->
        <section id="features" class="features keuntungan-supp">
            <div class="container" data-aos="fade-up">
                <header class="keuntungan-header text-white">
                    <h2>advantage</h2>
                    <p>Keuntungan Jadi Supplier</p>
                </header>

                <div class="row mt-3">
                    <div class="col-lg-12 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4 mb-3">
                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>
                                        Jika tidak ada marketing kit kami bisa membantu membuat video atau foto herva dapat
                                        membantu secara profesional
                                    </h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Video Edukasi Khusus Supplier</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Kemudahan Sistem Order dari Dropshipper</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Transaksi Resi Manual</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Transaksi Resi Otomatis</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Transaki COD</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="800">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Transaksi Instan Kurir (GOJEK & GRAB)</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="900">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Tidak Ada Potongan atau Free Transaksi</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Section -->

        <div class="big-right-yellow position-relative">
            <section class="ornament">
                <img src="{{ asset('img/big-right-yellow.png') }}" alt="ornament" class="ornament-right" />
            </section>
        </div>
        <div class="big-right-green position-relative">
            <div class="ornament">
                <img src="{{ asset('img/big-right-green.png') }}" class="ornament-right" />
            </div>
        </div>

        <section id="features" class="features keuntungan-supp syarat align-items-center mb-3">
            <div class="container d-flex" data-aos="fade-up">
                <!-- Feature Tabs -->

                <div class="row feture-tabs align-items-center supp-coba" data-aos="fade-up">
                    <div class="col-lg-6 align-self-center">
                        <img src="{{ asset('img/syarat-jadi-reseller-di-herva-id.png') }}" class="img-fluid mobile-show"
                            alt="" />
                    </div>

                    <div class="col-lg-6">
                        <h3>SYARAT DAN KETENTUAN <br />MENJADI SUPPLIER HERVA.ID</h3>

                        <div class="row feture-tabs" data-aos="fade-up">
                            <div class="col-lg-6 align-self-center">
                                <img src="{{ asset('img/syarat-jadi-reseller-di-herva-id.png') }}"
                                    class="img-fluid mobile-hide" alt="" />
                            </div>

                            <ul class="nav nav-pills mb-3">
                                <li>
                                    <a class="nav-link active" data-bs-toggle="pill" href="#syarat"></a>
                                </li>
                            </ul>
                            <div class="tab-content align-self-center">
                                <div class="tab-pane fade show active" id="syarat">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>Wajib produsen barang/ memproduksi barang</h4>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>
                                            Produsen /Tangan pertama Bukan Agen, Distributor,
                                            Dropshipper/Reseller
                                        </h4>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>
                                            Menyiapkan Foto Produk dan Deskripsi seakurat mungkin
                                        </h4>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>
                                            Memberikan harga terbaik untuk Reseller/Dropshipper
                                            (Minimal potongan 25%)
                                        </h4>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>Komitmen untuk menyediakan stok produk</h4>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>Menerima Retur jika ada kesalahan dari supplier</h4>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>Berkomitmen untuk memberikan pelayanan terbaik</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <div class="big-left-yellow-second position-relative">
            <section class="ornament">
                <img src="{{ asset('img/left-yellow.png') }}" alt="ornament" class="ornament-left" />
            </section>
        </div>




        <!-- ======= pelatihan Section ======= -->
        <section id="bisnis" class="katalog">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <!-- <h2>herva id</h2> -->
                    <p>PELATIHAN BISNIS ONLINE</p>
                </header>

                <div class="row">
                    <header class="section-header">
                        <p>
                            PELATIHAN BISNIS ONLINE HERVA.ID SEBELUMNYA
                            <span style="color: red"><s>Rp. 399.000</s></span><span style="color: red"> PROMO
                                KHUSUS</span>
                            BULAN INI HANYA
                        </p>
                        <p><span style="color: red">Rp. 99.000</span></p>
                        <p>
                            TUJUAN KAMI MENSUKSESKAN PARA PEMBISNIS JAWA TIMUR AGAR LEBIH
                            MAJU DALAM BERBISNIS
                        </p>
                    </header>

                    <div class="katalog text-center">
                        <a href="https://drive.google.com/file/d/1jWx1H32AdIx7rFVw5qXHeKkd-bWOgLRr/view?usp=sharing"
                            target="_blank"
                            class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Daftar Sekarang</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End Feature Icons -->
            </div>
        </section>
        <!-- End Features Section -->


        <section id="mk" class="mk">
            <div class="container " data-aos="fade-up">
                <div class="row justify-content-center">
                    <img src="{{ asset('img/supp-foot.png') }}" alt="" class="img-fluid w-50 my-4 p-4">
                </div>
            </div>
        </section>


    </main>
    <!-- End #main -->
@endsection
