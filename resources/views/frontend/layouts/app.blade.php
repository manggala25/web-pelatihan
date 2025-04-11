<!DOCTYPE html>
<html lang="en">

<x-head />

<body>
  {{-- <x-preloader /> --}}

  <div class="page-wrapper">
    {{-- Navbar --}}
    <x-navbar :kontak="$kontak" />

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    <x-footer :kontak="$kontak" />
  </div><!-- /.page-wrapper -->

  {{-- sidebar --}}
  {{-- <x-sidebar /> --}}

  <x-script />
</body>

</html>