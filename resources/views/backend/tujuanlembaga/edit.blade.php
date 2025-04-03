@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h4 class="card-title text-white">Form Edit Tujuan Lembaga</h4>
                </div>
                <div class="card-body">

                    {{-- Tampilkan Error jika ada --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.tujuanlembaga.update', $tujuanlembaga->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        {{-- Title Top --}}
                        <div class="mb-3">
                            <label for="title_top">Judul Atas</label>
                            <input type="text" name="title_top" class="form-control" required
                                value="{{ old('title_top', $tujuanlembaga->title_top) }}" />
                        </div>

                        {{-- Heading --}}
                        <div class="mb-3">
                            <label for="heading">Heading</label>
                            <input type="text" name="heading" class="form-control" required
                                value="{{ old('heading', $tujuanlembaga->heading) }}" />
                        </div>

                        {{-- tujuan lemabaga dengan Summernote --}}
                        <div class="mb-3">
                            <label for="deskripsi">Tujuan Lembaga</label>
                            <textarea class="summernote" name="deskripsi">{{ old('deskripsi', $tujuanlembaga->deskripsi) }}</textarea>
                        </div>

                        {{-- Tombol Submit --}}
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