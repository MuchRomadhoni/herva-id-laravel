@extends('layouts.pendaftaran')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show daftarReseller</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('daftarReseller.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $daftarReseller->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $daftarReseller->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No HP:</strong>
                {{ $daftarReseller->hp }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>alamat:</strong>
                {{ $daftarReseller->alamat }}
            </div>
        </div>
    </div>
@endsection
