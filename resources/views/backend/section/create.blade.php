@extends('backend.layouts.app')

@section('content')
    <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-header bg-info">
    <h4 class="card-title text-white">Form Buat Section Homepage</h4>
    </div>
    <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif


    <form action="{{ route('admin.section.store') }}" method="POST" enctype="multipart/form-data" id="sectionForm">
    @csrf

    {{-- Jenis Layout --}}
    <div class="mb-3">
    <label for="layout_type">Jenis Layout : <span class="text-danger">*</span></label>
    <select name="layout_type" class="form-select" id="layout_type" required>
    <option value="">Pilih Layout</option>
    <option value="1">Layout 1</option>
    <option value="2">Layout 2</option>
    <option value="3">Layout 3</option>
    </select>
    </div>
    <div id="layout_preview" class="mt-3">
    <img id="layout_image" src="" alt="Preview Layout" style="display: none; max-width: 30%; height: auto;" />
    </div>

    {{-- Informasi Section --}}
    <div class="row mt-4">
    <div class="col-md-6">
    <div class="mb-3">
    <label for="title">Nama Section : <span class="text-danger">*</span></label>
    <input type="text" name="title" class="form-control" id="title" required value="{{ old('title') }}" />
    </div>
    </div>
    <div class="col-md-6">
    <div class="mb-3">
    <label for="heading">Heading : <span class="text-danger">*</span></label>
    <input type="text" name="heading" class="form-control" id="heading" required
    value="{{ old('heading') }}" />
    </div>
    </div>
    </div>

    {{-- Urutan Section --}}
    <div class="mb-3 mt-4">
    <label for="order">Urutan Section : <span class="text-danger">*</span></label>
    <select name="order" class="form-select" id="order" required>
    <option value="">Pilih Urutan</option>
    <option value="first">Letakan Paling Awal</option>
    @foreach($section as $sec)
    <option value="{{ $sec->id }}">Setelah {{ $sec->title }}</option>
    @endforeach
    <option value="last">Letakan Paling Akhir</option>
    </select>
    </div>

    <div class="mb-3">
    <label for="content">Isi Konten : <span class="text-danger">*</span></label>
    <textarea class="summernote form-control" name="content" id="content"
    required>{{ old('content') }}</textarea>
    </div>

    {{-- Pilihan Jenis Media --}}
    <div class="mb-3">
    <label class="form-label">Pilih Salah Satu Jenis Media</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="media_type" id="mediaImageUpload" value="image_upload">
    <label class="form-check-label" for="mediaImageUpload">Upload Gambar</label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="media_type" id="mediaImageUrl" value="image_url">
    <label class="form-check-label" for="mediaImageUrl">URL Gambar</label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="media_type" id="mediaVideoUrl" value="video_url">
    <label class="form-check-label" for="mediaVideoUrl">URL Video YouTube</label>
    </div>
    </div>

    {{-- Inputan Upload Gambar --}}
    <div id="imageUploadSection" class="mb-3 media-section" style="display: none;">
    <label for="image" class="form-label">Upload Gambar</label>
    <input type="file" class="form-control" id="image" name="image">
    </div>

    {{-- Inputan URL Gambar --}}
    <div id="imageUrlSection" class="mb-3 media-section" style="display: none;">
    <label for="image_url" class="form-label">URL Gambar</label>
    <input type="url" class="form-control" id="image_url" name="image_url" placeholder="contoh: https://example.com/image.jpg">
    </div>

    {{-- Inputan URL Video --}}
    <div id="videoUrlSection" class="mb-3 media-section" style="display: none;">
    <label for="video_url" class="form-label">URL Video YouTube</label>
    <input type="url" class="form-control" id="video_url" name="video_url" placeholder="contoh: https://youtube.com/watch?v=...">
    </div>

    <div class="mt-4 text-end">
    <button type="submit" class="btn btn-info font-weight-medium rounded-pill px-4">
    <div class="d-flex align-items-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
    class="feather feather-send feather-sm fill-white me-2">
    <line x1="22" y1="2" x2="11" y2="13"></line>
    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
    </svg>
    Submit
    </div>
    </button>
    </div>

    </form>
    </div>
    </div>
    </div>
    </div>

@endsection