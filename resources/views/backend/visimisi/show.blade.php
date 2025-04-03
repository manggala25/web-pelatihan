@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">

                {{-- Title Top --}}
                <p>
                    {{ $visimisi->title_top ?? 'Belum diisi' }}
                </p>

                {{-- Heading --}}
                <h2 class="card-title">
                    {{ $visimisi->heading ?? 'Belum diisi' }}
                </h2>

                {{-- Visi --}}
                <div class="mb-3">
                    <strong>Visi:</strong>
                    <div class="border p-3 rounded bg-light">
                        {!! nl2br(htmlspecialchars_decode(e($visimisi->visi ?? 'Visi tidak tersedia.'))) !!}
                    </div>
                </div>

                {{-- Misi --}}
                <div class="mb-3">
                    <strong>Misi:</strong>
                    <div class="border p-3 rounded bg-light">
                        {!! nl2br(htmlspecialchars_decode(e($visimisi->misi ?? 'misi tidak tersedia.'))) !!}
                    </div>
                </div>

                {{-- Tombol Kembali --}}
                <a href="{{ route('admin.visimisi') }}" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection