@extends('backend.layouts.app')

@section('content')
    <div class="row">
    <div class="col-12">
    <div class="card">
      <div class="card-header bg-info">
      <h4 class="card-title text-white">Form Tambah Jadwal Pelatihan</h4>
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

      <form action="{{ route('admin.jadwal-pelatihan.store') }}" method="POST">
      @csrf

      <div class="col-md-6">
        <div class="mb-3">
        <label for="waktu">Waktu Pelatihan</label>
        <input type="date" name="waktu" class="form-control" required value="{{ old('waktu') }}">
        </div>
      </div>

      <div class="mb-3">
      <label for="lokasi">Nama Kota Pelatihan</label>
      <input type="text" name="lokasi" class="form-control" required value="{{ old('lokasi') }}">
      </div>

      <div class="mb-3">
        <label for="nama_tempat">Nama Tempat</label>
        <input type="text" name="nama_tempat" class="form-control" value="{{ old('nama_tempat') }}">
      </div>

      <div class="mb-3">
        <label for="link_gmaps">Link Google Maps</label>
        <input type="text" name="link_gmaps" class="form-control" value="{{ old('link_gmaps') }}">
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