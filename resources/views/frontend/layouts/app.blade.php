<!DOCTYPE html>
<html lang="en">

<x-head />

<body>
  <x-preloader />

  <div class="page-wrapper">
    {{-- Navbar --}}
    <x-navbar />

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    <x-footer />
  </div><!-- /.page-wrapper -->

  {{-- sidebar --}}
  {{-- <x-sidebar /> --}}

  <x-script />
</body>

</html>