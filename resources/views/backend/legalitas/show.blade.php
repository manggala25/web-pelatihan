@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">

                {{-- Title Top --}}
                <p>
                    {{ $legalitas->top_title ?? 'Belum diisi' }}
                </p>

                {{-- Heading --}}
                <h2 class="card-title">
                    {{ $legalitas->heading ?? 'Belum diisi' }}
                </h2>

                {{-- Deskripsi --}}
                <div class="mb-3">
                    <strong>Isi Konten:</strong>
                    <div class="border p-3 rounded bg-light">
                        {!! nl2br(htmlspecialchars_decode(e($legalitas->content ?? 'Isi Konten tidak tersedia.'))) !!}
                    </div>
                </div>

                {{-- Tombol Kembali --}}
                <a href="{{ route('admin.legalitas') }}" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection