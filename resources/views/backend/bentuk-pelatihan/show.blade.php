@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">{{ $bentukpelatihan->nama_bentuk_pelatihan }}</h1>

        <div class="mb-3">
            <strong>Status:</strong>
            <span class="badge bg-{{ $bentukpelatihan->status == 'aktif' ? 'success' : 'secondary' }}">
                {{ ucfirst($bentukpelatihan->status) }}
            </span>
        </div>

        @if($bentukpelatihan->image)
            <div class="mb-3">
                <img src="{{ asset('storage/'.$bentukpelatihan->image) }}" alt="image" class="img-fluid" style="max-width: 500px;">
            </div>
        @endif

        <a href="{{ route('admin.bentuk-pelatihan') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection