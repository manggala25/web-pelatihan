@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h4 class="card-title text-white">Form Edit Target Pelatihan</h4>
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

                    <form action="{{ route('admin.target-pelatihan.update', $targetpelatihan->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        {{-- Title Top --}}
                        <div class="mb-3">
                            <label for="top_title">Judul Atas</label>
                            <input type="text" name="top_title" class="form-control" required
                                value="{{ old('top_title', $targetpelatihan->top_title) }}" />
                        </div>

                        {{-- Heading --}}
                        <div class="mb-3">
                            <label for="heading">Heading</label>
                            <input type="text" name="heading" class="form-control" required
                                value="{{ old('heading', $targetpelatihan->heading) }}" />
                        </div>

                        {{-- Upload Gambar Depan --}}
                        <div class="mb-3">
                            <label for="image_front">Upload Gambar Depan (416x410)</label>
                            <input type="file" name="image_front" class="form-control" id="image_front" accept="image/*">
                            <div class="mt-2">
                                @if ($targetpelatihan->image_front)
                                    <img id="gambardepan" src="{{ asset('storage/' . $targetpelatihan->image_front) }}"
                                        class="img-fluid rounded" style="max-width: 300px;">
                                @else
                                    <p class="text-muted">Belum ada gambar</p>
                                @endif
                            </div>
                        </div>

                        {{-- Upload Gambar Belakang --}}
                        <div class="mb-3">
                            <label for="image_back">Upload Gambar Belakang (526x498)</label>
                            <input type="file" name="image_back" class="form-control" id="image_back" accept="image/*">
                            <div class="mt-2">
                                @if ($targetpelatihan->image_back)
                                    <img id="gambarbelakang" src="{{ asset('storage/' . $targetpelatihan->image_back) }}"
                                        class="img-fluid rounded" style="max-width: 300px;">
                                @else
                                    <p class="text-muted">Belum ada gambar</p>
                                @endif
                            </div>
                        </div>

                        {{-- content dengan Summernote --}}
                        <div class="mb-3">
                            <label for="content">Deskripsi</label>
                            <textarea class="summernote"
                                name="content">{{ old('content', $targetpelatihan->content) }}</textarea>
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
        document.getElementById('image_front').addEventListener('change', function (event) {
            let reader = new FileReader();
            reader.onload = function () {
                document.getElementById('gambardepan').src = reader.result;
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
    <script>
        document.getElementById('image_back').addEventListener('change', function (event) {
            let reader = new FileReader();
            reader.onload = function () {
                document.getElementById('gambarbelakang').src = reader.result;
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