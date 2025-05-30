@extends('backend.layouts.app')

@section('content')
  <div class="row">
    <div class="col-12">
    <div class="card">
      <div class="card-header bg-info">
      <h4 class="card-title text-white">Form Tambah Kategori Blog</h4>
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

      <form action="{{ route('admin.kategoriblog.store') }}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" name="nama_kategori" class="form-control" required value="{{ old('nama_kategori') }}">
        </div>

        <div class="col-12 d-flex justify-content-md-end">
        <button type="submit" class="btn btn-info font-weight-medium rounded-pill px-4">
          <div class="d-flex align-items-center">
          <i class="ri-send-plane-fill me-2"></i> Simpan
          </div>
        </button>
        </div>
      </form>
      </div>
    </div>
    </div>
  </div>
@endsection