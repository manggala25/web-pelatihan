@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">

                {{-- Title Top --}}
                <p>
                    {{ $tujuanlembaga->title_top ?? 'Belum diisi' }}
                </p>

                {{-- Heading --}}
                <h2 class="card-title">
                    {{ $tujuanlembaga->heading ?? 'Belum diisi' }}
                </h2>

                {{-- Deskripsi --}}
                <div class="mb-3">
                    <strong>Deskripsi:</strong>
                    <div class="border p-3 rounded bg-light">
                        {!! nl2br(htmlspecialchars_decode(e($tujuanlembaga->deskripsi ?? 'Deskripsi tidak tersedia.'))) !!}
                    </div>
                </div>

                {{-- Tombol Kembali --}}
                <a href="{{ route('admin.tujuanlembaga') }}" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection