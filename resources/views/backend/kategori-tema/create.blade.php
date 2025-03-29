@extends('backend.layouts.app')

@section('content')
  <div class="row">
    <div class="col-12">
    <div class="card">
      <div class="card-header bg-info">
      <h4 class="card-title text-white">Form Tambah Portofolio</h4>
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

      <form action="{{ route('admin.portofolio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <label for="judul_portofolio">Judul Portofolio</label>
        <input type="text" name="judul_portofolio" class="form-control" required value="{{ old('judul_portofolio') }}" />
        </div>

        <div class="mb-3">
        <label for="nama_klien">Nama Klien</label>
        <input type="text" name="nama_klien" class="form-control" required value="{{ old('nama_klien') }}" />
        </div>

        <div class="mb-3">
        <label for="kategori_tema">Kategori Tema</label>
        <select name="kategori_tema" class="form-select" required>
          <option value="">-- Pilih Kategori Tema --</option>
          <option value="Teknologi">Teknologi</option>
          <option value="Bisnis">Bisnis</option>
          <option value="Pendidikan">Pendidikan</option>
          <option value="Kesehatan">Kesehatan</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="nama_pelatihan">Nama Pelatihan</label>
        <select name="nama_pelatihan" class="form-select" required>
          <option value="">-- Pilih Nama Pelatihan --</option>
          <option value="Pelatihan Digital Marketing">Pelatihan Digital Marketing</option>
          <option value="Pelatihan UI/UX Design">Pelatihan UI/UX Design</option>
          <option value="Pelatihan Software Development">Pelatihan Software Development</option>
          <option value="Pelatihan Manajemen Bisnis">Pelatihan Manajemen Bisnis</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="waktu_awal">Waktu Awal Pelaksanaan</label>
        <input type="date" name="waktu_awal" class="form-control" required value="{{ old('waktu_awal') }}" />
        </div>

        <div class="mb-3">
        <label for="waktu_akhir">Waktu Akhir Pelaksanaan</label>
        <input type="date" name="waktu_akhir" class="form-control" required value="{{ old('waktu_akhir') }}" />
        </div>

        <div class="mb-3">
        <label for="nama_tempat">Nama Tempat</label>
        <input type="text" name="nama_tempat" class="form-control" required value="{{ old('nama_tempat') }}" />
        </div>

        <div class="mb-3">
        <label for="kota_kabupaten">Kota/Kabupaten</label>
        <input type="text" name="kota_kabupaten" class="form-control" required value="{{ old('kota_kabupaten') }}" />
        </div>

        <div class="mb-3">
        <label for="provinsi">Provinsi</label>
        <input type="text" name="provinsi" class="form-control" required value="{{ old('provinsi') }}" />
        </div>

        <div class="mb-3">
        <label for="thumbnail">Upload Thumbnail (1296x600)</label>
        <input type="file" name="thumbnail" class="form-control">
        </div>

        <div class="mb-3">
        <label for="cover">Upload Cover (416x450)</label>
        <input type="file" name="cover" class="form-control">
        </div>

        <div class="mb-3">
        <label for="link_klien">Link Website Klien</label>
        <input type="url" name="link_klien" class="form-control" value="{{ old('link_klien') }}" />
        </div>

        <div class="mb-3">
        <label for="status">Status</label>
        <select name="status" class="form-select" required>
          <option value="aktif">Aktif</option>
          <option value="nonaktif">Nonaktif</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="content">Isi Konten</label>
        <textarea class="summernote" name="content">{{ old('content') }}</textarea>
        </div>

        <div class="col-12 d-flex justify-content-md-end">
        <button type="submit" class="btn btn-info font-weight-medium rounded-pill px-4">
          <div class="d-flex align-items-center">
          <i class="ri-send-plane-fill me-2"></i>
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