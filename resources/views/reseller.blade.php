@extends('layouts.mainLayout')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center position-relative">
        <section class="ornament">
            <img src="{{ asset('img/right.png') }}" class="ornament-right img-fluid" />
        </section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center text-lg-start">
                    <h1 data-aos="fade-up">
                        Laris Jualan Online Tanpa stok barang & diajarin sampai sukses
                        hanya di Herva ID
                    </h1>
                    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('img/reseller-cover-1.png') }}" class="img-fluid mobile-hide" alt="" />
                    </div>
                    <h2 data-aos="fade-up" data-aos-delay="400">
                        Sekarang saat yang tepat bagi Anda untuk mendapatkan Penghasilan
                        dari BISNIS ONLINE
                    </h2>

                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="mb-3">
                            <a href="/daftar-reseller"
                                class="btn-get-started d-inline-flex align-items-center justify-content-center align-self-center">
                                <span class="text-white">Daftar Sekarang</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/reseller-cover-1.png') }}" class="img-fluid mobile-show" alt="" />
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
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="" data-aos="fade-up" data-aos-delay="200">
                        <div class="mengapa-kami">
                            <header class="section-header mt-3 pb-0">
                                <img src="{{ asset('img/logo-herva.png') }}" alt="logo-herva-id" class="img-fluid" />
                                <h2 class="my-4">
                                    APA YANG HARUS KAMU SIAPKAN SAAT AKAN MEMBUKA JUALAN ONLINE ?
                                </h2>
                            </header>

                            <div class="features">
                                <div class="row feture-tabs align-self-center justify-content-center" data-aos="fade-up">
                                    <div class="tab-content col-md-6">
                                        <div class="tab-pane fade show active margin-kiri" id="syarat">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="bi bi-check2"></i>
                                                <h4>Harus punya karyawan</h4>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="bi bi-check2"></i>
                                                <h4>
                                                    Harus punya skill marketing
                                                </h4>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="bi bi-check2"></i>
                                                <h4>
                                                    Harus punya gudang untuk bekerja
                                                </h4>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="bi bi-check2"></i>
                                                <h4>
                                                    Harus punya barang yang akan dijual
                                                </h4>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="bi bi-check2"></i>
                                                <h4>Harus punya modal jutaan rupiah</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center mt-1" data-aos="fade-up">LALU BAGAIMANA SOLUSI JIKA KALIAN TIDAK PUNYA
                                HAL-HAL
                                DIATAS ?</p>
                            <p class="text-center" data-aos="fade-up">MARI BERGABUNG DENGAN HERVA.ID AKAN ADA BANYAK
                                KEUNTUNGAN YANG
                                KALIAN DAPATKAN</P>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of mengapa kami -->
        <div class="position-relative big-left-green">
            <div class="ornament">
                <img src="{{ asset('img/left-green.png') }}" alt="ornament" class="ornament-left" />
            </div>
        </div>


        <!-- ======= Features Section ======= -->
        <section id="features" class="features keuntungan-supp position-relative">
            <div class="container" data-aos="fade-up">
                <header class="keuntungan-header">
                    <p>APA SAJA YANG DIDAPATKAN JIKA <br> BERGABUNG RESELLER HERVA.ID ?</p>
                </header>

                <div class="row mt-3">
                    <div class="col-lg-12 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4 mb-5">
                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>
                                        Tidak perlu <span>stok barang</span>
                                    </h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Langsung jadi <span>reseller dari ratusan brand lokal</span> Jawa Timur</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Herva.id <span>Bukan MLM</span></h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Akan dapat pelatihan Gratis dari mentor-mentor terbaik</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Tidak perlu repot foto produk, karena kami sudah menyediakan foto produk dan video
                                        promosi</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Kamu bakalan didukung sama cs yang baik dan dapat diandalkan</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="800">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Tidak perlu repot-repot packing barang, karena akan di packing oleh tim dropship
                                        Herva.id</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- End Features Section -->

        <div class="big-right-yellow position-relative">
            <div class="ornament">
                <img src="{{ asset('img/big-right-yellow.png') }}" alt="ornament" class="ornament-right" />
            </div>
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
        <div class="position-relative big-left-green">
            <div class="ornament">
                <img src="{{ asset('img/left-green.png') }}" alt="ornament" class="ornament-left" />
            </div>
        </div>

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <p>CONTOH PRODUK</p>
                </header>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-4 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/produk-reseller/1.jpg') }}" class="img-fluid " alt="" />
                            <div class="portfolio-info">
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/produk-reseller/1.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title=""><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/produk-reseller/2.jpg') }}" class="img-fluid " alt="" />
                            <div class="portfolio-info">
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/produk-reseller/2.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title=""><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/produk-reseller/3.jpg') }}" class="img-fluid " alt="" />
                            <div class="portfolio-info">
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/produk-reseller/3.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title=""><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/produk-reseller/1.jpg') }}" class="img-fluid " alt="" />
                            <div class="portfolio-info">
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/produk-reseller/1.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title=""><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/produk-reseller/5.jpg') }}" class="img-fluid " alt="" />
                            <div class="portfolio-info">
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/produk-reseller/5.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title=""><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/produk-reseller/6.jpg') }}" class="img-fluid " alt="" />
                            <div class="portfolio-info">
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/produk-reseller/6.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title=""><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <div class="big-right-yellow position-relative">
            <div class="ornament">
                <img src="{{ asset('img/big-right-yellow.png') }}" alt="ornament" class="ornament-right" />
            </div>
        </div>

    </main>
    <!-- End #main -->
@endsection
