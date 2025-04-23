@extends('backend.layouts.app')

@section('content')
    <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-header bg-warning">
    <h4 class="card-title text-white">Form Edit Portofolio</h4>
    </div>
    <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif

    <form action="{{ route('admin.portofolio.update', $portofolio->id) }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="mb-3">
    <label for="judul_portofolio">Judul Portofolio</label>
    <input type="text" name="judul_portofolio" class="form-control" required
    value="{{ old('judul_portofolio', $portofolio->judul_portofolio) }}" />
    </div>

    <div class="mb-3">
    <label for="nama_klien">Nama Klien</label>
    <input type="text" name="nama_klien" class="form-control" required
    value="{{ old('nama_klien', $portofolio->nama_klien) }}" />
    </div>

    <div class="mb-3">
        <label for="kategori_tema_nama_pelatihan" class="form-label">Kategori Tema & Nama Pelatihan</label>
        @if ($pelatihanOptions->isEmpty())
            <div class="alert alert-warning">
                <strong>Perhatian!</strong> Data pelatihan tidak tersedia.
            </div>
        @else
            <select name="kategori_nama_pelatihan" class=" select2 form-control custom-select" style="width: 100%; height: 40px"
                required>
                <option value="">-- Pilih Kategori Tema & Nama Pelatihan --</option>
                @foreach ($pelatihanOptions as $option)
                    <option value="{{ $option['value'] }}" {{ old('kategori_tema_nama_pelatihan', ($portofolio->kategori_tema ?? '') . '|' . ($portofolio->nama_pelatihan ?? '')) == $option['value'] ? 'selected' : '' }}>
                        {{ $option['label'] }}
                    </option>
                @endforeach
            </select>
        @endif
    </div>


    <div class="col-md-6">
        <div class="mb-3">
        <label for="waktu_awal">Waktu Awal</label>
        <input type="date" name="waktu_awal" class="form-control" required
        value="{{ old('waktu_awal', \Carbon\Carbon::parse($portofolio->waktu_awal)->format('Y-m-d')) }}" />
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
        <label for="waktu_akhir">Waktu Akhir</label>
        <input type="date" name="waktu_akhir" class="form-control" required
        value="{{ old('waktu_akhir', \Carbon\Carbon::parse($portofolio->waktu_akhir)->format('Y-m-d')) }}" />
        </div>
    </div>

    <div class="mb-3">
    <label for="nama_tempat">Nama Tempat</label>
    <input type="text" name="nama_tempat" class="form-control" required
    value="{{ old('nama_tempat', $portofolio->nama_tempat) }}" />
    </div>

    <div class="mb-3">
        <label for="provinsi">Provinsi</label>
        <select name="provinsi" id="provinsi" class="form-control" required>
            <option value="">Pilih Provinsi</option>
            @foreach ($provinsiList as $provinsi)
                <option value="{{ $provinsi->kode_provinsi }}" @if(old('provinsi', $portofolio->provinsi) == $provinsi->kode_provinsi) selected @endif>
                    {{ $provinsi->nama_provinsi }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="kota_kabupaten">Kota/Kabupaten</label>
        <select name="kota_kabupaten" id="kota_kabupaten" class="form-control" required>
            <option value="">Pilih Kota/Kabupaten</option>
            @foreach ($kotaList as $kota)
                <option value="{{ $kota->kode_kabkota }}" @if(old('kota_kabupaten', $portofolio->kota_kabupaten) == $kota->kode_kabkota) selected @endif>
                    {{ $kota->nama_kabkota }}
                </option>
            @endforeach
        </select>
    </div>



    <div class="mb-3">
    <label for="thumbnail">Upload Thumbnail (416x450)</label>
    <input type="file" name="thumbnail" class="form-control" id="thumbnail" accept="image/*">
    <img id="previewThumbnail" src="{{ asset('storage/' . $portofolio->thumbnail) }}" class="img-fluid mt-2"
    style="max-width: 300px;" />
    </div>

    <div class="mb-3">
    <label for="cover">Upload Cover (1296x600)</label>
    <input type="file" name="cover" class="form-control" id="cover" accept="image/*">
    <img id="previewCover" src="{{ asset('storage/' . $portofolio->cover) }}" class="img-fluid mt-2"
    style="max-width: 300px;" />
    </div>

    <div class="mb-3">
    <label for="link_klien">Link Klien</label>
    <input type="text" name="link_klien" class="form-control"
    value="{{ old('link_klien', $portofolio->link_klien) }}" />
    </div>

    <div class="mb-3">
    <label for="status">Status</label>
    <select name="status" class="form-select" required>
    <option value="aktif" {{ $portofolio->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
    <option value="nonaktif" {{ $portofolio->status == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
    </select>
    </div>

    <div class="mb-3">
    <label for="content">Isi Konten</label>
    <textarea class="summernote" name="content">{{ old('content', $portofolio->content) }}</textarea>
    </div>

    <div class="col-12 d-flex justify-content-md-end">
    <button type="submit" class="btn btn-warning font-weight-medium rounded-pill px-4">
    <div class="d-flex align-items-center">
    <i class="ri-save-3-fill me-2"></i>
    Update
    </div>
    </button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>

    <script>
    document.getElementById('thumbnail').addEventListener('change', function (event) {
    let reader = new FileReader();
    reader.onload = function () {
    document.getElementById('previewThumbnail').src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
    });

    document.getElementById('cover').addEventListener('change', function (event) {
    let reader = new FileReader();
    reader.onload = function () {
    document.getElementById('previewCover').src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
    });
    </script>
@endsection