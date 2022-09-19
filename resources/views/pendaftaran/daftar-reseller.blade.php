@extends('layouts.mainLayout')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center position-relative">
        <section class="ornament">
            <img src="{{ asset('img/right.png') }}" class="ornament-right img-fluid" />
        </section>
        <div class="container px-5">
            <header class="section-header">
                <h2>daftar</h2>
                <p>Form Pendaftaran Reseller</p>
            </header>
            <div class="row">
                <form>
                    <div class="form-group row mt-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" placeholder="nama anda" />
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="nama" class="col-sm-2 col-form-label">No. HP</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="no-hp" placeholder="082xxxxxxx" />
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="nama" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="example@gmail.com" />
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" placeholder="" />
                        </div>
                    </div>
                    <div class="form-group row mx-auto col-sm-2">
                        <a href="/"
                            class="btn-get-started d-inline-flex align-items-center justify-content-center align-self-center">
                            <span class="text-white">Daftar</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <section class="ornament">
            <img src="{{ asset('img/left-yellow.png') }}" alt="ornament" class="ornament-left" />
        </section>
    </section>
    <!-- End Hero -->
@endsection
