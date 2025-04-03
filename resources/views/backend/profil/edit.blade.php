@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h4 class="card-title text-white">Form Edit Profil</h4>
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

                    <form action="{{ route('admin.profil.update', $profil->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        {{-- Title Top --}}
                        <div class="mb-3">
                            <label for="title_top">Judul Atas</label>
                            <input type="text" name="title_top" class="form-control" required
                                value="{{ old('title_top', $profil->title_top) }}" />
                        </div>

                        {{-- Heading --}}
                        <div class="mb-3">
                            <label for="heading">Heading</label>
                            <input type="text" name="heading" class="form-control" required
                                value="{{ old('heading', $profil->heading) }}" />
                        </div>

                        {{-- Upload Gambar Profil --}}
                        <div class="mb-3">
                            <label for="img_profil">Upload Gambar Profil (450x470)</label>
                            <input type="file" name="img_profil" class="form-control" id="img_profil" accept="image/*">
                            <div class="mt-2">
                                @if ($profil->img_profil)
                                    <img id="previewImgProfil" src="{{ asset('storage/' . $profil->img_profil) }}"
                                        class="img-fluid rounded" style="max-width: 300px;">
                                @else
                                    <p class="text-muted">Belum ada gambar profil</p>
                                @endif
                            </div>
                        </div>

                        {{-- Deskripsi dengan Summernote --}}
                        <div class="mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="summernote"
                                name="deskripsi">{{ old('deskripsi', $profil->deskripsi) }}</textarea>
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

    {{-- Preview Gambar Profil --}}
    <script>
        document.getElementById('img_profil').addEventListener('change', function (event) {
            let reader = new FileReader();
            reader.onload = function () {
                document.getElementById('previewImgProfil').src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        });

        // Inisialisasi Summernote
        $(document).ready(function () {
            $('.summernote').summernote({
                height: 300
            });
        });
    </script>
@endsection