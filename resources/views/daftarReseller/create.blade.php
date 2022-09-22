@extends('layouts.mainLayout')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center position-relative">
        <section class="ornament">
            <img src="{{ asset('img/right.png') }}" class="ornament-right img-fluid" />
        </section>
        <div class="container px-5">
            @if ($message = Session::get('success'))
                <div class="justify-content-center d-flex">
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                </div>
            @endif

            @if ($errors->any())
                <div class="justify-content-center d-flex">
                    <div class="alert alert-danger">
                        <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <header class="section-header">
                <h2>daftar</h2>
                <p>Form Pendaftaran Reseller</p>
            </header>

            <div class="row">
                <form action="daftar-reseller/store" method="POST">
                    @csrf
                    <div class="form-group row mt-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input name="nama"pe="text" class="form-control" id="nama"
                                placeholder="nama anda" />
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="no-hp" class="col-sm-2 col-form-label">No. HP</label>
                        <div class="col-sm-10">
                            <input name="hp" type="number" class="form-control" id="no-hp"
                                placeholder="0821234567" />
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control" id="email"
                                placeholder="example@gmail.com" />
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input name="alamat" type="text" class="form-control" id="alamat" placeholder="" />
                        </div>
                    </div>
                    <div class="form-group row mt-3 d-none">
                        <label for="status" class="col-sm-2 col-form-label">status</label>
                        <div class="col-sm-10">
                            <select id="status" class="form-control" name="status">
                                {{-- <input name="status" type="text" class="form-control" id="alamat" placeholder="" /> --}}
                                <option selected value="Reseller"></option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mx-auto col-sm-2">
                        <a>
                            <button type="submit"
                                class="btn-get-started d-inline-flex align-items-center justify-content-center align-self-center">
                                <span class="text-white">Daftar</span>
                                <i class="bi bi-arrow-right"></i>
                            </button>
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
