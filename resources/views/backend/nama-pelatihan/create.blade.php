@extends('backend.layouts.app')

@section('content')
    <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-header bg-info">
    <h4 class="card-title text-white">Form Tambah Nama Pelatihan</h4>
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

    <form action="{{ route('admin.nama-pelatihan.store') }}" method="POST">
    @csrf

    <!-- Nama Pelatihan -->
    <div class="mb-3">
      <label for="nama_pelatihan">Nama Pelatihan</label>
      <input type="text" name="nama_pelatihan" class="form-control" required value="{{ old('nama_pelatihan') }}">
    </div>

    <!-- Kategori Tema (Select dari Database) -->
    <div class="mb-3">
      <label for="nama_kategori">Kategori Tema</label>
      <select name="nama_kategori" class="form-select" required>
      <option value="" disabled selected>Pilih Kategori Tema</option>
      @foreach ($kategori_tema as $kategori)
      <option value="{{ $kategori->id }}" {{ old('nama_kategori') == $kategori->id ? 'selected' : '' }}>
      {{ $kategori->nama_kategori }}
      </option>
    @endforeach
      </select>
    </div>

    <!-- Content -->
    <div class="mb-3">
      <label for="content">Isi Konten</label>
      <textarea class="summernote" name="content">{{ old('content') }}</textarea>
    </div>

    <!-- Status -->
    <div class="mb-3">
      <label for="status">Status</label>
      <select name="status" class="form-select" required>
      <option value="aktif" {{ old('status') == 'aktif' ? 'selected' : '' }}>Aktif</option>
      <option value="nonaktif" {{ old('status') == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
      </select>
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
