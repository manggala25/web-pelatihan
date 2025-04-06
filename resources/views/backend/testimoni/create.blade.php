@extends('backend.layouts.app')

@section('content')
    <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-header bg-info">
    <h4 class="card-title text-white">Form Tambah Testimoni</h4>
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

    <form action="{{ route('admin.testimoni.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
    <label for="nama_pic">Nama PIC</label>
    <input type="text" name="nama_pic" class="form-control" required value="{{ old('nama_pic') }}" />
    </div>

    <div class="mb-3">
    <label for="okupasi">Jabatan/ Okupasi</label>
    <input type="text" name="okupasi" class="form-control" required value="{{ old('okupasi') }}" />
    </div>

    <div class="mb-3">
    <label for="nama_lembaga">Nama Lembaga</label>
    <input type="text" name="nama_lembaga" class="form-control" required value="{{ old('nama_lembaga') }}" />
    </div>

    <div class="mb-3">
    <label for="image">Upload Gambar (65x65)</label>
    <input type="file" name="image" class="form-control">
    </div>

    <div class="mb-3">
    <label for="status">Status</label>
    <select name="status" class="form-select" required>
    <option value="aktif">Aktif</option>
    <option value="nonaktif">Nonaktif</option>
    </select>
    </div>

    <div class="mb-3">
        <label for="content">Isi Testimoni</label>
        <textarea class="form-control" rows="3" name="content">{{ old('content') }}</textarea>
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