@extends('backend.layouts.app') <!-- Memanggil layout utama -->

@section('content')
  {{-- Tabel start --}}
  <div class="row">
  <div class="col-12">
    <div class="card">
    <div class="card-header bg-info border-bottom title-part-padding d-flex justify-content-between align-items-center">
    <h4 class="card-title text-white mb-0">Tabel Data Blog</h4>
    <input id="searchInput" type="text" class="form-control w-25" placeholder="Cari judul..." />
    </div>
    <div class="card-body">
    @if (session('success'))
    <script>
      alert("{{ session('success') }}");
    </script>
    @endif

    @if (session('error'))
    <script>
      alert("{{ session('error') }}");
    </script>
    @endif

    <div class="table-responsive">
    <table id="demo-foo-row-toggler" class="table table-bordered toggle-arrow-tiny text-nowrap"
      data-bs-toggle-column="first" data-sorting="true" data-paging="true" data-paging-size="5">
      <thead>
      <tr>
      <th data-breakpoints="xs">NO.</th>
      <th data-breakpoints="xs sm">Judul</th>
      <th data-breakpoints="xs">Status</th>
      <th data-breakpoints="all">Tgl Publish</th>
      <th class="text-center" data-breakpoints="xs">Aksi</th>
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
        {{ \Carbon\Carbon::parse($blog->published_at)->format('d F Y H:i') }}
        @else
        -
        @endif
      </td>
      <td class="d-flex gap-2 text-white">
        <a href="{{ route('admin.blog.show', $blog->slug) }}" class="btn btn-info btn-circle">
        <i class="ri-eye-line"></i>
        </a>
        <a href="{{ route('admin.blog.edit', $blog->slug) }}" class="btn btn-warning btn-circle">
        <i class="ri-edit-2-fill"></i>
        </a>
        <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST" class="delete-form"
        onsubmit="return confirmDelete()">
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

  <script>
  function confirmDelete() {
    return confirm("Apakah Anda yakin ingin menghapus data ini?");
  }
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const searchInput = document.getElementById("searchInput");
      const tableRows = document.querySelectorAll("#demo-foo-row-toggler tbody tr");

      searchInput.addEventListener("input", function () {
      const filter = searchInput.value.toLowerCase();

      tableRows.forEach(row => {
        const titleCell = row.cells[1]; // Kolom judul ada di indeks 1
        if (titleCell) {
        const titleText = titleCell.textContent.toLowerCase();
        if (titleText.includes(filter)) {
          row.style.display = ""; // Tampilkan baris
        } else {
          row.style.display = "none"; // Sembunyikan baris
        }
        }
      });
      });
    });
  </script>
@endsection
