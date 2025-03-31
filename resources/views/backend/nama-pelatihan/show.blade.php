@extends('backend.layouts.app')

@section('content')
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-3">{{ $nama_pelatihan->nama_pelatihan }}</h2>


                    <div class="mb-3">
                        <strong>Kategori:</strong> {{ $nama_pelatihan->nama_kategori }}
                    </div>

                    <div class="mb-3">
                        <strong>Status:</strong>
                        <span class="badge bg-{{ $nama_pelatihan->status == 'aktif' ? 'success' : 'secondary' }}">
                            {{ ucfirst($nama_pelatihan->status) }}
                        </span>
                    </div>

                    <div class="mb-3">
                        <strong>Deskripsi:</strong>
                        <div class="border p-3 rounded bg-light">{!! nl2br(htmlspecialchars_decode(e($nama_pelatihan->content))) !!}</div>
                    </div>

                    <a href="{{ route('admin.nama-pelatihan') }}" class="btn btn-secondary mt-3">Kembali</a>
                </div>
            </div>
        </div>
@endsection