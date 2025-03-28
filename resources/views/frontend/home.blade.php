@extends('frontend.layouts.app') <!-- Memanggil layout utama -->

@section('content')
    <!-- Main Slider Start -->
    <section class="main-slider">
    <div class="main-slider__carousel noile-owl__carousel owl-carousel owl-theme"
    data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"], "margin": 0, "dots": true, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false, "navSpeed": 3000}'>

    {{-- Slide One --}}
    <div class="main-slider__slide main-slider__slide-one item">
    <div class="main-slider__bg" style="background-image: url('https://img.freepik.com/free-photo/idyllic-shot-huge-mountain-covered-vegetation-with-body-water-its-base_181624-21444.jpg?t=st=1742673839~exp=1742677439~hmac=50973426614eeffb9c55dd7710467fb54712cca4844343f44877a7fdffe0bdda&w=1380')">
    <div class="main-slider__vartical-line-wrap slide-title">

    <span class="main-slider__vartical-text slide-title__vartical-text">Pelatihan Dinas Pemerintahan</span>
    <div class="main-slider__vartical-line main-slider__vartical-line--one"></div>
    <div class="main-slider__vartical-line main-slider__vartical-line--two"></div>
    <div class="main-slider__vartical-line main-slider__vartical-line--three"></div>
    </div><!-- /.main-slider__vartical-line-wrap -->
    </div> <!-- /.Slide One BG -->
    <div class="main-slider__container container">
    <div class="main-slider__circle"></div><!-- /.main-slider__circle -->
    <div class="main-slider__content slide-title">
    {{-- Judul --}}
    <h1 class="main-slider__title slide-title__heading">Pelatihan Bersama Dinas Kehutanan.</h1>
    <div class="main-slider__desc-wrap slide-title__desc-wrap">
    <span class="main-slider__arrow icon-arrow-right-2"></span>
    {{-- Paragraf --}}
    <p class="main-slider__desc">Bimtek Tata Ruang</p>
    </div>
    <div class="main-slider__btn-box slide-title__btn-box">
    <a href="about.html" class="main-slider__btn noile-btn">Free consultation +</a>
    </div>
    </div>
    <a href='#' class="main-slider__circle-text">
    <div class="main-slider__curved-circle curved-circle">
    <!-- curved-circle start-->
    <div class="main-slider__curved-circle--item curved-circle--item" data-circle-text-options='{
     "radius": 92,
     "forceWidth": true,
     "forceHeight": true}'>
    </div>
    </div><!-- curved-circle end-->
    </a><!-- /.main-slider__circle-text -->
    </div>
    </div>

    {{-- Slide Two --}}
    <div class="main-slider__slide main-slider__slide-one item">
    <div class="main-slider__bg" style="background-image: url('https://img.freepik.com/free-photo/idyllic-shot-huge-mountain-covered-vegetation-with-body-water-its-base_181624-21444.jpg?t=st=1742673839~exp=1742677439~hmac=50973426614eeffb9c55dd7710467fb54712cca4844343f44877a7fdffe0bdda&w=1380')">
    <div class="main-slider__vartical-line-wrap slide-title">

    <span class="main-slider__vartical-text slide-title__vartical-text">Pelatihan Dinas Pemerintahan</span>
    <div class="main-slider__vartical-line main-slider__vartical-line--one"></div>
    <div class="main-slider__vartical-line main-slider__vartical-line--two"></div>
    <div class="main-slider__vartical-line main-slider__vartical-line--three"></div>
    </div><!-- /.main-slider__vartical-line-wrap -->
    </div> <!-- /.Slide One BG -->
    <div class="main-slider__container container">
    <div class="main-slider__circle"></div><!-- /.main-slider__circle -->
    <div class="main-slider__content slide-title">
    {{-- Judul --}}
    <h1 class="main-slider__title slide-title__heading">Pelatihan Bersama Dinas Kehutanan.</h1>
    <div class="main-slider__desc-wrap slide-title__desc-wrap">
    <span class="main-slider__arrow icon-arrow-right-2"></span>
    {{-- Paragraf --}}
    <p class="main-slider__desc">Bimtek Tata Ruang</p>
    </div>
    <div class="main-slider__btn-box slide-title__btn-box">
    <a href="about.html" class="main-slider__btn noile-btn">Free consultation +</a>
    </div>
    </div>
    <a href='#' class="main-slider__circle-text">
    <div class="main-slider__curved-circle curved-circle">
    <!-- curved-circle start-->
    <div class="main-slider__curved-circle--item curved-circle--item" data-circle-text-options='{
     "radius": 92,
     "forceWidth": true,
     "forceHeight": true}'>
    </div>
    </div><!-- curved-circle end-->
    </a><!-- /.main-slider__circle-text -->
    </div>
    </div>



    </div>
    </section>
    <!-- Main Slider End -->

    <!-- Bentuk Pelatihan Start -->
    <section class="bentuk-pelatihan py-5 my-5">
        <div class="container">
            <div class="row mb-3 text-center justify-content-md-center">
                <div class="col-lg-8">
                    <div class="sec-title__top-wrap justify-content-md-center">
                        <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
                        <p class="sec-title__top">Bentuk Pelatihan</p>
                    </div>
                    <h2 class="about-one__heading sec-title__heading">Kami Adalah Lembaga Pelatihan  Nasional </h2>
                    <p class="about-one__desc service-one__bottom-descs">
                        Kami memiliki beberapa bentuk pelatihan, yang menyelenggarakan keahlian seperti:
                    </p>
                </div>
            </div>
            <div class="row gx-4 gy-4 gy-xl-0">
                <div href="services.html"
                    class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 service-two__col service-two__col--two wow animated fadeInUp"
                    data-wow-delay="0.3s" data-wow-duration="1500ms">
                    <div class="service-two__item">
                        <div class="service-two__icon-box">
                            <img class="service-two__icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD9klEQVR4nO2dTWgdVRiGn2taa2tLLRKoBEITUForFCyBQqWIRSkKjQuzsmRnXfWHoEltN8VFfzbaPyguuihUkCiKuCgoOCiiotCNWgQRCd2EgNIWJI1iRwZOIFzu5J7JnTvnm3PfB77d3DNzzjM/Z86c+x0QQgghhBBCCCGEEKL3GAbGgTeAI8AosGGZ7fcDUxHGBPAMAXkO+A5IW8Q94Aow0OJ3TwB3cn6XRhAXqhbxAHDa8+D+BPa2KOOogYZLuxi7qxTiK2Mx5oFdTWWsBv4w0HBpl+LNKm9T91dwgDPAQ01lnTDQcGmX4mRVQvKeGT6R3aaWss1Aw6V1FjLc4UH+0FReA/gU+KLG8VdIIeMdCsludWuJiySkkKkSLuUh4iIJKeRICUI2ExdJSCGjHcr4G+gjLpKQQta7d4qVCvmY+EhCCsENh6xUyAvERxJayIAbDikqI+vexkgSWghubKrIretn4BHiJLEgBDc2NeN5ZWwkXhIrQnBjU9lwyI9N41tZb+qTSJ8ZpoU0y9kCPOaG53uFxKqQXiWREFtIiDGCC2m4j1RngfeBaSNxBXiRHhMy3OEHqiriGD0iJOtBzRpo8LRNzFf83hNMyJcGGjv1jKeIXMhOA42cesZd4GEiFzJpoKFTj/gPOEi1BBFyrsRGy3pE73UhTgEjVE8QIZdKFLKduEgkxBYSYgwJMYaEGENCjCEhxpAQY0iIMSTEGBJiDAkxhoQYQ0KMISHGkBBjSIgxJMQY0QmZKHGy3Ifub3NVTtCby6nnL24i4WSbzEjmhEwbmByRdjl+LVuKhGArGY2E0LGQbO6xhGAnDkkIZuJ7YE0VQn7PmbR2tcBD/WAJk+TSnPisS5PyfOO8S9iTJWujCiFZD6kV/QWElEGaE88SKRJiDAkxhoQYQ0KMISHGkBBjSIgxJMQYEmIMy0JGLORfrxqLQvpcHuGFNgN7HwGPEhnWhGwBvi4w2jobKA9KTwgZd8kBig6B33cjsOuIAAtC+l3awLTDuAk8Tc0JLeSlAolv/vXYZsE9f2qbijCUkLXAZc8FZLJcwmPADuAnT3lfAYPUkBBCVgHfeDbs502Lj2UJOd/xFDlbRykhhIx55sY67LLc5SV8vuVRzkVqxrs5FbmWs/3GZSr/uOc+32rTiDeAJz3K2QR80Kas69SMA55rSi3ltxbbzxX44L9vmRRMZ4AHC9bhVeB2TplZJqFascqdRUsr8W2b5YuedxmuF7f/B3ilwD4bbq7u0n1my+zt6aAegy0mR9+s65t8n7uvv+3ONp8zdMh1L48DW1ewzwbwsls38bWSXuoabmGa7Kp4veLsc0IIIYQQQgghhBBCEAP/A/NhchNsmUQmAAAAAElFTkSuQmCC"
                                alt="training">
                        </div><!-- /.service-two__icon-box -->
                        <h3 class="service-two__title">BIMTEK (Bimbingan Teknis)</h3>
                    </div><!-- /.service-two__item -->
                </div>
                <div href="services.html"
                    class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 service-two__col service-two__col--two wow animated fadeInUp"
                    data-wow-delay="0.3s" data-wow-duration="1500ms">
                    <div class="service-two__item">
                        <div class="service-two__icon-box">
                            <img class="service-two__icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD9klEQVR4nO2dTWgdVRiGn2taa2tLLRKoBEITUForFCyBQqWIRSkKjQuzsmRnXfWHoEltN8VFfzbaPyguuihUkCiKuCgoOCiiotCNWgQRCd2EgNIWJI1iRwZOIFzu5J7JnTvnm3PfB77d3DNzzjM/Z86c+x0QQgghhBBCCCGEEKL3GAbGgTeAI8AosGGZ7fcDUxHGBPAMAXkO+A5IW8Q94Aow0OJ3TwB3cn6XRhAXqhbxAHDa8+D+BPa2KOOogYZLuxi7qxTiK2Mx5oFdTWWsBv4w0HBpl+LNKm9T91dwgDPAQ01lnTDQcGmX4mRVQvKeGT6R3aaWss1Aw6V1FjLc4UH+0FReA/gU+KLG8VdIIeMdCsludWuJiySkkKkSLuUh4iIJKeRICUI2ExdJSCGjHcr4G+gjLpKQQta7d4qVCvmY+EhCCsENh6xUyAvERxJayIAbDikqI+vexkgSWghubKrIretn4BHiJLEgBDc2NeN5ZWwkXhIrQnBjU9lwyI9N41tZb+qTSJ8ZpoU0y9kCPOaG53uFxKqQXiWREFtIiDGCC2m4j1RngfeBaSNxBXiRHhMy3OEHqiriGD0iJOtBzRpo8LRNzFf83hNMyJcGGjv1jKeIXMhOA42cesZd4GEiFzJpoKFTj/gPOEi1BBFyrsRGy3pE73UhTgEjVE8QIZdKFLKduEgkxBYSYgwJMYaEGENCjCEhxpAQY0iIMSTEGBJiDAkxhoQYQ0KMISHGkBBjSIgxJMQY0QmZKHGy3Ifub3NVTtCby6nnL24i4WSbzEjmhEwbmByRdjl+LVuKhGArGY2E0LGQbO6xhGAnDkkIZuJ7YE0VQn7PmbR2tcBD/WAJk+TSnPisS5PyfOO8S9iTJWujCiFZD6kV/QWElEGaE88SKRJiDAkxhoQYQ0KMISHGkBBjSIgxJMQYEmIMy0JGLORfrxqLQvpcHuGFNgN7HwGPEhnWhGwBvi4w2jobKA9KTwgZd8kBig6B33cjsOuIAAtC+l3awLTDuAk8Tc0JLeSlAolv/vXYZsE9f2qbijCUkLXAZc8FZLJcwmPADuAnT3lfAYPUkBBCVgHfeDbs502Lj2UJOd/xFDlbRykhhIx55sY67LLc5SV8vuVRzkVqxrs5FbmWs/3GZSr/uOc+32rTiDeAJz3K2QR80Kas69SMA55rSi3ltxbbzxX44L9vmRRMZ4AHC9bhVeB2TplZJqFascqdRUsr8W2b5YuedxmuF7f/B3ilwD4bbq7u0n1my+zt6aAegy0mR9+s65t8n7uvv+3ONp8zdMh1L48DW1ewzwbwsls38bWSXuoabmGa7Kp4veLsc0IIIYQQQgghhBBCEAP/A/NhchNsmUQmAAAAAElFTkSuQmCC"
                                alt="training">
                        </div><!-- /.service-two__icon-box -->
                        <h3 class="service-two__title">BIMTEK (Bimbingan Teknis)</h3>
                    </div><!-- /.service-two__item -->
                </div>
                <div href="services.html"
                    class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 service-two__col service-two__col--two wow animated fadeInUp"
                    data-wow-delay="0.3s" data-wow-duration="1500ms">
                    <div class="service-two__item">
                        <div class="service-two__icon-box">
                            <img class="service-two__icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD9klEQVR4nO2dTWgdVRiGn2taa2tLLRKoBEITUForFCyBQqWIRSkKjQuzsmRnXfWHoEltN8VFfzbaPyguuihUkCiKuCgoOCiiotCNWgQRCd2EgNIWJI1iRwZOIFzu5J7JnTvnm3PfB77d3DNzzjM/Z86c+x0QQgghhBBCCCGEEKL3GAbGgTeAI8AosGGZ7fcDUxHGBPAMAXkO+A5IW8Q94Aow0OJ3TwB3cn6XRhAXqhbxAHDa8+D+BPa2KOOogYZLuxi7qxTiK2Mx5oFdTWWsBv4w0HBpl+LNKm9T91dwgDPAQ01lnTDQcGmX4mRVQvKeGT6R3aaWss1Aw6V1FjLc4UH+0FReA/gU+KLG8VdIIeMdCsludWuJiySkkKkSLuUh4iIJKeRICUI2ExdJSCGjHcr4G+gjLpKQQta7d4qVCvmY+EhCCsENh6xUyAvERxJayIAbDikqI+vexkgSWghubKrIretn4BHiJLEgBDc2NeN5ZWwkXhIrQnBjU9lwyI9N41tZb+qTSJ8ZpoU0y9kCPOaG53uFxKqQXiWREFtIiDGCC2m4j1RngfeBaSNxBXiRHhMy3OEHqiriGD0iJOtBzRpo8LRNzFf83hNMyJcGGjv1jKeIXMhOA42cesZd4GEiFzJpoKFTj/gPOEi1BBFyrsRGy3pE73UhTgEjVE8QIZdKFLKduEgkxBYSYgwJMYaEGENCjCEhxpAQY0iIMSTEGBJiDAkxhoQYQ0KMISHGkBBjSIgxJMQY0QmZKHGy3Ifub3NVTtCby6nnL24i4WSbzEjmhEwbmByRdjl+LVuKhGArGY2E0LGQbO6xhGAnDkkIZuJ7YE0VQn7PmbR2tcBD/WAJk+TSnPisS5PyfOO8S9iTJWujCiFZD6kV/QWElEGaE88SKRJiDAkxhoQYQ0KMISHGkBBjSIgxJMQYEmIMy0JGLORfrxqLQvpcHuGFNgN7HwGPEhnWhGwBvi4w2jobKA9KTwgZd8kBig6B33cjsOuIAAtC+l3awLTDuAk8Tc0JLeSlAolv/vXYZsE9f2qbijCUkLXAZc8FZLJcwmPADuAnT3lfAYPUkBBCVgHfeDbs502Lj2UJOd/xFDlbRykhhIx55sY67LLc5SV8vuVRzkVqxrs5FbmWs/3GZSr/uOc+32rTiDeAJz3K2QR80Kas69SMA55rSi3ltxbbzxX44L9vmRRMZ4AHC9bhVeB2TplZJqFascqdRUsr8W2b5YuedxmuF7f/B3ilwD4bbq7u0n1my+zt6aAegy0mR9+s65t8n7uvv+3ONp8zdMh1L48DW1ewzwbwsls38bWSXuoabmGa7Kp4veLsc0IIIYQQQgghhBBCEAP/A/NhchNsmUQmAAAAAElFTkSuQmCC"
                                alt="training">
                        </div><!-- /.service-two__icon-box -->
                        <h3 class="service-two__title">BIMTEK (Bimbingan Teknis)</h3>
                    </div><!-- /.service-two__item -->
                </div>
                <div href="services.html"
                    class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 service-two__col service-two__col--two wow animated fadeInUp"
                    data-wow-delay="0.3s" data-wow-duration="1500ms">
                    <div class="service-two__item">
                        <div class="service-two__icon-box">
                            <img class="service-two__icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD9klEQVR4nO2dTWgdVRiGn2taa2tLLRKoBEITUForFCyBQqWIRSkKjQuzsmRnXfWHoEltN8VFfzbaPyguuihUkCiKuCgoOCiiotCNWgQRCd2EgNIWJI1iRwZOIFzu5J7JnTvnm3PfB77d3DNzzjM/Z86c+x0QQgghhBBCCCGEEKL3GAbGgTeAI8AosGGZ7fcDUxHGBPAMAXkO+A5IW8Q94Aow0OJ3TwB3cn6XRhAXqhbxAHDa8+D+BPa2KOOogYZLuxi7qxTiK2Mx5oFdTWWsBv4w0HBpl+LNKm9T91dwgDPAQ01lnTDQcGmX4mRVQvKeGT6R3aaWss1Aw6V1FjLc4UH+0FReA/gU+KLG8VdIIeMdCsludWuJiySkkKkSLuUh4iIJKeRICUI2ExdJSCGjHcr4G+gjLpKQQta7d4qVCvmY+EhCCsENh6xUyAvERxJayIAbDikqI+vexkgSWghubKrIretn4BHiJLEgBDc2NeN5ZWwkXhIrQnBjU9lwyI9N41tZb+qTSJ8ZpoU0y9kCPOaG53uFxKqQXiWREFtIiDGCC2m4j1RngfeBaSNxBXiRHhMy3OEHqiriGD0iJOtBzRpo8LRNzFf83hNMyJcGGjv1jKeIXMhOA42cesZd4GEiFzJpoKFTj/gPOEi1BBFyrsRGy3pE73UhTgEjVE8QIZdKFLKduEgkxBYSYgwJMYaEGENCjCEhxpAQY0iIMSTEGBJiDAkxhoQYQ0KMISHGkBBjSIgxJMQY0QmZKHGy3Ifub3NVTtCby6nnL24i4WSbzEjmhEwbmByRdjl+LVuKhGArGY2E0LGQbO6xhGAnDkkIZuJ7YE0VQn7PmbR2tcBD/WAJk+TSnPisS5PyfOO8S9iTJWujCiFZD6kV/QWElEGaE88SKRJiDAkxhoQYQ0KMISHGkBBjSIgxJMQYEmIMy0JGLORfrxqLQvpcHuGFNgN7HwGPEhnWhGwBvi4w2jobKA9KTwgZd8kBig6B33cjsOuIAAtC+l3awLTDuAk8Tc0JLeSlAolv/vXYZsE9f2qbijCUkLXAZc8FZLJcwmPADuAnT3lfAYPUkBBCVgHfeDbs502Lj2UJOd/xFDlbRykhhIx55sY67LLc5SV8vuVRzkVqxrs5FbmWs/3GZSr/uOc+32rTiDeAJz3K2QR80Kas69SMA55rSi3ltxbbzxX44L9vmRRMZ4AHC9bhVeB2TplZJqFascqdRUsr8W2b5YuedxmuF7f/B3ilwD4bbq7u0n1my+zt6aAegy0mR9+s65t8n7uvv+3ONp8zdMh1L48DW1ewzwbwsls38bWSXuoabmGa7Kp4veLsc0IIIYQQQgghhBBCEAP/A/NhchNsmUQmAAAAAElFTkSuQmCC"
                                alt="training">
                        </div><!-- /.service-two__icon-box -->
                        <h3 class="service-two__title">BIMTEK (Bimbingan Teknis)</h3>
                    </div><!-- /.service-two__item -->
                </div>
                <div href="services.html"
                    class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 service-two__col service-two__col--two wow animated fadeInUp"
                    data-wow-delay="0.3s" data-wow-duration="1500ms">
                    <div class="service-two__item">
                        <div class="service-two__icon-box">
                            <img class="service-two__icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD9klEQVR4nO2dTWgdVRiGn2taa2tLLRKoBEITUForFCyBQqWIRSkKjQuzsmRnXfWHoEltN8VFfzbaPyguuihUkCiKuCgoOCiiotCNWgQRCd2EgNIWJI1iRwZOIFzu5J7JnTvnm3PfB77d3DNzzjM/Z86c+x0QQgghhBBCCCGEEKL3GAbGgTeAI8AosGGZ7fcDUxHGBPAMAXkO+A5IW8Q94Aow0OJ3TwB3cn6XRhAXqhbxAHDa8+D+BPa2KOOogYZLuxi7qxTiK2Mx5oFdTWWsBv4w0HBpl+LNKm9T91dwgDPAQ01lnTDQcGmX4mRVQvKeGT6R3aaWss1Aw6V1FjLc4UH+0FReA/gU+KLG8VdIIeMdCsludWuJiySkkKkSLuUh4iIJKeRICUI2ExdJSCGjHcr4G+gjLpKQQta7d4qVCvmY+EhCCsENh6xUyAvERxJayIAbDikqI+vexkgSWghubKrIretn4BHiJLEgBDc2NeN5ZWwkXhIrQnBjU9lwyI9N41tZb+qTSJ8ZpoU0y9kCPOaG53uFxKqQXiWREFtIiDGCC2m4j1RngfeBaSNxBXiRHhMy3OEHqiriGD0iJOtBzRpo8LRNzFf83hNMyJcGGjv1jKeIXMhOA42cesZd4GEiFzJpoKFTj/gPOEi1BBFyrsRGy3pE73UhTgEjVE8QIZdKFLKduEgkxBYSYgwJMYaEGENCjCEhxpAQY0iIMSTEGBJiDAkxhoQYQ0KMISHGkBBjSIgxJMQY0QmZKHGy3Ifub3NVTtCby6nnL24i4WSbzEjmhEwbmByRdjl+LVuKhGArGY2E0LGQbO6xhGAnDkkIZuJ7YE0VQn7PmbR2tcBD/WAJk+TSnPisS5PyfOO8S9iTJWujCiFZD6kV/QWElEGaE88SKRJiDAkxhoQYQ0KMISHGkBBjSIgxJMQYEmIMy0JGLORfrxqLQvpcHuGFNgN7HwGPEhnWhGwBvi4w2jobKA9KTwgZd8kBig6B33cjsOuIAAtC+l3awLTDuAk8Tc0JLeSlAolv/vXYZsE9f2qbijCUkLXAZc8FZLJcwmPADuAnT3lfAYPUkBBCVgHfeDbs502Lj2UJOd/xFDlbRykhhIx55sY67LLc5SV8vuVRzkVqxrs5FbmWs/3GZSr/uOc+32rTiDeAJz3K2QR80Kas69SMA55rSi3ltxbbzxX44L9vmRRMZ4AHC9bhVeB2TplZJqFascqdRUsr8W2b5YuedxmuF7f/B3ilwD4bbq7u0n1my+zt6aAegy0mR9+s65t8n7uvv+3ONp8zdMh1L48DW1ewzwbwsls38bWSXuoabmGa7Kp4veLsc0IIIYQQQgghhBBCEAP/A/NhchNsmUQmAAAAAElFTkSuQmCC"
                                alt="training">
                        </div><!-- /.service-two__icon-box -->
                        <h3 class="service-two__title">BIMTEK (Bimbingan Teknis)</h3>
                    </div><!-- /.service-two__item -->
                </div>
                <div href="services.html"
                    class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 service-two__col service-two__col--two wow animated fadeInUp"
                    data-wow-delay="0.3s" data-wow-duration="1500ms">
                    <div class="service-two__item">
                        <div class="service-two__icon-box">
                            <img class="service-two__icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD9klEQVR4nO2dTWgdVRiGn2taa2tLLRKoBEITUForFCyBQqWIRSkKjQuzsmRnXfWHoEltN8VFfzbaPyguuihUkCiKuCgoOCiiotCNWgQRCd2EgNIWJI1iRwZOIFzu5J7JnTvnm3PfB77d3DNzzjM/Z86c+x0QQgghhBBCCCGEEKL3GAbGgTeAI8AosGGZ7fcDUxHGBPAMAXkO+A5IW8Q94Aow0OJ3TwB3cn6XRhAXqhbxAHDa8+D+BPa2KOOogYZLuxi7qxTiK2Mx5oFdTWWsBv4w0HBpl+LNKm9T91dwgDPAQ01lnTDQcGmX4mRVQvKeGT6R3aaWss1Aw6V1FjLc4UH+0FReA/gU+KLG8VdIIeMdCsludWuJiySkkKkSLuUh4iIJKeRICUI2ExdJSCGjHcr4G+gjLpKQQta7d4qVCvmY+EhCCsENh6xUyAvERxJayIAbDikqI+vexkgSWghubKrIretn4BHiJLEgBDc2NeN5ZWwkXhIrQnBjU9lwyI9N41tZb+qTSJ8ZpoU0y9kCPOaG53uFxKqQXiWREFtIiDGCC2m4j1RngfeBaSNxBXiRHhMy3OEHqiriGD0iJOtBzRpo8LRNzFf83hNMyJcGGjv1jKeIXMhOA42cesZd4GEiFzJpoKFTj/gPOEi1BBFyrsRGy3pE73UhTgEjVE8QIZdKFLKduEgkxBYSYgwJMYaEGENCjCEhxpAQY0iIMSTEGBJiDAkxhoQYQ0KMISHGkBBjSIgxJMQY0QmZKHGy3Ifub3NVTtCby6nnL24i4WSbzEjmhEwbmByRdjl+LVuKhGArGY2E0LGQbO6xhGAnDkkIZuJ7YE0VQn7PmbR2tcBD/WAJk+TSnPisS5PyfOO8S9iTJWujCiFZD6kV/QWElEGaE88SKRJiDAkxhoQYQ0KMISHGkBBjSIgxJMQYEmIMy0JGLORfrxqLQvpcHuGFNgN7HwGPEhnWhGwBvi4w2jobKA9KTwgZd8kBig6B33cjsOuIAAtC+l3awLTDuAk8Tc0JLeSlAolv/vXYZsE9f2qbijCUkLXAZc8FZLJcwmPADuAnT3lfAYPUkBBCVgHfeDbs502Lj2UJOd/xFDlbRykhhIx55sY67LLc5SV8vuVRzkVqxrs5FbmWs/3GZSr/uOc+32rTiDeAJz3K2QR80Kas69SMA55rSi3ltxbbzxX44L9vmRRMZ4AHC9bhVeB2TplZJqFascqdRUsr8W2b5YuedxmuF7f/B3ilwD4bbq7u0n1my+zt6aAegy0mR9+s65t8n7uvv+3ONp8zdMh1L48DW1ewzwbwsls38bWSXuoabmGa7Kp4veLsc0IIIYQQQgghhBBCEAP/A/NhchNsmUQmAAAAAElFTkSuQmCC"
                                alt="training">
                        </div><!-- /.service-two__icon-box -->
                        <h3 class="service-two__title">BIMTEK (Bimbingan Teknis)</h3>
                    </div><!-- /.service-two__item -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="service-two__shape-box">
            <svg class="service-two__shape-one" width="476" height="558" viewBox="0 0 476 558" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M365.5 383.5L309.5 457.5L436.555 653.431L537.122 653.089L365.5 383.5Z" />
                <path d="M440 126H327.333L-3.05176e-05 558H111.5L440 126Z" />
                <path d="M538.37 -3L40 652H159.808L663 -3H538.37Z" />
            </svg>
        </div><!-- /.service-two__shape-box -->
    </section>
    <!-- Bentuk Pelatihan End -->

    <!-- Target Peserta Pelatihan Start -->
    <section class="about-two about-two-one">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 order-lg-0 order-1 wow animated fadeInLeft" data-wow-delay="0.1s"
                    data-wow-duration="1500ms">
                    <div class="about-two__img-wrap">
                        <div class="about-two__img-one-box">
                            <div class="about-two__img-one-box-inner">
                                <img src="{{ asset('template/frontend/assets/images/about/about-2-1.jpg') }}" alt="about image" class="about-two__img-one">
                            </div>
                        </div>
                        <div class="about-two__img-two-box">
                            <div class="about-two__img-two-box-inner">
                                <img src="{{ asset('template/frontend/assets/images/about/about-2-2.jpg') }}" alt="about image" class="about-two__img-two">
                                <img src="{{ asset('template/frontend/assets/images/about/about-2-3.png') }}" alt="about image" class="about-two__img-three">
                            </div>
                            <div class="about-two__shape-box about-two__shape-box-two"></div>
                            <div class="about-two__shape-box about-two__shape-box-three"></div>
                            <div class="about-two__shape-box about-two__shape-box-four"></div>
                            <div class="about-two__shape-box about-two__shape-box-five"></div>
                        </div>
                        <div class="about-two__shape-box-wrap">
                            <div class="about-two__shape-box about-two__shape-box-one"></div>
                            <img src="{{ asset('template/frontend/assets/images/shapes/about-shape-2-2.png') }}" alt="about-shape"
                                class="about-two__shape-one">
                            <img src="{{ asset('template/frontend/assets/images/shapes/about-shape-1-2.png') }}" alt="about-shape"
                                class="about-two__shape-two">
                            <img src="{{ asset('template/frontend/assets/images/shapes/about-shape-2-1.png') }}" alt="about-shape"
                                class="about-two__shape-three">
                        </div><!-- /.about-one__shape-box-wrap -->
                    </div><!-- /.about-one__img-box -->
                </div>
                <div class="col-lg-6 order-lg-1 order-0">
                    <div class="about-two__content sec-title">
                        <div class="sec-title__top-wrap">
                            <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
                            <p class="sec-title__top">Target Peserta Pelatihan</p>
                        </div>
                        <h2 class="about-two__heading sec-title__heading">Tingkatkan Keahlian, Maksimalkan Potensi.</h2>
                        <p class="text-white">dirancang khusus untuk profesional, praktisi, dan akademisi yang ingin meningkatkan keterampilan dan memperdalam
                        pemahaman di bidangnya. Target peserta yang dapat mengikuti pelatihan ini antara lain:
                        </p>
                        <div class="about-two__bottom">
                            <ul class="list about-two__list">
                                <li class="about-two__consulting-title mb-1">
                                    <div class="about-two__consulting-text">
                                        <h6 class="about-two__consulting-desc text-white">Aparatur Perangkat SETDA, SKPD/OPD</h6>
                                    </div>
                                </li>
                                <li class="about-two__consulting-title mb-3">
                                    <div class="about-two__consulting-text">
                                        <h6 class="about-two__consulting-desc text-white">Anggota DPRD/SETWAN</h6>
                                    </div>
                                </li>
                                <li class="about-two__consulting-title mb-3">
                                    <div class="about-two__consulting-text">
                                        <h6 class="about-two__consulting-desc text-white">Aparatur Perangkat Kecamatan/Desa</h6>
                                    </div>
                                </li>
                                <li class="about-two__consulting-title mb-3">
                                    <div class="about-two__consulting-text">
                                        <h6 class="about-two__consulting-desc text-white">RSU, RSP, RSUD</h6>
                                    </div>
                                </li>
                                <li class="about-two__consulting-title mb-3">
                                    <div class="about-two__consulting-text">
                                        <h6 class="about-two__consulting-desc text-white">Instansi Lembaga Pemerintah</h6>
                                    </div>
                                </li>
                                <li class="about-two__consulting-title mb-3">
                                    <div class="about-two__consulting-text">
                                        <h6 class="about-two__consulting-desc text-white">Perusahaan/Swasta</h6>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /.about-two__bottom -->
                    </div><!-- /.about-one__content -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Target Peserta Pelatihan End -->

    <!-- Portfolio Kegiatan Start -->
    <section class="case-study-one case-study">
        <div class="container">
            <div class="case-study-one__sec-title sec-title">
                <div class="case-study-one__top-wrap sec-title__top-wrap">
                    <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
                    <p class="sec-title__top">Portofolio Kegiatan</p>
                </div>
                <h2 class="case-study-one__heading sec-title__heading">Kegiatan Pelatihan Terbaru</h2>
            </div><!-- /.portfolio-one__sec-title -->
            <div class="case-study-one__carousel noile-owl__carousel owl-theme owl-carousel" data-owl-options='{
                "items": 4,
                "margin": 24,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": 6000,
                "nav":false,
                "dots":false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "responsive":{
                    "0":{
                        "items":1,
                        "dots":true
                    },
                    "768":{
                        "items": 2
                    },
                    "992":{
                        "items": 3
                    },
                    "1400":{
                        "items": 4
                    }
                }
                }'>

                <div class="case-study-one__carousel-item item">
                    <div class="case-study__item">
                        <div class="case-study__item-img-box">
                            <img src="{{  asset('template/frontend/assets/images/case-study/case-study-1-1.jpg') }}" alt="case-study"
                                class="case-study__item-img">
                            <p class="case-study__item-desc">Bimtek Bidang Desa</p>
                            <h4 class="case-study__item-title">Desa Haurgeulis Bandung</h4>
                        </div>
                        <a href="case-study.html" class="case-study__item-btn">
                            <span class="case-study__item-btn-icon icon-arrow-right-2"></span>
                        </a>
                    </div><!-- /.case-study__item -->
                </div><!-- /.case-study-one__carousel-item-->
                <div class="case-study-one__carousel-item item">
                    <div class="case-study__item">
                        <div class="case-study__item-img-box">
                            <img src="{{  asset('template/frontend/assets/images/case-study/case-study-1-1.jpg') }}" alt="case-study"
                                class="case-study__item-img">
                            <p class="case-study__item-desc">Bimtek Bidang Desa</p>
                            <h4 class="case-study__item-title">Desa Haurgeulis Bandung</h4>
                        </div>
                        <a href="case-study.html" class="case-study__item-btn">
                            <span class="case-study__item-btn-icon icon-arrow-right-2"></span>
                        </a>
                    </div><!-- /.case-study__item -->
                </div><!-- /.case-study-one__carousel-item-->
                <div class="case-study-one__carousel-item item">
                    <div class="case-study__item">
                        <div class="case-study__item-img-box">
                            <img src="{{  asset('template/frontend/assets/images/case-study/case-study-1-1.jpg') }}" alt="case-study"
                                class="case-study__item-img">
                            <p class="case-study__item-desc">Bimtek Bidang Desa</p>
                            <h4 class="case-study__item-title">Desa Haurgeulis Bandung</h4>
                        </div>
                        <a href="case-study.html" class="case-study__item-btn">
                            <span class="case-study__item-btn-icon icon-arrow-right-2"></span>
                        </a>
                    </div><!-- /.case-study__item -->
                </div><!-- /.case-study-one__carousel-item-->
                <div class="case-study-one__carousel-item item">
                    <div class="case-study__item">
                        <div class="case-study__item-img-box">
                            <img src="{{  asset('template/frontend/assets/images/case-study/case-study-1-1.jpg') }}" alt="case-study"
                                class="case-study__item-img">
                            <p class="case-study__item-desc">Bimtek Bidang Desa</p>
                            <h4 class="case-study__item-title">Desa Haurgeulis Bandung</h4>
                        </div>
                        <a href="case-study.html" class="case-study__item-btn">
                            <span class="case-study__item-btn-icon icon-arrow-right-2"></span>
                        </a>
                    </div><!-- /.case-study__item -->
                </div><!-- /.case-study-one__carousel-item-->
                <div class="case-study-one__carousel-item item">
                    <div class="case-study__item">
                        <div class="case-study__item-img-box">
                            <img src="{{  asset('template/frontend/assets/images/case-study/case-study-1-1.jpg') }}" alt="case-study"
                                class="case-study__item-img">
                            <p class="case-study__item-desc">Bimtek Bidang Desa</p>
                            <h4 class="case-study__item-title">Desa Haurgeulis Bandung</h4>
                        </div>
                        <a href="case-study.html" class="case-study__item-btn">
                            <span class="case-study__item-btn-icon icon-arrow-right-2"></span>
                        </a>
                    </div><!-- /.case-study__item -->
                </div><!-- /.case-study-one__carousel-item-->
            </div><!-- /.case-study-one__carousel-->
            <div class="row pt-5 d-flex justify-content-center">
                <div class="col-6 text-center">
                    <a href="#" class="service-one__btn noile-btn">Lihat Portofolio Lainnya +</a>
                </div>
            </div>
        </div><!-- /.container -->
    </section>
    <!-- Portfolio Kegiatan End -->

    <!-- Tentang Kami Start -->
    <section class="solution-one">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-7">
                    <div class="solution-one__content sec-title">
                        <div class="sec-title__top-wrap">
                            <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
                            <p class="sec-title__top">Tentang Kami</p>
                        </div>
                        <h2 class="solution-one__heading sec-title__heading">Profil Pelatihan Kami
                        </h2>
                        <p class="solution-one__service-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos veritatis eligendi vel consectetur vero, eaque necessitatibus dolores. Harum accusantium dolor distinctio quo nam eos ad recusandae porro ipsam iste, architecto reiciendis eligendi tempore animi quas repudiandae molestias vel ipsum dolorem?</p>
                        <a href="#" class="service-one__btn noile-btn">Baca Selengkapnya +</a>
                        <!-- /.olution-one__main-tab-box -->
                    </div><!-- /.solution-one__content -->
                </div>
                <div class="col-xxl-6 col-xl-5 wow animated fadeInRight" data-wow-delay="0.1s" data-wow-duration="1500ms">
                    <div class="solution-one__img-col">
                        <div class="solution-one__img-wrap">
                            <img src="{{ asset('template/frontend/assets/images/solution/solution-1-1.jpg') }}" alt="solution" class="solution-one__img">
                            <div class="solution-one__icon-wrap">
                                <img src="{{ asset('template/frontend/assets/images/solution/solution-icon-1-1.png') }}" alt="solution-icon"
                                    class="solution-one__icon">
                            </div>
                            <div class="solution-one__border-box">
                                <div class="solution-one__border solution-one__border--one"></div>
                                <div class="solution-one__border solution-one__border--two"></div>
                                <div class="solution-one__border solution-one__border--three"></div>
                                <div class="solution-one__border solution-one__border--four"></div>
                                <div class="solution-one__border solution-one__border--five"></div>
                                <div class="solution-one__border solution-one__border--six"></div>
                                <div class="solution-one__border solution-one__border--seven"></div>
                                <div class="solution-one__border solution-one__border--eight"></div>
                                <div class="solution-one__border solution-one__border--nine"></div>
                                <div class="solution-one__border solution-one__border--ten"></div>
                            </div><!-- /.solution-one__border-box -->
                            <div class="solution-one__shape-box">
                                <div class="solution-one__shape solution-one__shape-one"></div>
                                <div class="solution-one__shape solution-one__shape-two"></div>
                                <div class="solution-one__shape solution-one__shape-three"></div>
                                <div class="solution-one__shape solution-one__shape-four"></div>
                                <div class="solution-one__shape solution-one__shape-five"></div>
                                <div class="solution-one__shape solution-one__shape-six"></div>
                                <div class="solution-one__shape solution-one__shape-seven"></div>
                            </div><!-- /.solution-one__shape-box -->
                        </div>
                    </div><!-- /.solution-one__img-wrap -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Tentang Kami End -->

    <!-- Blog One Start -->
    <section class="blog-one blog @@extraClassName">
        <div class="container">
            <div class="blog-one__sec-title sec-title">
                <div class="blog-one__top-wrap sec-title__top-wrap">
                    <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
                    <p class="sec-title__top">Blog</p>
                </div>
                <h2 class="blog-one__heading sec-title__heading">Artikel Terbaru</h2>
            </div><!-- /.blog-one__sec-title -->
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1300ms">
                    <div class="blog__card">
                        <a href="blog-details.html" class="blog__card-img-box">
                            <img src="{{  asset('template/frontend/assets/images/blog/blog-1-1.jpg') }}" alt="blog" class="blog__card-img">
                            <p class="blog__card-category">Business</p><!-- /.blog-one__item-category -->
                        </a><!-- /.blog-one__img-box -->
                        <ul class="blog__card-comment-box">
                            <li class="blog__card-comment-item">
                                <p class="blog__card-comment">Diupload Pada</p>
                            </li>
                            <li class="blog__card-comment-item blog__card-comment-item-divider">
                                <p class="blog__card-comment">:</p>
                            </li>
                            <li class="blog__card-comment-item">
                                <p class="blog__card-comment">22 Aug 2023</p>
                            </li>
                        </ul><!-- /.blog-one__comment -->
                        <a href="blog-details.html" class="blog__card-title">Fusce tincidunt commodo saie quis
                            porttitor.</a>
                    </div><!-- /.blog-one__item -->
                </div>
                <div class="col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1300ms">
                    <div class="blog__card">
                        <a href="blog-details.html" class="blog__card-img-box">
                            <img src="{{  asset('template/frontend/assets/images/blog/blog-1-2.jpg') }}" alt="blog" class="blog__card-img">
                            <p class="blog__card-category">Business</p><!-- /.blog-one__item-category -->
                        </a><!-- /.blog-one__img-box -->
                        <ul class="blog__card-comment-box">
                            <li class="blog__card-comment-item">
                                <p class="blog__card-comment">02 Comments</p>
                            </li>
                            <li class="blog__card-comment-item blog__card-comment-item-divider">
                                <p class="blog__card-comment">/</p>
                            </li>
                            <li class="blog__card-comment-item">
                                <p class="blog__card-comment">22 Aug 2023</p>
                            </li>
                        </ul><!-- /.blog-one__comment -->
                        <a href="blog-details.html" class="blog__card-title">Fusce tincidunt commodo saie quis
                            porttitor.</a>
                        <div class="blog__card-author">
                            <div class="blog__card-author-img-box">
                                <img src="{{  asset('template/frontend/assets/images/blog/blog-author-1-2.png') }}" alt="blog-author"
                                    class="blog__card-author-img">
                            </div>
                            <p class="blog__card-author-name">by
                                <span class="blog__card-author-name-highlight">Noile Mohsin</span>
                            </p>
                        </div><!-- /.blog-one__author -->
                    </div><!-- /.blog-one__item -->
                </div>
                <div class="col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1300ms">
                    <div class="blog__card">
                        <a href="blog-details.html" class="blog__card-img-box">
                            <img src="{{  asset('template/frontend/assets/images/blog/blog-1-3.jpg') }}" alt="blog" class="blog__card-img">
                            <p class="blog__card-category">Business</p><!-- /.blog-one__item-category -->
                        </a><!-- /.blog-one__img-box -->
                        <ul class="blog__card-comment-box">
                            <li class="blog__card-comment-item">
                                <p class="blog__card-comment">02 Comments</p>
                            </li>
                            <li class="blog__card-comment-item blog__card-comment-item-divider">
                                <p class="blog__card-comment">/</p>
                            </li>
                            <li class="blog__card-comment-item">
                                <p class="blog__card-comment">22 Aug 2023</p>
                            </li>
                        </ul><!-- /.blog-one__comment -->
                        <a href="blog-details.html" class="blog__card-title">Fusce tincidunt commodo saie quis
                            porttitor.</a>
                        <div class="blog__card-author">
                            <div class="blog__card-author-img-box">
                                <img src="{{  asset('template/frontend/assets/images/blog/blog-author-1-3.png') }}" alt="blog-author"
                                    class="blog__card-author-img">
                            </div>
                            <p class="blog__card-author-name">by
                                <span class="blog__card-author-name-highlight">Noile Mohsin</span>
                            </p>
                        </div><!-- /.blog-one__author -->
                    </div><!-- /.blog-one__item -->
                </div>
            </div><!-- /.row -->
            <div class="row pt-5 d-flex justify-content-center">
                <div class="col-6 text-center">
                    <a href="#" class="service-one__btn noile-btn">Lihat Blog Lainnya +</a>
                </div>
            </div>
        </div><!-- /.container -->
    </section>
    <!-- Blog One End -->

    <!-- Logo Mitra/ Partner Start -->
    <div class="brand-one">
        <div class="container">
            <div class="brand-one__carousel noile-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 4,
                    "margin": 50,
                    "smartSpeed": 1000,
                    "loop":true,
                    "autoplay": 200,
                    "nav":false,
                    "dots":false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items": 2
                        },
                        "430":{
                            "items": 3,
                            "margin": 30
                        },
                        "500":{
                            "items": 3,
                            "margin": 40
                        },
                        "768":{
                            "items": 4,
                            "margin": 50
                        },
                        "992":{
                            "items": 5
                        },
                        "1200":{
                            "items": 6
                        }
                    }
                    }'>
                <div class="brand-one__item item">
                    <img src="{{  asset('template/frontend/assets/images/brand/brand-1-1.png') }}" alt="brand"
                        class="brand-one__item-img">
                </div><!-- /.brand-one__item-->
                <div class="brand-one__item item">
                    <img src="{{  asset('template/frontend/assets/images/brand/brand-1-2.png') }}" alt="brand"
                        class="brand-one__item-img">
                </div><!-- /.brand-one__item-->
                <div class="brand-one__item item">
                    <img src="{{  asset('template/frontend/assets/images/brand/brand-1-3.png') }}" alt="brand"
                        class="brand-one__item-img">
                </div><!-- /.brand-one__item-->
                <div class="brand-one__item item">
                    <img src="{{  asset('template/frontend/assets/images/brand/brand-1-4.png') }}" alt="brand"
                        class="brand-one__item-img">
                </div><!-- /.brand-one__item-->
                <div class="brand-one__item item">
                    <img src="{{  asset('template/frontend/assets/images/brand/brand-1-5.png') }}" alt="brand"
                        class="brand-one__item-img">
                </div><!-- /.brand-one__item-->
                <div class="brand-one__item item">
                    <img src="{{  asset('template/frontend/assets/images/brand/brand-1-6.png') }}" alt="brand"
                        class="brand-one__item-img">
                </div><!-- /.brand-one__item-->
            </div><!-- /.brand-one__carousel -->
        </div><!-- /.container -->
    </div>
    <!-- Logo Mitra/ Partner End -->

    <!-- Mini Banner One Start -->
    <section class="mini-banner-one">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="mini-banner-one__content sec-title">
                        <h2 class="mini-banner-one__heading sec-title__heading">Daftar sekarang untuk raih keterampilan terbaik Anda</h2>
                    </div><!-- /.mini-banner-one__content -->
                </div>
                <div class="col-lg-4">
                    <div class="mini-banner-one__btn-wrap">
                        <a href="about.html" class="mini-banner-one__btn noile-btn">Free consultation +</a>
                    </div><!-- /.mini-banner-one__btn-wrap -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="mini-banner-one__shape-box">
            <svg class="mini-banner-one__shape-one" xmlns="http://www.w3.org/2000/svg" width="747" height="255"
                viewBox="0 0 747 255" fill="none">
                <path d="M393.616 160.808L325.826 72.6515L476.077 -163L596.277 -162.592L393.616 160.808Z" fill="white"
                    fill-opacity="0.1" />
                <path d="M479.762 465.181H346.029L-46 -49.3997L90.0943 -46.454L479.762 465.181Z" fill="white"
                    fill-opacity="0.1" />
                <path d="M597.674 620L1.64221 -162.592H144.928L746.726 620H597.674Z" fill="#282828" />
            </svg>
            <svg class="mini-banner-one__shape-two" xmlns="http://www.w3.org/2000/svg" width="273" height="255"
                viewBox="0 0 273 255" fill="none">
                <path d="M439.616 -15.8078L371.826 72.3485L522.077 308L642.277 307.592L439.616 -15.8078Z" fill="white"
                    fill-opacity="0.1" />
                <path d="M525.762 -320.181H392.029L6.10352e-05 194.4L136.094 191.454L525.762 -320.181Z" fill="white"
                    fill-opacity="0.1" />
                <path d="M643.674 -475L47.6423 307.592H190.928L792.726 -475H643.674Z" fill="#282828" />
            </svg>
        </div><!-- /.mini-banner-one__shape-box -->
    </section>
    <!-- Mini Banner One End -->
@endsection