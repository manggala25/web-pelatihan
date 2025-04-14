@extends('backend.layouts.app') <!-- Memanggil layout utama -->

@section('content')
    {{-- Tabel start --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div
                    class="card-header bg-info border-bottom title-part-padding d-flex justify-content-between align-items-center">
                    <h4 class="card-title text-white mb-0">Tabel Data Jadwal Pelatihan</h4>
                    <input id="searchInput" type="text" class="form-control w-25" placeholder="Cari nama Jadwal Pelatihan..." />
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <script>alert("{{ session('success') }}");</script>
                    @endif
                    @if (session('error'))
                        <script>alert("{{ session('error') }}");</script>
                    @endif
                    <div class="table-responsive">
                        <table id="demo-foo-row-toggler" class="table table-bordered toggle-arrow-tiny text-nowrap" data-bs-toggle-column="first" data-sorting="true" data-paging="true" data-paging-size="10">
                            <thead>
                                <tr>
                                    <th data-breakpoints="xs">NO.</th>
                                    <th data-breakpoints="xs sm">Waktu</th>
                                    <th data-breakpoints="xs">Lokasi</th>
                                    <th class="text-center" data-breakpoints="xs">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($jadwalpelatihan as $key => $data)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->waktu)->translatedFormat('l, d F Y') }}</td>
                                        <td>{{ $data->lokasi }}</td>
                                        <td class="d-flex gap-2 text-white">
                                            <a href="{{ route('admin.jadwal-pelatihan.edit', $data->id) }}"
                                                class="btn btn-warning btn-circle">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <form action="{{ route('admin.jadwal-pelatihan.destroy', $data->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus Jadwal Pelatihan ini?');">
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