@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">{{ $blog->judul }}</h1>

        <div class="mb-3">
            <strong>Kategori:</strong> {{ $blog->kategori }}
        </div>

        <div class="mb-3">
            <strong>Status:</strong>
            <span class="badge bg-{{ $blog->status == 'publish' ? 'success' : 'secondary' }}">
                {{ ucfirst($blog->status) }}
            </span>
        </div>

        <div class="mb-3">
            <strong>Tanggal Publikasi:</strong>
            {{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('d M Y H:i') : '-' }}
        </div>

        @if($blog->thumbnail)
            <div class="mb-3">
                <img src="{{ asset('storage/'. $blog->thumbnail) }}" alt="Thumbnail" class="img-fluid" style="max-width: 500px;">
            </div>
        @endif

        <div class="content">
            {!! $blog->content !!}
        </div>

        <a href="{{ route('admin.blog') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection