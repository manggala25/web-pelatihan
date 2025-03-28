@extends('backend.layouts.app')

@section('content')
    <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-header bg-info">
      <h4 class="card-title text-white">
      Form Buat Blog
      </h4>
    </div>
    <div class="card-body">
    <!-- Tampilkan Error Validasi -->
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif

    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
    <label for="judul">Judul Blog</label>
    <input type="text" name="judul" class="form-control" required value="{{ old('judul') }}" />
    </div>

    <div class="mb-3">
    <label for="kategori">Kategori</label>
    <input type="text" name="kategori" class="form-control" required value="{{ old('kategori') }}" />
    </div>

    <div class="mb-3">
    <label for="status">Status</label>
    <select name="status" class="form-select" required>
    <option value="draft">Draft</option>
    <option value="publish">Publish</option>
    <option value="archive">Archive</option>
    </select>
    </div>

    <div class="mb-3 mt-1">
    <label for="thumbnail">Upload Thumbnail (416x270)</label>
    <input type="file" name="thumbnail" class="form-control">
    </div>

    <div class="mb-3">
    <label for="content">Isi Konten</label>
    <textarea class="summernote" name="content">{{ old('content') }}</textarea>
    </div>
    <div class="col-12 d-flex justify-content-md-end">
    <button type="submit" class="
          btn btn-info
          font-weight-medium
          rounded-pill
          px-4
          ">
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