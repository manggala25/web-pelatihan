@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h4 class="card-title text-white">Form Edit Informasi Kontak</h4>
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

                    <form action="{{ route('admin.informasikontak.update', $informasi_kontak->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <!-- Informasi Kontak -->
                        <div class="mb-3">
                            <label for="nama_kontak">Nama Kontak</label>
                            <input type="text" name="nama_kontak" class="form-control" required 
                                value="{{ old('nama_kontak', $informasi_kontak->nama_kontak) }}">
                        </div>

                        <!-- Link Kontak -->
                        <div class="mb-3">
                            <label for="link">Link Kontak</label>
                            <textarea name="link" class="form-control" rows="5" required>{{ old('link', $informasi_kontak->link) }}</textarea>
                        </div>

                        <!-- Icon -->
                        <div class="mb-3" hidden>
                            <label for="icon">Script Icon</label>
                            <input type="text" name="icon" class="form-control" required
                            value="-">
                        </div>

                        <!--deskripsi -->
                        <div class="mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="3" required>{{ old('deskripsi', $informasi_kontak->deskripsi) }}</textarea>
                        </div>


                        <div class="col-12 d-flex justify-content-md-end">
                            <button type="submit" class="btn btn-warning font-weight-medium rounded-pill px-4">
                                <div class="d-flex align-items-center">
                                    <i class="ri-save-line me-2"></i> Update
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
