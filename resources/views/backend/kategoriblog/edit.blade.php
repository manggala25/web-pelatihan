@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h4 class="card-title text-white">Form Edit Kategori Blog</h4>
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

                    <form action="{{ route('admin.kategoriblog.update', $kategoriblog->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control" required
                                value="{{ old('nama_kategori', $kategoriblog->nama_kategori) }}" />
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