@extends('backend.layouts.app') <!-- Memanggil layout utama -->

@section('content')
    <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <h4 class="card-title mb-3 pb-3 border-bottom">Form Tambah Data Blog</h4>
    <form>
    <div class="row">
    <div class="mb-3">
    <label for="Judul Blog">Judul Blog</label>
    <input type="text" class="form-control" placeholder="Masukan Judul Blog" />
    </div>

    <div class="mb-3">
    <label for="Slug">Slug</label>
    <input type="text" class="form-control" placeholder="Masukan Slug" />
    </div>

    <div class="mb-3">
    <label for="Kategori">Kategori</label>
    <input type="text" class="form-control" placeholder="Masukan Kategori" />
    </div>

    <div class="form-group mb-4">
    <label class="mr-sm-2" for="inlineFormCustomSelect">Status</label>
    <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
    <option selected>Pilih Status...</option>
    <option value="1">Draft</option>
    <option value="2">Publish</option>
    <option value="3">Archive</option>
    </select>
    </div>

    <form class="mb-3">
      <label for="Thumbnail">Upload Thumbnail</label>
    <input class="form-control" type="file" id="formFile">
    </form>

    <form class="mt-3" method="post">
      <label for="Isi Konten"></label>
      <textarea id="mymce" name="area"></textarea>
    </form>

    <div class="col-12">
    <div class="d-md-flex align-items-center mt-3">
    <div class="ms-auto mt-3 mt-md-0">
    <button type="submit" class="
    btn btn-info
    font-weight-medium
    rounded-pill
    px-4
    ">
    <div class="d-flex align-items-center">
    <i data-feather="send" class="feather-sm fill-white me-2"></i>
    Submit
    </div>
    </button>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
@endsection