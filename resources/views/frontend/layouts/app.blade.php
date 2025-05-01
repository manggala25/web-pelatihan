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

  <x-script />
</body>

</html>