@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">

                {{-- Title Top --}}
                <p>
                    {{ $profil->title_top ?? 'Belum diisi' }}
                </p>

                {{-- Heading --}}
                <h2 class="card-title">
                    {{ $profil->heading ?? 'Belum diisi' }}
                </h2>

                {{-- Gambar Profil --}}
                <div class="mb-3 text-center">
                    @if($profil->img_profil)
                        <img src="{{ asset('storage/' . $profil->img_profil) }}" alt="{{ $profil->title_top }}" class="img-fluid rounded" style="max-width: 500px;">
                    @else
                        <p class="text-muted">Belum ada gambar profil</p>
                    @endif
                </div>

                {{-- Deskripsi --}}
                <div class="mb-3">
                    <strong>Deskripsi:</strong>
                    <div class="border p-3 rounded bg-light">
                        {!! nl2br(htmlspecialchars_decode(e($profil->deskripsi ?? 'Deskripsi tidak tersedia.'))) !!}
                    </div>
                </div>

                {{-- Tombol Kembali --}}
                <a href="{{ route('admin.profil') }}" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection