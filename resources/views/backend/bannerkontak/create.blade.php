@extends('backend.layouts.app')

@section('content')
  <div class="row">
  <div class="col-12">
  <div class="card">
    <div class="card-header bg-info">
    <h4 class="card-title text-white">Form Tambah Banner</h4>
    </div>

    <div class="card-body">

    {{-- Tampilkan Error --}}
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul class="mb-0">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
    </ul>
    </div>
  @endif

    <form action="{{ route('admin.bannerkontak.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
    <label for="text" class="form-label">Masukan Teks</label>
    <input type="text" name="text" class="form-control" required value="{{ old('text') }}" />
    </div>

    <div class="mb-3">
    <label for="image">Upload Gambar Banner</label>
    <input type="file" name="image" id="image" class="form-control" accept=".jpg,.jpeg,.png,.webp,.svg"
    onchange="previewImage(event)" required>
    <small class="text-muted">Ukuran ideal: 416x450 px</small>
    </div>

    <div class="mb-3">
    <img class="img-fluid" id="preview" src="#" alt="Preview Gambar"
    style="display: none; border: 1px solid #ddd; padding: 4px;">
    </div>

    <div class="col-12 d-flex justify-content-md-end">
    <button type="submit" class="
      btn btn-info
      font-weight-medium
      rounded-pill
      px-4
      ">
    <div class="d-flex align-items-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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

  <script>
  function previewImage(event) {
  const input = event.target;
  const preview = document.getElementById('preview');

  if (input.files && input.files[0]) {
    const reader = new FileReader();

    reader.onload = function (e) {
    preview.src = e.target.result;
    preview.style.display = 'block';
    }

    reader.readAsDataURL(input.files[0]);
  }
  }
  </script>

@endsection
