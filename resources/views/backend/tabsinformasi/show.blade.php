@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Tabs Informasi</h1>

        <strong>Judul Informasi:</strong> {{ $tabsinformasi->nama_tabs }}
        <div class="card">
            <div class="card-body">
                <strong>Isi Informasi:</strong>
                {!! $tabsinformasi->content !!}
            </div>
        </div>

        <a href="{{ route('admin.tabsinformasi') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection