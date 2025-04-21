@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h4 class="card-title text-white">Form Edit Jadwal Pelatihan</h4>
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

                    <form action="{{ route('admin.jadwal-pelatihan.update', $jadwalpelatihan->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="waktu">Waktu Pelatihan</label>
                                <input type="date" name="waktu" class="form-control" required
                                    value="{{ old('waktu', $jadwalpelatihan->waktu ? \Carbon\Carbon::parse($jadwalpelatihan->waktu)->format('Y-m-d') : '') }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="lokasi">Lokasi Pelatihan</label>
                            <input type="text" name="lokasi" class="form-control" required
                                value="{{ old('lokasi', $jadwalpelatihan->lokasi) }}">
                        </div>

                        <div class="mb-3">
                            <label for="nama_tempat">Nama Tempat</label>
                            <input type="text" name="nama_tempat" class="form-control"
                                value="{{ old('nama_tempat', $jadwalpelatihan->nama_tempat) }}">
                        </div>

                        <div class="mb-3">
                            <label for="link_gmaps">Link Google Maps</label>
                            <input type="text" name="link_gmaps" class="form-control"
                                value="{{ old('link_gmaps', $jadwalpelatihan->link_gmaps) }}">
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
@endsection