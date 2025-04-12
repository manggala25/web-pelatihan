@extends('backend.layouts.app')

@section('content')
    <div class="row">
    <div class="col-12">
    <div class="card">
      <div class="card-header bg-info">
      <h4 class="card-title text-white">
      Form Edit Informasi Pendaftaran
      </h4>
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

      <form action="{{ route('admin.informasipendaftaran.update', $informasipendaftaran->id) }}" method="POST">
      @csrf
      @method('PATCH')

      <div class="mb-3">
      <label for="content">Isi Informasi:</label>
      <textarea class="summernote" name="content">{{ old('content', $informasipendaftaran->content) }}</textarea>
      </div>

      <div class="col-12 d-flex justify-content-md-end">
      <button type="submit" class="btn btn-info font-weight-medium rounded-pill px-4">
        <div class="d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="feather feather-send feather-sm fill-white me-2">
        <line x1="22" y1="2" x2="11" y2="13"></line>
        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
        </svg>
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