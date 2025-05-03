<!DOCTYPE html>
<html lang="en">

<x-head :asset="$asset"/>


<body>
  {{-- <x-preloader /> --}}

  <div class="page-wrapper">
    {{-- Navbar --}}
    <x-navbar :kontak="$kontak" :asset="$asset" />

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    <x-footer :kontak="$kontak" :asset="$asset" />
  </div><!-- /.page-wrapper -->

  {{-- sidebar --}}
  {{-- <x-sidebar /> --}}

  <!-- WhatsApp Button -->
  <a id="wa-button" href="@if ($kontak->isNotEmpty())
    @foreach ($kontak as $item)
        @if ($item->nama_kontak === 'WhatsApp')
            {{ $item->link }}
        @endif
    @endforeach
  @else
    {{ route('kontak') }}
  @endif" target="_blank" class="wa-btn" data-bs-toggle="tooltip"
    data-bs-placement="left" title="Hubungi Kami">
    <img src="https://img.icons8.com/?size=60&id=16466&format=png&color=ffffff" alt="WhatsApp" />
  </a>

  <x-script />
</body>

</html>