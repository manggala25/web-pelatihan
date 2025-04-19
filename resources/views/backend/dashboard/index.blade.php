@extends('backend.layouts.app') <!-- Memanggil layout utama -->

@section('content')
  {{-- Tabel start --}}
  <div class="row">
  <div class="col-12">
  <div class="card-header">
  <div class="card-title">
  <h4>Ringkasan Data</h4>
  </div>
  </div>

  <div class="card-group">

    <a href="{{ route('admin.blog') }}" class="card text-decoration-none text-dark">
    <div class="card-body">
      <span class="btn btn-xl btn-light-info text-info btn-circle d-flex align-items-center justify-content-center">
      <i class="ri-article-line"></i>
      </span>
      <h3 class="mt-3 pt-1 mb-0">{{ $jumlahBlog }}</h3>
      <h6 class="text-muted mb-0 fw-normal">Jumlah Blog Publish</h6>
    </div>
    </a>

    <a href="{{ route('admin.portofolio') }}" class="card text-decoration-none text-dark">
    <div class="card-body">
      <span
      class="btn btn-xl btn-light-warning text-warning btn-circle d-flex align-items-center justify-content-center">
      <i class="ri-award-line"></i>
      </span>
      <h3 class="mt-3 pt-1 mb-0">{{ $jumlahPortofolio }}</h3>
      <h6 class="text-muted mb-0 fw-normal">Jumlah Portofolio</h6>
    </div>
    </a>

    <a href="{{ route('admin.nama-pelatihan') }}" class="card text-decoration-none text-dark">
    <div class="card-body">
      <span class="btn btn-xl btn-light-danger text-danger btn-circle d-flex align-items-center justify-content-center">
      <i class="ri-user-star-line"></i>
      </span>
      <h3 class="mt-3 pt-1 mb-0">{{ $jumlahPelatihan }}</h3>
      <h6 class="text-muted mb-0 fw-normal">Jumlah Nama Pelatihan</h6>
    </div>
    </a>

    <a href="{{ route('admin.bentuk-pelatihan') }}" class="card text-decoration-none text-dark">
    <div class="card-body">
      <span
      class="btn btn-xl btn-light-success text-success btn-circle d-flex align-items-center justify-content-center">
      <i class="ri-map-pin-4-line"></i>
      </span>
      <h3 class="mt-3 pt-1 mb-0">{{ $jumlahBentukPelatihan }}</h3>
      <h6 class="text-muted mb-0 fw-normal">Bentuk Pelatihan</h6>
    </div>
    </a>

  </div>


  </div>
  </div>
  </div>
  {{-- Tabel end --}}

@endsection