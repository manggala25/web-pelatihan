@extends('backend.layouts.app') <!-- Memanggil layout utama -->

@section('content')
    {{-- Tabel start --}}
    <div class="row">

    {{-- Ringkasan --}}
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

    {{-- Tabel JadwalPelatihan Terdekat --}}
    <div class="col-12">
    <div class="card">
    <div class="card-header border-bottom title-part-padding d-flex justify-content-between align-items-center">
      <h4 class="card-titl mb-0">Data Jadwal pelatihan Terdekat</h4>
      <input id="searchInput" type="text" class="form-control w-25" placeholder="Cari Waktu Jadwal Pelatihan..." />
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <table id="demo-foo-row-toggler" class="table table-bordered toggle-arrow-tiny text-nowrap"
        data-bs-toggle-column="first" data-sorting="true" data-paging="true" data-paging-size="10">
        <thead>
        <tr>
          <th data-breakpoints="xs">NO.</th>
          <th data-breakpoints="xs sm">Waktu</th>
          <th data-breakpoints="xs">Lokasi</th>
          <th data-breakpoints="xs">Nama Tempat Pelatihan</th>
          <th data-breakpoints="all">Link Google Maps</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($jadwalpelatihan as $key => $data)
      <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ \Carbon\Carbon::parse($data->waktu)->translatedFormat('l, d F Y') }}</td>
        <td>{{ $data->lokasi }}</td>
        <td>
          {{-- Jika Kosong --}}
          @if ($data->nama_tempat_pelatihan == null)
           <p class="text-muted mb-0" style="font-style: italic">Data Kosong</p>
          @else
          {{ $data->nama_tempat_pelatihan }}
          @endif
        </td>
        <td>
          {{-- Jika Kosong --}}
          @if ($data->link_gmaps == null)
           <p class="text-muted mb-0" style="font-style: italic">Data Kosong</p>
          @else
          <a href="{{ $data->link_gmaps }}" target="_blank">{{ $data->link_gmaps }}</a>
          @endif
        </td>
    </form>
      </tr>
    @empty
    <tr>
      <td colspan="5" class="text-center text-muted">Data Kosong</td>
    </tr>
  @endforelse
        </tbody>
      </table>
      </div>
    </div>
    </div>
    </div>

    </div>
    </div>
    {{-- Tabel end --}}

@endsection