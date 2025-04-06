@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="mb-3">Testimoni dari {{ $testimoni->nama_pic }}</h2>

                <div class="mb-3">
                    <strong>Okupasi:</strong> {{ $testimoni->okupasi }}
                </div>

                <div class="mb-3">
                    <strong>Nama Lembaga:</strong> {{ $testimoni->nama_lembaga }}
                </div>

                <div class="mb-3">
                    <strong>Status:</strong>
                    <span class="badge bg-{{ $testimoni->status == 'aktif' ? 'success' : 'secondary' }}">
                        {{ ucfirst($testimoni->status) }}
                    </span>
                </div>

                @if($testimoni->image)
                    <div class="mb-3 text-center">
                        <img src="{{ asset('storage/' . $testimoni->image) }}" alt="Image Testimoni" class="img-fluid rounded"
                            style="max-width: 500px;">
                    </div>
                @endif

                <div class="mb-3">
                    <strong>Isi Testimoni:</strong>
                    <div class="border p-3 rounded bg-light">{!! $testimoni->content !!}</div>
                </div>

                <a href="{{ route('admin.testimoni') }}" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection