@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h4 class="card-title text-white">Form Edit Hero Section</h4>
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

                    <form action="{{ route('admin.hero.update', $hero->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        {{-- Title Top --}}
                        <div class="mb-3">
                            <label for="top_title">Judul Atas</label>
                            <input type="text" name="top_title" class="form-control" required
                                value="{{ old('top_title', $hero->top_title) }}" />
                        </div>

                        {{-- Heading --}}
                        <div class="mb-3">
                            <label for="heading">Heading</label>
                            <input type="text" name="heading" class="form-control" required
                                value="{{ old('heading', $hero->heading) }}" />
                        </div>

                        {{-- Upload Gambar hero --}}
                        <div class="mb-3">
                            <label for="background">Upload Backgroun</label>
                            <input type="file" name="background" class="form-control" id="background" accept="image/*">
                            <div class="mt-2">
                                @if ($hero->background)
                                    <img id="previewImghero" src="{{ asset('storage/' . $hero->background) }}"
                                        class="img-fluid rounded" style="max-width: 300px;">
                                @else
                                    <p class="text-muted">Belum ada gambar hero</p>
                                @endif
                            </div>
                        </div>

                        {{-- paragraf dengan Summernote --}}
                        <div class="mb-3">
                            <label for="paragraf">Paragraph</label>
                            <textarea class="form-control"
                                name="paragraf">{{ old('paragraf', $hero->paragraf) }}</textarea>
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

    {{-- Preview Gambar hero --}}
    <script>
        document.getElementById('background').addEventListener('change', function (event) {
            let reader = new FileReader();
            reader.onload = function () {
                document.getElementById('previewImghero').src = reader.result;
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