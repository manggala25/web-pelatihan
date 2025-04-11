@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">{{ $section->title }}</h1>

        <div class="mb-3">
            <strong>Layout Type:</strong> 
            @if ($section->layout_type == '1')
                Layout 1
                <img src="{{ asset('storage/preview-layout/layout1.svg') }}" alt="layout1" style="max-width: 50%">
            @elseif ($section->layout_type == '2')
                Layout 2
                <img src="{{ asset('storage/preview-layout/layout2.svg') }}" alt="layout2" style="max-width: 50%">
            @elseif ($section->layout_type == '3')
                Layout 3
                <img src="{{ asset('storage/preview-layout/layout3.svg') }}" alt="layout3" style="max-width: 50%">
            @endif
        </div>

        <div class="mb-3">
            <strong>Heading:</strong> {{ $section->heading }}
        </div>

        <div class="mb-3">
            <strong>Order:</strong> {{ $section->order }}
        </div>

        <div class="mb-3">
            <strong>Media:</strong><br>

            @if ($section->image)
                @if (filter_var($section->image, FILTER_VALIDATE_URL))
                    {{-- Jika image adalah URL --}}
                    <img src="{{ $section->image }}" alt="Image" class="img-fluid" style="max-width: 500px;">
                @else
                    {{-- Jika image adalah path lokal --}}
                    <img src="{{ asset('storage/' . $section->image) }}" alt="Image" class="img-fluid" style="max-width: 500px;">
                @endif
            @elseif ($section->video_url)
                {{-- Tampilkan video jika tidak ada image --}}
                <div class="ratio ratio-16x9" style="max-width: 800px;">
                    <iframe src="{{ $section->video_url }}" frameborder="0" allowfullscreen></iframe>
                </div>
            @else
                <p class="text-muted">Tidak ada media.</p>
            @endif
        </div>

        <div class="mb-3">
            <strong>Konten:</strong>
            <div class="mt-2">
                {!! $section->content !!}
            </div>
        </div>

        <a href="{{ route('admin.section') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection