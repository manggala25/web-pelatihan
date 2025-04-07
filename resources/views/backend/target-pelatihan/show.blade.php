@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">

                {{-- Title Top --}}
                <p>
                    {{ $targetpelatihan->top_title ?? 'Belum diisi' }}
                </p>

                {{-- Heading --}}
                <h2 class="card-title">
                    {{ $targetpelatihan->heading ?? 'Belum diisi' }}
                </h2>

                {{-- Gambar Depan --}}
                <div class="mb-3 text-center">
                    @if($targetpelatihan->image_front)
                        <img src="{{ asset('storage/' . $targetpelatihan->image_front) }}" alt="{{ $targetpelatihan->title_top }}" class="img-fluid rounded" style="max-width: 500px;">
                    @else
                        <p class="text-muted">Belum ada gambar</p>
                    @endif
                </div>

                {{-- Gambar Belakang --}}
                <div class="mb-3 text-center">
                    @if($targetpelatihan->image_back)
                        <img src="{{ asset('storage/' . $targetpelatihan->image_back) }}" alt="{{ $targetpelatihan->title_top }}" class="img-fluid rounded"
                            style="max-width: 500px;">
                    @else
                        <p class="text-muted">Belum ada gambar</p>
                    @endif
                </div>


                {{-- Deskripsi --}}
                <div class="mb-3">
                    <strong>Deskripsi:</strong>
                    <div class="border p-3 rounded bg-light">
                        {!! nl2br(htmlspecialchars_decode(e($targetpelatihan->content ?? 'Deskripsi tidak tersedia.'))) !!}
                    </div>
                </div>

                {{-- Tombol Kembali --}}
                <a href="{{ route('admin.target-pelatihan') }}" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection