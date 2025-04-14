@extends('backend.layouts.app')

@section('content')
    <div class="row">
    <div class="col-12">
    <div class="card">
      <div class="card-header bg-warning">
      <h4 class="card-title text-white">Edit Banner Kontak</h4>
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

      <form action="{{ route('admin.bannerkontak.update', $bannerkontak->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PATCH')

      <div class="mb-3">
        <label for="text" class="form-label">text Informasi</label>
        <input type="text" class="form-control" id="text" name="text"
        value="{{ old('text', $bannerkontak->text) }}">
      </div>

      <div class="mb-3">
      <label for="image">Gambar Banner</label>
      <input type="file" name="image" class="form-control" onchange="previewGambar(this)">
      <small class="text-muted">Ukuran ideal: 416x450 px</small>
      </div>

      <div class="mt-3">
        <img id="preview" src="{{ asset('storage/' . $bannerkontak->image) }}" alt="Preview" style="max-width: 250px;">
      </div>

      <div class="col-12 d-flex justify-content-md-end">
      <button type="submit" class="btn btn-warning rounded-pill px-4">
        <i class="ri-save-line me-1"></i> Update
      </button>
      </div>
      </form>

      </div>
    </div>
    </div>
    </div>
    <script>
    function previewGambar(input) {
    const preview = document.getElementById('preview');
    const file = input.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
      preview.src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
    }
    </script>
@endsection
