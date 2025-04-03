@extends('backend.layouts.app') <!-- Memanggil layout utama -->

@section('content')
    {{-- Tabel start --}}
    <div class="row">
    <div class="col-12">
    <div class="card">
    <div
    class="card-header bg-info border-bottom title-part-padding d-flex justify-content-between align-items-center">
    <h4 class="card-title text-white mb-0">Tabel Data Profil</h4>
    <input id="searchInput" type="text" class="form-control w-25" placeholder="Cari judul..." />
    </div>
    <div class="card-body">
    @if (session('success'))
    <script>alert("{{ session('success') }}");</script>
    @endif

    @if (session('error'))
    <script>alert("{{ session('error') }}");</script>
    @endif

    <div class="table-responsive">
    <table id="demo-foo-row-toggler" class="table table-bordered toggle-arrow-tiny text-nowrap"
    data-bs-toggle-column="first" data-sorting="true" data-paging="true" data-paging-size="5">
    <thead>
    <tr>
    <th data-breakpoints="xs">NO.</th>
    <th data-breakpoints="xs sm">Heading</th>
    <th>Title Top</th>
    <th class="text-center" data-breakpoints="xs">Aksi</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($profil as $key => $profil)
        <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ Str::limit($profil->heading, 50) }}</td>
        <td>{{ $profil->title_top }}</td>
        <td class="d-flex gap-2 text-white">
        <a href="{{ route('admin.profil.show', $profil->id) }}" class="btn btn-info btn-circle">
        <i class="ri-eye-line"></i>
        </a>
        <a href="{{ route('admin.profil.edit', $profil->id) }}" class="btn btn-warning btn-circle">
        <i class="ri-edit-2-fill"></i>
        </a>
        </td>
        </tr>
    @empty
    <tr>
    <td colspan="6" class="text-center text-muted">Data Kosong</td>
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
    document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const tableRows = document.querySelectorAll("#demo-foo-row-toggler tbody tr");

    searchInput.addEventListener("input", function () {
    const filter = searchInput.value.toLowerCase();

    tableRows.forEach(row => {
    const titleCell = row.cells[1]; // Kolom judul ada di indeks 1
    if (titleCell) {
    const titleText = titleCell.textContent.toLowerCase();
    row.style.display = titleText.includes(filter) ? "" : "none";
    }
    });
    });
    });
    </script>
@endsection