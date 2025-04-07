@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h4 class="card-title text-white">Form Edit Section Bentuk Pelatihan</h4>
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

                    <form action="{{ route('admin.section-bentuk-pelatihan.update', $sectionbentukpelatihan->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        {{-- Title Top --}}
                        <div class="mb-3">
                            <label for="top_title">Judul Atas</label>
                            <input type="text" name="top_title" class="form-control" required
                                value="{{ old('top_title', $sectionbentukpelatihan->top_title) }}" />
                        </div>

                        {{-- Heading --}}
                        <div class="mb-3">
                            <label for="heading">Heading</label>
                            <input type="text" name="heading" class="form-control" required
                                value="{{ old('heading', $sectionbentukpelatihan->heading) }}" />
                        </div>

                        {{-- Deskripsi --}}
                        <div class="mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" rows="3"
                                name="deskripsi">{{ old('deskripsi', $sectionbentukpelatihan->deskripsi) }}</textarea>
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

    {{-- Inisialisasi Summernote --}}
    <script>
        $(document).ready(function () {
            $('.summernote').summernote({
                height: 300
            });
        });
    </script>
@endsection