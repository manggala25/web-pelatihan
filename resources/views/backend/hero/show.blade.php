@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">

                {{-- Title Top --}}
                <p>
                    {{ $hero->top_title ?? 'Belum diisi' }}
                </p>

                {{-- Heading --}}
                <h2 class="card-title">
                    {{ $hero->heading ?? 'Belum diisi' }}
                </h2>

                {{-- Paragraf --}}
                <div class="mb-3">
                    <strong>Paragraf:</strong>
                    <div class="border p-3 rounded bg-light">
                        {!! nl2br(htmlspecialchars_decode(e($hero->paragraf ?? 'Paragraf tidak tersedia.'))) !!}
                    </div>
                </div>

                {{-- Gambar hero --}}
                <div class="mb-3 text-center">
                    @if($hero->background)
                        <img src="{{ asset('storage/' . $hero->background) }}" alt="{{ $hero->top_title }}" class="img-fluid rounded" style="max-width: 500px;">
                    @else
                        <p class="text-muted">Belum ada gambar hero</p>
                    @endif
                </div>

                {{-- Tombol Kembali --}}
                <a href="{{ route('admin.hero') }}" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection