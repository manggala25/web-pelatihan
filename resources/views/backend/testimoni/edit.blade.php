@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h4 class="card-title text-white">Form Edit Testimoni</h4>
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

                    <form action="{{ route('admin.testimoni.update', $testimoni->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label for="nama_pic">Nama PIC</label>
                            <input type="text" name="nama_pic" class="form-control" required
                                value="{{ old('nama_pic', $testimoni->nama_pic) }}" />
                        </div>

                        <div class="mb-3">
                            <label for="okupasi">Jabatan/ Okupasi</label>
                            <input type="text" name="okupasi" class="form-control" required
                                value="{{ old('okupasi', $testimoni->okupasi) }}" />
                        </div>

                        <div class="mb-3">
                            <label for="nama_lembaga">Nama Lembaga</label>
                            <input type="text" name="nama_lembaga" class="form-control" required
                                value="{{ old('nama_lembaga', $testimoni->nama_lembaga) }}" />
                        </div>

                        <div class="mb-3">
                            <label for="image">Upload Gambar</label>
                            <input type="file" name="image" class="form-control" id="image" accept="image/*">
                            @if($testimoni->image)
                                <img id="previewImage" src="{{ asset('storage/' . $testimoni->image) }}" class="img-fluid mt-2"
                                    style="max-width: 300px;" />
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select name="status" class="form-select" required>
                                <option value="aktif" {{ $testimoni->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="nonaktif" {{ $testimoni->status == 'nonaktif' ? 'selected' : '' }}>Nonaktif
                                </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="content">Isi Testimoni</label>
                            <textarea class="form-control" rows="3" name="content">{{ old('content', $testimoni->content) }}</textarea>
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
        document.getElementById('image').addEventListener('change', function (event) {
            let reader = new FileReader();
            reader.onload = function () {
                document.getElementById('previewImage').src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
@endsection