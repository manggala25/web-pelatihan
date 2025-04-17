@extends('backend.layouts.app')

@section('content')
  <div class="row">
    <div class="col-12">
    <div class="card">
      <div class="card-header bg-warning">
      <h4 class="card-title text-white">Form Edit Asset</h4>
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

      <form action="{{ route('admin.asset.update', $asset->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-3">
        <label for="logo_reguler">Upload Logo Reguler</label>
        <input type="file" name="logo_reguler" class="form-control" id="logo_reguler" accept="image/*">
        <small class="form-text text-muted">Rekomendasi Ukuran: 20x20px.</small>
        </div>
        <!-- Preview Logo Reguler -->
        <div class="mb-3">
        <img id="logoRegulerPreview" src="{{ asset('storage/' . $asset->logo_reguler) }}" alt="Logo Reguler Preview"
          class="img-fluid" style="max-width: 200px; {{ $asset->logo_reguler ? '' : 'display: none;' }}">
        </div>

        <div class="mb-3">
        <label for="logo_dark">Upload Logo Dark</label>
        <input type="file" name="logo_dark" class="form-control" id="logo_dark" accept="image/*">
        <small class="form-text text-muted">Rekomendasi Ukuran: 130x60px.</small>
        </div>
        <!-- Preview Logo Dark -->
        <div class="mb-3">
        <img id="logoDarkPreview" src="{{ asset('storage/' . $asset->logo_dark) }}" alt="Logo Dark Preview"
          class="img-fluid" style="max-width: 200px; {{ $asset->logo_dark ? '' : 'display: none;' }}">
        </div>

        <div class="mb-3">
        <label for="logo_light">Upload Logo Light</label>
        <input type="file" name="logo_light" class="form-control" id="logo_light" accept="image/*">
        <small class="form-text text-muted">Rekomendasi Ukuran: 230x60px.</small>
        </div>
        <!-- Preview Logo Light -->
        <div class="mb-3">
        <img id="logoLightPreview" src="{{ asset('storage/' . $asset->logo_light) }}" alt="Logo Light Preview"
          class="img-fluid" style="max-width: 200px; {{ $asset->logo_light ? '' : 'display: none;' }}">
        </div>

        <div class="mb-3">
        <label for="motto">Motto</label>
        <textarea name="motto" class="form-control" id="motto" rows="3"
          placeholder="Masukkan motto...">{{ old('motto', $asset->motto) }}</textarea>
        </div>

        <div class="col-12 d-flex justify-content-md-end">
        <button type="submit" class="btn btn-warning font-weight-medium rounded-pill px-4">
          <div class="d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-save feather-sm fill-white me-2">
            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
            <polyline points="17 21 17 13 7 13 7 21"></polyline>
            <polyline points="7 3 7 8 15 8"></polyline>
          </svg>
          Update
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
      logoPreview.src = reader.result;
      logoPreview.style.display = 'block';
    }
    reader.readAsDataURL(event.target.files[0]);
    });

    // Preview Logo Dark
    document.getElementById('logo_dark').addEventListener('change', function (event) {
    let reader = new FileReader();
    reader.onload = function () {
      let logoPreview = document.getElementById('logoDarkPreview');
      logoPreview.src = reader.result;
      logoPreview.style.display = 'block';
    }
    reader.readAsDataURL(event.target.files[0]);
    });

    // Preview Logo Light
    document.getElementById('logo_light').addEventListener('change', function (event) {
    let reader = new FileReader();
    reader.onload = function () {
      let logoPreview = document.getElementById('logoLightPreview');
      logoPreview.src = reader.result;
      logoPreview.style.display = 'block';
    }
    reader.readAsDataURL(event.target.files[0]);
    });
  </script>
@endsection