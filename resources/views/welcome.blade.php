@extends('layouts.mainLayout')

@section('content')
    @if ($message = Session::get('success'))
        <div class="justify-content-center d-flex">
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        </div>
    @endif
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center position-relative">
        <section class="ornament">
            <img src="{{ asset('img/right.png') }}" class="ornament-right img-fluid" />
        </section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/peta-jadi-zoom.png') }}" class="img-fluid position-right-45" alt="" />
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center text-center align-items-center">
                    <h1 data-aos="fade-up">Jawa Timur Berkembang Bersama</h1>
                    <img class="logo-img img-fluid" data-aos="fade-up" data-aos-delay="400"
                        src="{{ asset('img/logo-herva.png') }}" alt="logo herva id" />
                    <h2 data-aos="fade-up" data-aos-delay="600">
                        <span>Herva ID</span> ingin mengembangkan pembisnis yang ingin
                        masuk kedunia online di daerah Jawa Timur. Berkembanglah bersama
                        kami untuk mendapatkan <span>income</span> dari bisnis online.
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="800"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <div class="position-relative little-yellow-right">
        <section class="ornament">
            <img src="{{ asset('img/little-right-yellow.png') }}" class="ornament-right" />
        </section>
    </div>

    <!-- youtube -->
    <section id="youtube" class="youtube position-relative big-left-yellow">
        <section class="ornament">
            <img src="{{ asset('img/left-yellow.png') }}" alt="ornament" class="ornament-left" />
        </section>
        <div class="container" data-aos="fade-up">
            <header class="section-youtube pb-0">
                <p class="">
                    Tunggu dulu, apakah ini yang Anda rasakan? <br />
                    Coba tonton video dibawah ini
                </p>
            </header>
            <div class="ratio ratio-16x9 mb-0">
                <iframe src="https://www.youtube.com/embed/4blNuJy3T60" title="Apa sih Herva.id itu ?" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <header class="section-youtube pb-0 yt2">
                <p>
                    GAK PERCAYA ? <br />
                    Tonton deh video dibawah
                </p>
            </header>
            <div class="ratio ratio-16x9 mb-0">
                <iframe src="https://www.youtube.com/embed/rT6MJHAmahw" title="Testimoni Member Herva.id" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="big-right-green">
            <section class="ornament">
                <img src="{{ asset('img/big-right-green.png') }}" class="ornament-right" />
            </section>
        </div>
    </section>
    <!-- end youtube -->

    <div class="big-left-green position-relative">
        <section class="ornament">
            <img src="{{ asset('img/left-green.png') }}" alt="ornament" class="ornament-left" />
        </section>
    </div>

    <!-- ======= gabung Section ======= -->
    <section id="gabung" class="gabung d-flex align-items-center">
        <div class="container">
            <div class="row">
                <h1 data-aos="fade-up" class="text-center mb-5">
                    Gabung Bersama Kami
                </h1>
                <div class="col-lg-6 d-flex flex-column justify-content-center text-center">
                    <img data-aos="fade-up" src="{{ asset('img/BannerSupplier.png') }}" alt="daftar jadi supplier"
                        class="rounded-3 img-fluid" />
                    <div data-aos="fade-up" data-aos-delay="600" class="mb-5">
                        <div class="text-center">
                            <a href="/supplier"
                                class="btn-get-started d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Jadi Supplier</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center text-center">
                    <img data-aos="fade-up" data-aos-delay="400" src="{{ asset('img/reseller.png') }}"
                        alt="daftar jadi supplier" class="rounded-3 img-fluid" />
                    <div data-aos="fade-up" data-aos-delay="600" class="mb-5">
                        <div class="text-center">
                            <a href="/reseller"
                                class="btn-get-started d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Jadi Reseller</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End cover -->

    <div class="big-right-yellow position-relative">
        <section class="ornament">
            <img src="{{ asset('img/big-right-yellow.png') }}" alt="ornament" class="ornament-right" />
        </section>
    </div>

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" ddata-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 my-auto mx-auto" data-aos="zoom-out" data-aos-delay="200">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('img/mau-kan.png') }}" class="img-fluid" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex flex-column px-5 mt-3" data-aos="zoom-out" data-aos-delay="400">
                        <h3><mark> Mau kan ?</mark></h3>

                        <h2>
                            Memiliki Penghasilan Tambahan tanpa mengganggu pekerjaan
                            dikantor dan dibimbing jualan online sampai bisa
                        </h2>
                        <ul class="">
                            <li>Bingung harus mulai dari mana?</li>
                            <li>Mau mulai tapi nggak ada modal?</li>
                            <li>Nggak punya toko online sendiri?</li>
                            <li>Males upload ribuan produk ke olshop Anda?</li>
                            <li>Diskon dr supplier cuma 5-10ribu perak saja?</li>
                            <li>Mau untung malah buntung nutupin biaya operasional</li>
                        </ul>
                        <p>
                            Marketplace banyak di Indonesia, namun kalau gak punya barang
                            untuk dijual, pusing juga kan ?
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= terobosan Section ======= -->
        <section id="terobosan" class="terobosan d-flex align-items-center h-100">
            <div class="container">
                <div class="row">
                    <h1 class="text-center mt-0" data-aos="fade-up">
                        TEROBOSAN TERBARU!
                    </h1>
                    <div class="col-lg-6 terobosan-img my-auto" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('img/solution.png') }}" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-6 d-flex flex-column">
                        <h3 data-aos="fade-up">
                            Laris Jualan Online Tanpa stok barang & diajarin sampai sukses
                            hanya di <span>Herva ID</span>
                        </h3>
                        <h2 data-aos="fade-up" data-aos-delay="400">
                            Cuma disini Belajar Jualan Online yang berpotensi meledakkan
                            tambahan income Anda hingga <span>PULUHAN JUTA RUPIAH</span> per
                            bulan!
                        </h2>
                        <h2 data-aos="fade-up" data-aos-delay="600">
                            Dengan menjadi Member kami, Anda akan mendapatkan
                            <span>AKSES HARGA TERMURAH</span> tanpa minimum order dari
                            berbagai Pabrik yang mensupply produk Fashion, Kesehatan hingga
                            Kecantikan yang semuanya HITS di Instagram dan Marketplace
                            Indonesia
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- End terobosan -->

        <div class="big-left-yellow-second position-relative">
            <section class="ornament">
                <img src="{{ asset('img/left-yellow.png') }}" alt="ornament" class="ornament-left" />
            </section>
        </div>

        <!-- keuntungan -->
        <section id="keuntungan" class="keuntungan p-0">
            <div class="container" data-aos="fade-up">
                <div class="row feature-icons" data-aos="fade-up">
                    <h3 class="mb-5">
                        Mari kita lihat<br /><span>Keuntungan apa saja yang anda dapatkan?</span>
                    </h3>

                    <div class="row">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="content">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-md-4 icon-box" data-aos="fade-up">
                                        <i class="ri-line-chart-line"></i>
                                        <div>
                                            <h4>Mentoring Gratis Digital Marketing</h4>
                                            <p>
                                                Herva ID akan membantu anda memahami berbagai praktik
                                                digital marketing secara
                                                <span> lengkap dan mudah.</span> Bahkan untuk Anda
                                                yang masih <span> pemula!</span>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="100">
                                        <i class="ri-stack-line"></i>
                                        <div>
                                            <h4>Custom Brand Logo</h4>
                                            <p>
                                                Desain Logo <span>senilai 250 ribu rupiah</span> siap
                                                Anda jadikan sebagai Branding Anda ke konsumen. Di
                                                banner Logo ini, semua promosi yang Anda buat untuk
                                                produk Anda bisa turut dimasukkan.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="200">
                                        <i class="ri-brush-4-line"></i>
                                        <div>
                                            <h4>Full Support 100%</h4>
                                            <p>
                                                Gak perlu bingung untuk desain promosi, karena kami
                                                sudah siapkan 2.000+
                                                <span> FOTO dan VIDEO PROMOSI.</span> Mulai dari
                                                Instagram Feed, Stories. Tinggal COPAS! Bayangkan jika
                                                Anda harus menggaji Staff Desain
                                                <span>
                                                    3 juta rupiah/bulan alias 40 juta per tahun!</span>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="300">
                                        <i class="ri-magic-line"></i>
                                        <div>
                                            <h4>Dropship</h4>
                                            <p>
                                                Anda tidak perlu stok barang.
                                                <span>> Tidak perlu sibuk packing setiap kali ada
                                                    orderan.</span>
                                                Customer pesan di website Anda, setelah itu semua kami
                                                yang urus. Anda sudah
                                                <span> hemat waktu, tenaga & biaya,</span> yang jika
                                                ditotal bila ada 100 order per bulan nilainya mencapai
                                                <span>
                                                    400 ribu rupiah /bulan alias 5 juta per tahun!</span>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="500">
                                        <i class="ri-radar-line"></i>
                                        <div>
                                            <h4>Strategi Jualan</h4>
                                            <p>
                                                Mulai dari Akses ke Modul Pembelajaran Strategi Jualan
                                                di Instagram, Marketplace hingga Facebook yang ditotal
                                                <span> senilai 15 juta rupiah</span> bisa Anda
                                                pelajari sambil dibimbing langsung di Group Mentoring
                                                kami.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- keuntungan Icons -->

        <div class="position-relative little-green-right">
            <section class="ornament">
                <img src=" {{ asset('img/little-right-green.png') }}" class="ornament-right" />
            </section>
        </div>

        <!-- fasilitas -->
        <section id="fasilitas" class="fasilitas p-0">
            <div class="container" data-aos="fade-up">
                <div class="row feature-icons pb-5" data-aos="fade-up">
                    <h3 class="mb-5">
                        Ditambah Fasilitas yang kami sediakan, yang akan menggantikan
                        waktu Anda yang<span> tidak ternilai harganya</span>
                    </h3>

                    <div class="row">
                        <div class="d-flex justify-content-center">
                            <div class="content">
                                <div class="row align-self-center gy-4">
                                    <div class="col-md-4 icon-box" data-aos="fade-up">
                                        <i class="ri-line-chart-line"></i>
                                        <div>
                                            <h4>Semua Barang 100% Langsung Dari Produsen</h4>
                                            <p>
                                                Semua barang yang ada di Herva ID
                                                <span> 100% langsung dari produsen</span>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="100">
                                        <i class="ri-stack-line"></i>
                                        <div>
                                            <h4>Materi Iklan</h4>
                                            <p>
                                                Berupa <span>video dan gambar</span> produk yang bisa
                                                Anda gunakan langsung di media sosial.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="200">
                                        <i class="ri-brush-4-line"></i>
                                        <div>
                                            <h4>Komunitas Group</h4>
                                            <p>
                                                Bergabung dengan Reseller lainnya untuk saling berbagi
                                                bermacam macam tips & trick
                                                <span> strategi bisnis yang baik.</span>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="400">
                                        <i class="ri-command-line"></i>
                                        <div>
                                            <h4>Biaya Operasional</h4>
                                            <p>
                                                Tidak perlu khawatir memikirkan
                                                <span>packing dan pengiriman</span> barang.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="500">
                                        <i class="ri-radar-line"></i>
                                        <div>
                                            <h4>Testimonial</h4>
                                            <p>
                                                <span>lebih dari 800 testimonial asli </span> dari
                                                para customer sudah terisi di website Anda.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="600">
                                        <i class="ri-line-chart-line"></i>
                                        <div>
                                            <h4>Customer Service</h4>
                                            <p>
                                                Layanan
                                                <span>Professional live chat Customer Service</span>
                                                yang akan menjawab semua pertanyaan pembeli Anda,
                                                followup pembayaran hingga after sales.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fasilitas Icons -->

        <div class="big-left-yellow-second position-relative">
            <section class="ornament">
                <img src=" {{ asset('img/left-yellow.png') }}" alt="ornament" class="ornament-left" />
            </section>
        </div>

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>produk</h2>
                    <p>Contoh Produk</p>
                    <h2 class="mt-3">
                        Berikut ini contoh produk siap jual yang ada di herva id
                    </h2>
                </header>

                <div class="testimonials">
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/produk-1/produk-1.jpg') }}"
                                        alt="Contoh produk yang ada di herva.id" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/produk-1/produk-2.jpg') }}"
                                        alt="Contoh produk yang ada di herva.id" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/produk-1/produk-3.jpg') }}"
                                        alt="Contoh produk yang ada di herva.id" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/produk-1/produk-4.jpg') }}"
                                        alt="Contoh produk yang ada di herva.id" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/produk-1/produk-5.jpg') }}"
                                        alt="Contoh produk yang ada di herva.id" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/produk-1/produk-6.jpg') }}"
                                        alt="Contoh produk yang ada di herva.id" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/produk-1/produk-7.jpg') }}"
                                        alt="Contoh produk yang ada di herva.id" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/produk-1/produk-8.jpg') }}"
                                        alt="Contoh produk yang ada di herva.id" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/produk-1/produk-9.jpg') }}"
                                        alt="Contoh produk yang ada di herva.id" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- download katalog -->
        <section id="katalog" class="katalog">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <p>Download Katalog</p>
                    <h2 class="mt-3">Download katalog produk dibawah ini ya</h2>
                </header>
                <div class="text-center">
                    <a href="https://drive.google.com/drive/folders/1OdQ9WGasvbnQRZYzXXJ7eEDbCliOjRq0?usp=sharing"
                        target="_blank"
                        class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Download Katalog</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>

        <div class="big-right-green-second position-relative">
            <section class="ornament">
                <img src=" {{ asset('img/big-right-green.png') }}" alt="ornament" class="ornament-right" />
            </section>
        </div>

        <!-- ======= Services Section ======= -->
        <section id="services" class="services position-relative">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <!-- <h2>Services</h2>
                                                                <p>Veritatis et dolores facere numquam et praesentium</p> -->
                </header>

                <div class="row gy-4">
                    <div class="" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box">
                            <h3>
                                Dan semua produk di <b><span>HERVA ID</span></b> <br />
                                sudah dilengkapi dengan
                            </h3>
                            <hr />
                            <div class="row justify-content-center align-items-center">
                                <div class="d-flex col-md-4 col-lg-8 align-items-center">
                                    <i class="bi bi-images icon"></i>
                                    <div class="text-start px-3">
                                        <b>MATERI PRODUK</b> <br />
                                        <p>
                                            berupa Foto & Video, Instagram Feed/Stories, tinggal
                                            upload!
                                        </p>
                                    </div>
                                </div>
                                <hr class="m-3" />
                                <div class="d-flex col-md-4 col-lg-8 align-items-center">
                                    <i class="bi bi-file-earmark-text icon"></i>
                                    <div class="text-start px-3">
                                        <b>MATERI MARKETPLACE </b> <br />
                                        <p>
                                            berupa CSV produk untuk mass upload ke Marketplace,
                                            tinggal upload!
                                        </p>
                                    </div>
                                </div>
                                <hr class="m-3" />
                            </div>
                            <!-- <i class="ri-discuss-line icon"></i> -->
                            <img class="p-3 mb-3 img-fluid" src=" {{ asset('img/hero-img.png') }}" alt="" />
                            <h3>Marketing Kit Super Lengkap</h3>
                            <h3>
                                Semua kami <span><b>Support Habis<sup>2</sup>an</b></span>
                            </h3>
                            <!-- <a href="#" class="read-more"
                                                                      ><span>Read More</span> <i class="bi bi-arrow-right"></i
                                                                    ></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->
        <div class="big-left-green-second position-relative">
            <section class="ornament">
                <img src=" {{ asset('img/left-green.png') }}" alt="ornament" class="ornament-left" />
            </section>
        </div>

        <!-- =======  jaminan foto dan feed ig Section ======= -->
        <section id="mk" class="mk">
            <div class="container" data-aos="fade-up">
                <header class="section-header mt-3">
                    <h2>Marketing Kit</h2>
                    <p>Jaminan Foto Produk Sesuai Aslinya</p>
                </header>

                <div class="row gy-4">
                    <div class="" data-aos="fade-up" data-aos-delay="200">
                        <div class="mk-box">
                            <p>
                                <span>Jaminan ini</span> kami perlihatkan melalui
                                <span>VIDEO</span> dari setiap new arrival yang nantinya
                                <br class="d-sm-block" />
                                bisa Anda gunakan untuk diupload ke Facebook atau Instagram
                                Anda.
                            </p>
                            <p>
                                Dengan video produk, <span>kepercayaan Customer</span> Anda
                                akan meningkat. Yuk lihat contohnya dibawah ini.
                            </p>

                            <div class="ratio ratio-16x9 mb-0">
                                <iframe src="https://www.youtube.com/embed/RHetsQyeKGw" title="Rheevahijab Marketing Kit"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <!-- <a href="#" class="read-more"
                                                                      ><span>Read More</span> <i class="bi bi-arrow-right"></i
                                                                    ></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="position-relative little-yellow-right">
            <section class="ornament">
                <img src=" {{ asset('img/little-right-yellow.png') }}" class="ornament-right" />
            </section>
        </div>

        <!-- =======  feed ig Section ======= -->
        <section id="mk" class="mk mt-5">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Marketing Kit</h2>
                    <p>Kami buatkan juga instagram feed</p>
                </header>
                <div class="testimonials">
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/feed-instagram/1.jpeg') }}"
                                        alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/feed-instagram/2.jpeg') }}"
                                        alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/feed-instagram/3.jpeg') }}"
                                        alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/feed-instagram/4.jpeg') }}"
                                        alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/feed-instagram/5.jpeg') }}"
                                        alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/feed-instagram/6.jpeg') }}"
                                        alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/feed-instagram/7.jpeg') }}"
                                        alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/feed-instagram/8.jpeg') }}"
                                        alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/feed-instagram/9.jpeg') }}"
                                        alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/feed-instagram/10.jpeg') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End jaminan foto dan feed ig Section -->

        <div class="big-left-yellow-second position-relative">
            <section class="ornament">
                <img src=" {{ asset('img/left-yellow.png') }}" alt="ornament" class="ornament-left" />
            </section>
        </div>

        <!-- =======  testi pengiriman Section ======= -->
        <section id="mk" class="mk">
            <div class="container" data-aos="fade-up">
                <header class="section-header mt-5">
                    <h2>Marketing Kit</h2>
                    <p>Terpercaya ?</p>
                </header>
                <div class="text-center">
                    <h2 class="mt-3">
                        <b>Herva ID</b> mengembangkan pembisnis yang ingin masuk kedunia
                        online di daerah Jawa Timur.
                    </h2>
                    <h2 class="mt-3">
                        Berikut ini Foto-foto ketika pesanan sudah kami packing rapi
                        hingga drop ke ekspedisi
                        <b>sesuai dengan nama online shop Anda.</b>
                    </h2>
                </div>
                <div class="testimonials">
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/pengiriman/1.jpeg') }}" alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/pengiriman/2.jpeg') }}" alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/pengiriman/3.jpeg') }}" alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/pengiriman/4.jpeg') }}" alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/pengiriman/5.jpeg') }}" alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img class="img-fluid" src=" {{ asset('img/pengiriman/6.jpeg') }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= End testi pengiriman Section ======= -->

        <div class="position-relative little-green-right" style="top: -120px">
            <section class="ornament">
                <img src=" {{ asset('img/little-right-green.png') }}" class="ornament-right" />
            </section>
        </div>

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">
                <header class="section-header mt-5">
                    <h2>Testimonials</h2>
                    <p>Ini kata mereka yang sudah bergabung</p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item p-3">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Terimakasih atas pelayannya kami cukup pas dalam pembuatan
                                    iklan kami, mulai dari konsultasi awal, desain produk sampai
                                    iklan online, semoga ke depan dapat bekerja sama lebih
                                    lanjut, terima kasih
                                </p>
                                <div class="profile mt-auto">
                                    <h3>Fuadi Achmad</h3>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item p-3">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Sejauh ini pelayanan sudah ok. Mulai dikontak paska order,
                                    trus lanjut dibimbing prosesnya sampai berhasil tayang.
                                    Dapat panduan dari targeting iklan sampai poster yang akan
                                    diiklankan. Andai ada kesulitan kalo bikin poster yang masuk
                                    kriteria FB Ads juga ada tawaran bantuan dibikinkan. Hasil
                                    iklannya juga enggak mengecewakan. Apalagi dengan harga yang
                                    hemat. Oke terimkasih untuk bantuan dan kerjasamanya.
                                </p>
                                <div class="profile mt-auto">
                                    <h3>Fredy Kurniawan</h3>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item p-3">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Awalnya khawatir dengan pelayanan di Herva ID, tapi ternyata
                                    hasil kerja mereka memuaskan dan pelayanannya itu.. wuih..
                                    paten lah pokoknya.. terima kasih Herva ID. Gak salah pilih
                                    kalian... Sukses terus... Salam Hebat...
                                </p>
                                <div class="profile mt-auto">
                                    <h3>Andika Ramadhan</h3>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item p-3">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Terimakasih Herva ID, very recommended. Usaha saya semakin
                                    banyak dikenal dan semoga kita bisa bekerjasama lagi
                                    dikemudia hari.
                                </p>
                                <div class="profile mt-auto">
                                    <h3>Ilham Hidayatullah</h3>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item p-3">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Pasang iklan disini bener bener terarah dengan baik dan
                                    hasilnya maknyussss.... iklan gak pakai ribet dan hasil oke
                                    ya cuma disini... thks ya
                                </p>
                                <div class="profile mt-auto">
                                    <h3>Byas Haqiqi</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

        <div class="big-left-yellow-second position-relative" style="top: -40px">
            <section class="ornament">
                <img src=" {{ asset('img/left-yellow.png') }}" alt="ornament" class="ornament-left" />
            </section>
        </div>

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials p-0">
            <div class="container" data-aos="fade-up">
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('img/testi-wa/1.png') }}" class="testimonial-wa" alt="" />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('img/testi-wa/2.png') }}" class="testimonial-wa" alt="" />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('img/testi-wa/3.png') }}" class="testimonial-wa" alt="" />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('img/testi-wa/4.png') }}" class="testimonial-wa" alt="" />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('img/testi-wa/5.png') }}" class="testimonial-wa" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Ringkasan Section ======= -->
        <section id="ringkasan" class="ringkasan">
            <div class="container" data-aos="fade-up">
                <header class="section-header mt-5">
                    <h2>Ringkasan</h2>
                    <p>Yuk mari kita rekap, keuntungan apa saja yang anda dapatkan ?</p>
                </header>

                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="ringkasan-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Strategi Jualan</h3>
                            <p>
                                Mulai dari Akses ke Modul Pembelajaran Strategi Jualan di
                                Instagram, Marketplace hingga Facebook yang bisa Anda pelajari
                                sambil dibimbing langsung di Group Mentoring kami.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="ringkasan-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Materi Promosi</h3>
                            <p>
                                Gak perlu bingung untuk desain promosi, karena kami sudah
                                siapkan <span> 2.000+ FOTO dan VIDEO PROMOSI.</span> Mulai
                                dari Instagram Feed, Stories. Tinggal COPAS! Bayangkan jika
                                Anda harus menggaji Staff Desain
                                <span> 3 juta rupiah/bulan alias 40 juta per tahun!</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="ringkasan-box red">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Dropship</h3>
                            <p>
                                Anda tidak perlu stok barang.
                                <span>
                                    Tidak perlu sibuk packing setiap kali ada orderan.</span>
                                Customer pesan di website Anda, setelah itu semua kami yang
                                urus. Anda sudah
                                <span> hemat waktu, tenaga & biaya,</span> yang jika ditotal
                                bila ada 100 order per bulan nilainya mencapai
                                <span> 400 ribu rupiah /bulan alias 5 juta per tahun!</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="ringkasan-box purple">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Custom Logo</h3>
                            <p>
                                Desain Logo <span> senilai 250 ribu rupiah</span> siap Anda
                                jadikan sebagai Branding Anda ke konsumen. Di banner Logo ini,
                                semua promosi yang Anda buat untuk produk Anda bisa turut
                                dimasukkan.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="ringkasan-box pink">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Komisi Hingga 50%</h3>
                            <p>
                                Profit yang Anda dapatkan dari setiap penjualan
                                <span> mencapai 50%</span>
                                dari harga jual. Plus Akses harga termurah dari Supplier dan
                                Pabrik yang bekerja sama dengan kami. Dengan begitu banyaknya
                                produk yang siap Anda pasarkan, potensi terjadinya transaksi
                                setiap hari, sangatlah mudah.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="ringkasan-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Full Support 100%</h3>
                            <p>
                                Dari <span> semua keuntungan diatas,</span> Anda juga akan
                                bergabung didalam Group kami yang selama ini saling support
                                satu sama lain. Karena Berbagi Itu Indah, Tidak Pernah Rugi
                                dan Membawa Sukacita Hidup, setuju?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End ringkasan Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <header class="section-header mt-5">
                    <h2>F.A.Q</h2>
                    <p>Seputar Pertanyaan & Jawaban</p>
                </header>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- F.A.Q List 1-->
                        <div class="accordion accordion-flush" id="faqlist1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        Bagaimana Cara Daftar di Herva?
                                    </button>
                                </h2>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Anda bisa langsung isi nama dan alamat email Anda di form
                                        bagian atas, lalu klik tombol berwarna merah yang
                                        bertuliskan ‘Saya Mau Daftar’. Nantinya Anda harus mengisi
                                        data diri Anda secara lengkap. Setelah mendaftar Anda
                                        perlu melakukan konfirmasi pembayaran maksimal 1 x 24 jam
                                        sebelum pendaftaran hangus.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        Berapa Harga Produknya ?
                                    </button>
                                </h2>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Di bawah 100k tergantung jenis produk dan bisa mendapat
                                        untung 100% tiap produknya
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        Setelah join, bagaimana proses mengambil gambar produk
                                        untuk dijual?
                                    </button>
                                </h2>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Anda akan mendapatkan katalog Herva yang lengkap, semua
                                        katalog bisa Anda download untuk di share ke Online Shop
                                        Anda dan Anda tinggal jualan.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        Bagaimana Cara Berjualan di Herva?
                                    </button>
                                </h2>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Anda akan diberikan panduan lengkap dari mulai fitur -
                                        fitur apa saja yang ada di Herva, kemudian cara order,
                                        sampai dengan pengiriman.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        Apa saja produk yang bisa di jual di Herva?
                                    </button>
                                </h2>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Banyak produk yang bisa dijual, semua langsung dari
                                        produsen
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-6">
                                        Apakah bisa COD?
                                    </button>
                                </h2>
                                <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Bisa. Anda tidak harus bayar dulu, kami yang akan
                                        talangin.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- F.A.Q List 2-->
                        <div class="accordion accordion-flush" id="faqlist2">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-1">
                                        Bagaimana Cara Berjualan di HERVA ?
                                    </button>
                                </h2>
                                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Anda akan diberikan panduan lengkap dari mulai fitur -
                                        fitur apa saja yang ada di dropshipaja, kemudian cara
                                        order, cara mendesain sampai dengan pengiriman.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-2">
                                        Apakah setelah join akan dibimbing?
                                    </button>
                                </h2>
                                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Iya, Anda akan di bimbing di facebook group, diberikan
                                        materi di seputar Herva ID, Ada komunitas offline dan
                                        komunitas online.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-3">
                                        Apakah di Herva Perlu Stock Barang Untuk di Jual?
                                    </button>
                                </h2>
                                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Karena sistem kami adalah dropship, Maka Anda tidak perlu
                                        stock barang untuk dijual, tinggal order dan tunggu
                                        pengiriman saja.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-4">
                                        Apakah setelah saya join, saya akan dijamin berhasil?
                                    </button>
                                </h2>
                                <div id="faq2-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Tidak. Semua tergantung dengan usaha dan konsistensi Anda
                                        dalam menjalankan bisnis ini.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-5">
                                        Apakah bisa mendapatkan resi otomatis ke marketplace?
                                    </button>
                                </h2>
                                <div id="faq2-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Bisa. Kami support resi otomatis yang connect dengan
                                        marketplace.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End F.A.Q Section -->
    </main>
    <!-- End #main -->
@endsection
