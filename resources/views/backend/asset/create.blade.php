@extends('backend.layouts.app')

@section('content')
  <div class="row">
  <div class="col-12">
    <div class="card">
    <div class="card-header bg-info">
    <h4 class="card-title text-white">Form Buat Asset</h4>
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

    <form action="{{ route('admin.asset.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
      <label for="logo_reguler">Upload Logo Reguler</label>
      <input type="file" name="logo_reguler" class="form-control" id="logo_reguler" accept="image/*">
      <small class="form-text text-muted">Rekomendasi Ukuran: 20x20px.</small>
    </div>
    <!-- Preview Logo Reguler -->
    <div class="mb-3">
      <img id="logoRegulerPreview" src="" alt="Logo Reguler Preview" class="img-fluid"
      style="max-width: 200px; display: none;">
    </div>

    <div class="mb-3">
      <label for="logo_dark">Upload Logo Dark</label>
      <input type="file" name="logo_dark" class="form-control" id="logo_dark" accept="image/*">
      <small class="form-text text-muted">Rekomendasi Ukuran: 130x60px.</small>
    </div>
    <!-- Preview Logo Dark -->
    <div class="mb-3">
      <img id="logoDarkPreview" src="" alt="Logo Dark Preview" class="img-fluid"
      style="max-width: 200px; display: none;">
    </div>

    <div class="mb-3">
      <label for="logo_light">Upload Logo Light</label>
      <input type="file" name="logo_light" class="form-control" id="logo_light" accept="image/*">
      <small class="form-text text-muted">Rekomendasi Ukuran: 230x60px.</small>
    </div>
    <!-- Preview Logo Light -->
    <div class="mb-3">
      <img id="logoLightPreview" src="" alt="Logo Light Preview" class="img-fluid"
      style="max-width: 200px; display: none;">
    </div>

    <div class="mb-3">
      <label for="motto">Motto</label>
      <textarea name="motto" class="form-control" id="motto" rows="3" placeholder="Masukkan motto..."></textarea>
    </div>

    <div class="col-12 d-flex justify-content-md-end">
      <button type="submit" class="btn btn-info font-weight-medium rounded-pill px-4">
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
  // Preview Logo Reguler
  document.getElementById('logo_reguler').addEventListener('change', function (event) {
    let reader = new FileReader();
    reader.onload = function () {
    let logoPreview = document.getElementById('logoRegulerPreview');
    logoPreview.src = reader.result; // Set the source of the image to the result
    logoPreview.style.display = 'block'; // Show the image
    }
    reader.readAsDataURL(event.target.files[0]);
  });

  // Preview Logo Dark
  document.getElementById('logo_dark').addEventListener('change', function (event) {
    let reader = new FileReader();
    reader.onload = function () {
    let logoPreview = document.getElementById('logoDarkPreview');
    logoPreview.src = reader.result; // Set the source of the image to the result
    logoPreview.style.display = 'block'; // Show the image
    }
    reader.readAsDataURL(event.target.files[0]);
  });

  // Preview Logo Light
  document.getElementById('logo_light').addEventListener('change', function (event) {
    let reader = new FileReader();
    reader.onload = function () {
    let logoPreview = document.getElementById('logoLightPreview');      
    logoPreview.src = reader.result; // Set the source of the image to the result
    logoPreview.style.display = 'block'; // Show the image
    }
    reader.readAsDataURL(event.target.files[0]);
  });
  </script>
@endsection