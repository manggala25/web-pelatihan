@props(['asset'])

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puspekom</title>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Ambil path dari URL
            var path = window.location.pathname;
            // Ambil nama file dari path
            var pageName = path.split('/').pop().split('.')[0]; // Mengambil nama file tanpa ekstensi

            // Mengganti simbol '-' dengan spasi dan mengkapitalisasi setiap kata
            var title = pageName.replace(/-/g, ' ') // Mengganti '-' dengan spasi
                .split(' ') // Memisahkan kata
                .map(word => word.charAt(0).toUpperCase() + word.slice(1)) // Mengkapitalisasi setiap kata
                .join(' '); // Menggabungkan kembali menjadi string

            // Tambahkan awalan "PUSPEKOM ||" pada judul
            document.title = "PUSPEKOM || " + title;
        });
    </script>
    <!-- favicons Icons -->
    {{-- Ambil dari logo database --}}
    @if(!empty($asset->logo_reguler))
        <link rel="shortcut icon" href="{{ asset('storage/' . $asset->logo_reguler) }}" type="image/x-icon">
    @endif


    <meta name="description" content="Puspekom">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300;400;500;600;700;800;900&family=Water+Brush&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('template/frontend/assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('template/frontend/assets/vendors/bootstrap-select/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/frontend/assets/vendors/jquery-ui/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('template/frontend/assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/frontend/assets/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/frontend/assets/vendors/noile-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/frontend/assets/vendors/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/frontend/assets/vendors/jarallax/jarallax.css') }}">
    <link rel="stylesheet"
        href="{{ asset('template/frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template/frontend/assets/vendors/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/frontend/assets/vendors/nouislider/nouislider.pips.css') }}">
    <link rel="stylesheet" href="{{ asset('template/frontend/assets/vendors/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('template/frontend/assets/vendors/swiper/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/frontend/assets/vendors/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('template/frontend/assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}">

    <!-- Template Styles -->
    <link rel="stylesheet" href="{{ asset('template/frontend/assets/css/noile.css') }}">

    <!-- DataTables Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <!-- Tom Select CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    
    <!-- Tom Select JS -->
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>



</head>