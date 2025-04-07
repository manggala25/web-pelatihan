@extends('backend.layouts.app')

@section('content')
    <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-header bg-info">
    <h4 class="card-title text-white">
    Form Edit Mitra
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

    <form action="{{ route('admin.mitra.update', $mitra->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="mb-3">
    <label for="nama_mitra">Nama Mitra</label>
    <input type="text" name="nama_mitra" class="form-control" required value="{{ old('nama_mitra', $mitra->nama_mitra) }}" />
    </div>

    <div class="mb-3">
    <label for="status">Status</label>
    <select name="status" class="form-select" required id="status">
    <option value="aktif" {{ $mitra->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
    <option value="nonaktif" {{ $mitra->status == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
    </select>
    </div>

    <div class="mb-3 mt-1">
    <label for="logo">Upload Gambar Logo</label>
    <input type="file" name="logo" class="form-control" id="logoInput" accept="logo/*">
    <br>
    <img id="logoPreview" src="{{ asset('storage/' .$mitra->logo) }}" alt="logo" width="150px"
    style="display:block; margin-top:10px;">
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
    document.getElementById('status').addEventListener('change', function () {
    let publishedAtInput = document.getElementById('published_at');
    if (this.value === 'publish') {
    publishedAtInput.value = new Date().toISOString().slice(0, 19).replace('T', ' '); // Format YYYY-MM-DD HH:MM:SS
    } else {
    publishedAtInput.value = '';
    }
    });
    </script>

    <script>
    document.getElementById('logoInput').addEventListener('change', function (event) {
    let reader = new FileReader();
    reader.onload = function () {
      document.getElementById('logoPreview').src = reader.result;
    };
    if (event.target.files[0]) {
      reader.readAsDataURL(event.target.files[0]);
    }
    });
    </script>

    <!-- Tambahkan SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
    <script>
    Swal.fire({
      icon: 'success',
      title: 'Sukses!',
      text: '{{ session("success") }}',
      showConfirmButton: false,
      timer: 3000
    });
    </script>
    @endif

    @if(session('error'))
    <script>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: '{{ session("error") }}',
    });
    </script>
    @endif


@endsection