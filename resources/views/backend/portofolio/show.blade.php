@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="mb-3">{{ $portofolio->judul_portofolio }}</h2>

                <div class="mb-3">
                    <strong>Nama Klien:</strong> {{ $portofolio->nama_klien }}
                </div>

                <div class="mb-3">
                    <strong>Kategori Tema:</strong> {{ $portofolio->kategori_tema }}
                </div>

                <div class="mb-3">
                    <strong>Nama Pelatihan:</strong> {{ $portofolio->nama_pelatihan }}
                </div>

                <div class="mb-3">
                    <strong>Waktu Pelaksanaan:</strong>
                    {{ \Carbon\Carbon::parse($portofolio->waktu_awal)->format('d M Y') }} -
                    {{ \Carbon\Carbon::parse($portofolio->waktu_akhir)->format('d M Y') }}
                </div>

                <div class="mb-3">
                    <strong>Lokasi:</strong>
                    {{ $portofolio->nama_tempat }}, {{ $portofolio->kota_kabupaten }}, {{ $portofolio->provinsi }}
                </div>

                <div class="mb-3">
                    <strong>Status:</strong>
                    <span class="badge bg-{{ $portofolio->status == 'aktif' ? 'success' : 'secondary' }}">
                        {{ ucfirst($portofolio->status) }}
                    </span>
                </div>

                @if($portofolio->thumbnail)
                    <div class="mb-3 text-center">
                        <img src="{{ asset('storage/' .$portofolio->thumbnail) }}" alt="Thumbnail" class="img-fluid rounded"
                            style="max-width: 500px;">
                    </div>
                @endif

                @if($portofolio->cover)
                    <div class="mb-3 text-center">
                        <img src="{{ asset('storage/'. $portofolio->cover) }}" alt="Cover" class="img-fluid rounded"
                            style="max-width: 700px;">
                    </div>
                @endif

                <div class="mb-3">
                    <strong>Deskripsi:</strong>
                    <div class="border p-3 rounded bg-light">{!! $portofolio->content !!}</div>
                </div>

                @if($portofolio->link_klien)
                    <div class="mb-3">
                        <strong>Link Klien:</strong>
                        <a href="{{ $portofolio->link_klien }}" target="_blank" class="btn btn-outline-primary btn-sm">Lihat
                            Detail</a>
                    </div>
                @endif

                <a href="{{ route('admin.portofolio') }}" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection