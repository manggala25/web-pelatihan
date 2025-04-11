@extends('backend.layouts.app')

@section('content')
  <div class="row">
  <div class="col-12">
  <div class="card">
    <div class="card-header bg-warning">
    <h4 class="card-title text-white">Edit Section Homepage</h4>
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

    <form action="{{ route('admin.section.update', $section->id) }}" method="POST" enctype="multipart/form-data"
    id="sectionForm">
    @csrf
    @method('PATCH')

    {{-- Jenis Layout --}}
    <div class="mb-3">
    <label for="layout_type">Jenis Layout : <span class="text-danger">*</span></label>
    <select name="layout_type" class="form-select" id="edit_layout_type" required>
    <option value="">Pilih Layout</option>
    <option value="1" {{ $section->layout_type == 1 ? 'selected' : '' }}>Layout 1</option>
    <option value="2" {{ $section->layout_type == 2 ? 'selected' : '' }}>Layout 2</option>
    <option value="3" {{ $section->layout_type == 3 ? 'selected' : '' }}>Layout 3</option>
    </select>
    </div>
    <div id="layout_preview" class="mt-3">
    <img id="layout_image" src="" alt="Preview Layout" style="display: none; max-width: 30%; height: auto;" />
    </div>

    {{-- Preview Layout --}}
    <div id="edit_layout_preview" class="mt-3">
    <img id="edit_layout_image" src="" alt="Preview Layout"
    style="display: none; max-width: 30%; height: auto;" />
    </div>

    {{-- Informasi Section --}}
    <div class="row mt-4">
    <div class="col-md-6">
    <div class="mb-3">
    <label for="title">Nama Section : <span class="text-danger">*</span></label>
    <input type="text" name="title" class="form-control" value="{{ $section->title }}" required />
    </div>
    </div>
    <div class="col-md-6">
    <div class="mb-3">
    <label for="heading">Heading : <span class="text-danger">*</span></label>
    <input type="text" name="heading" class="form-control" value="{{ $section->heading }}" required />
    </div>
    </div>
    </div>

    {{-- Urutan Section --}}
    <div class="mb-3 mt-4">
    <label for="order">Urutan Section : <span class="text-danger">*</span></label>
    <select name="order" class="form-select" required>
    <option value="first">Letakan Paling Awal</option>
    @foreach($allSections as $sec)
    <option value="{{ $sec->id }}" {{ $sec->id == $section->order ? 'selected' : '' }}>Setelah {{ $sec->title }}
    </option>
    @endforeach
    <option value="last" {{ $section->order == 'last' ? 'selected' : '' }}>Letakan Paling Akhir</option>
    </select>
    </div>

    {{-- Konten --}}
    <div class="mb-3">
    <label for="content">Isi Konten : <span class="text-danger">*</span></label>
    <textarea class="summernote form-control" name="content" required>{{ $section->content }}</textarea>
    </div>

    {{-- Pilihan Media --}}
    <div class="mb-3">
    <label class="form-label">Pilih Salah Satu Jenis Media</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="media_type" id="editMediaImageUpload"
    value="image_upload" {{ $section->image ? 'checked' : '' }}>
    <label class="form-check-label" for="editMediaImageUpload">Upload Gambar</label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="media_type" id="editMediaImageUrl" value="image_url" {{ $section->image_url ? 'checked' : '' }}>
    <label class="form-check-label" for="editMediaImageUrl">URL Gambar</label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="media_type" id="editMediaVideoUrl" value="video_url" {{ $section->video_url ? 'checked' : '' }}>
    <label class="form-check-label" for="editMediaVideoUrl">URL Video YouTube</label>
    </div>
    </div>

    {{-- Upload Image --}}
    <div id="editImageUploadSection" class="mb-3 media-section" style="display: none;">
    <label for="editImage" class="form-label">Upload Gambar</label>
    <input type="file" class="form-control" id="editImage" name="image">
    @if ($section->image)
    <img src="{{ asset('storage/' . $section->image) }}" class="img-fluid mt-2" width="150" />
  @endif
    </div>

    {{-- Image URL --}}
    <div id="editImageUrlSection" class="mb-3 media-section" style="display: none;">
    <label for="editImageUrl" class="form-label">URL Gambar</label>
    <input type="url" class="form-control" id="editImageUrl" name="image_url" value="{{ $section->image_url }}">
    </div>

    {{-- Video URL --}}
    <div id="editVideoUrlSection" class="mb-3 media-section" style="display: none;">
    <label for="editVideoUrl" class="form-label">URL Video YouTube</label>
    <input type="url" class="form-control" id="editVideoUrl" name="video_url" value="{{ $section->video_url }}">
    </div>

    <div class="mt-4 text-end">
    <button type="submit" class="btn btn-warning font-weight-medium rounded-pill px-4">
    Update
    </button>
    </div>

    </form>
    </div>
  </div>
  </div>
  </div>
@endsection
