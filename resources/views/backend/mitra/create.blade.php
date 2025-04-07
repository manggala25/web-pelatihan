@extends('backend.layouts.app')

@section('content')
  <div class="row">
    <div class="col-12">
    <div class="card">
      <div class="card-header bg-info">
      <h4 class="card-title text-white">Form Buat Mitra</h4>
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

      <form action="{{ route('admin.mitra.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <label for="nama_mitra">Nama Mitra</label>
        <input type="text" name="nama_mitra" class="form-control" required value="{{ old('nama_mitra') }}" />
        </div>

        <div class="mb-3">
        <label for="status">Status</label>
        <select name="status" class="form-select" required>
          <option value="aktif">Aktif</option>
          <option value="nonaktif">Nonaktif</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="logo">Upload Gambar Logo</label>
        <input type="file" name="logo" class="form-control" id="logo" accept="image/*">
        </div>

        <!-- Preview Logo -->
        <div class="mb-3">

        <img id="logoPreview" src="" alt="Logo Preview" class="img-fluid" style="max-width: 200px; display: none;">
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
    document.getElementById('logo').addEventListener('change', function (event) {
    let reader = new FileReader();
    reader.onload = function () {
      let logoPreview = document.getElementById('logoPreview');
      logoPreview.src = reader.result; // Set the source of the image to the result
      logoPreview.style.display = 'block'; // Show the image
    }
    reader.readAsDataURL(event.target.files[0]);
    });
  </script>

@endsection