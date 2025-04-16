@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="mb-3">{{ $informasi_kontak->nama_kontak }}</h2>

                
                
                <div class="mb-3" hidden>
                    <strong>Icon:</strong> {!! nl2br(htmlspecialchars_decode(e($informasi_kontak->icon))) !!}
                </div>
                
                <div class="mb-3">
                    <strong>Deskripsi:</strong> {!! nl2br(htmlspecialchars_decode(e($informasi_kontak->deskripsi))) !!}
                </div>

                @if($informasi_kontak->link)
                    <div class="mb-3">
                        <strong>Link Kontak:</strong>
                        <a href="{{ $informasi_kontak->link }}" target="_blank"
                            class="btn btn-outline-primary btn-sm">{{ $informasi_kontak->link }}</a>
                    </div>
                @endif

                <a href="{{ route('admin.informasikontak') }}" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection