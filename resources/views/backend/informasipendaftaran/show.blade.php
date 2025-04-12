@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Informasi Pendaftaran</h1>

        <div class="card">
            <div class="card-body">
                {!! $informasipendaftaran->content !!}
            </div>
        </div>

        <a href="{{ route('admin.informasipendaftaran') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection