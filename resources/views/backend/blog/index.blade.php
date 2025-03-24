@extends('backend.layouts.app') <!-- Memanggil layout utama -->

@section('content')
  {{-- Tabel start --}}
  <div class="row">
    <div class="col-12">
    <div class="card">
      <div class="border-bottom title-part-padding">
      <h4>Tabel Data Blog</h4>
      <h6 class="card-subtitle mb-0">Create your table with Paginated Footable</h6>
      </div>
      <div class="card-body">
      <div class="table-responsive">
        <table id="demo-foo-row-toggler" class="table table-bordered toggle-arrow-tiny text-nowrap"
        data-bs-toggle-column="first" data-paging-size="10">
        <thead>
          <tr>
          <th data-breakpoints="xs">NO.</th>
          <th data-breakpoints="xs sm">Judul</th>
          <th data-breakpoints="xs">Status</th>
          <th data-breakpoints="all">Tgl Publish</th>
          <th data-breakpoints="xs">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($blogs as $key => $blog)
        <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ Str::limit($blog->judul, 50) }}</td>
        <td>
        @if($blog->status == 'publish')
      <span class="badge bg-success">PUBLISH</span>
    @elseif($blog->status == 'draft')
    <span class="badge bg-warning">DRAFT</span>
  @else
  <span class="badge bg-secondary">ARCHIVE</span>
@endif
        </td>
        <td>
        @if($blog->status == 'publish' && $blog->published_at)
      {{ \Carbon\Carbon::parse($blog->published_at)->format('d F Y') }}
    @else
    -
  @endif
        </td>
        <td class="d-flex gap-2 text-white">
        <a href="#" class="btn btn-info btn-circle">
        <i class="ri-eye-fill"></i>
        </a>
        <a href="#" class="btn btn-warning btn-circle">
        <i class="ri-edit-2-fill"></i>
        </a>
        <form action="#" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-circle">
          <i class="ri-delete-bin-fill"></i>
        </button>
        </form>
        </td>
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
  {{-- Tabel end --}}
@endsection