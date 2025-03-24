@extends('frontend.layouts.app') <!-- Memanggil layout utama -->

@section('content')

    <!-- Page Header Start -->
    <section class="page-header" style="background-image: url('assets/images/backgrounds/blog-details-page-bg.jpg');">
    <span class="page-header__vartical-text">Web Development &
      Consulting</span>
    <div class="page-header__vartical-line-wrap">
      <div class="page-header__vartical-line page-header__vartical-line--one"></div>
      <div class="page-header__vartical-line page-header__vartical-line--two"></div>
      <div class="page-header__vartical-line page-header__vartical-line--three"></div>
    </div><!-- /.page-header__vartical-line-wrap -->
    <div class="container">
      <div class="page-header__circle"></div><!-- /.page-header__circle -->
      <div class="page-header__inner slide-title">
      <h1 class="page-header__heading slide-title__heading">Blog Details</h1>
      <div class="page-header__breadcrumb-wrap">
        <span class="page-header__arrow icon-arrow-right-2"></span>
        <ul class="noile-breadcrumb">
        <li class="noile-breadcrumb__item"><a href="index.html" class="noile-breadcrumb__link">Home</a></li>
        <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
        <li class="noile-breadcrumb__item">Blog Details</li>
        </ul>
      </div>
      </div><!-- /.page-header__inner -->
      <a href='#' class="page-header__circle-text">
      <div class="page-header__circle-text-bg"
        style="background-image: url('assets/images/resources/circle-text-bg.png');"></div>
      <div class="page-header__curved-circle curved-circle">
        <!-- curved-circle start-->
        <div class="page-header__curved-circle--item curved-circle--item" data-circle-text-options='{
           "radius": 92,
           "forceWidth": true,
           "forceHeight": true}'>
        . design for your digital products
        </div>
      </div><!-- curved-circle end-->
      </a><!-- /.page-header__circle-text -->
    </div><!-- /.container -->
    <div class="page-header__shape-box">
      <svg class="page-header__shape-one" width="389" height="319" viewBox="0 0 389 319" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path d="M460.4 600L0 0L162.2 20L610.5 600H460.4Z" />
      <path d="M460.699 600H310.799L2.99936 195H152.849L460.699 600Z" />
      </svg>
    </div><!-- /.page-header__shape-box -->
    </section>
    <!-- Page Header End -->

    <!-- Blog Details Start -->
    <section class="blog-details blog">
    <div class="container">
    <div class="row g-0">
      <div class="blog-details__col col-xl-8 col-lg-7">
      <div class="blog-details__left">
      <div class="blog-details__blog-card">
      <div class="blog-details__card-img-box wow animated fadeInUp" data-wow-duration="1500ms">
        <img src="assets/images/blog/blog-1-10.jpg" alt="blog" class="blog-details__card-img">
        <p class="blog-details__card-category">Business</p><!-- /.blog-one__item-category -->
      </div><!-- /.blog-one__img-box -->
      <ul class="blog-details__card-comment-box">
        <li class="blog-details__card-comment-item blog-details__card-comment-item-divider">
        <p class="blog-details__card-comment">Jenis Blog</p>
        </li>
        <li class="blog-details__card-comment-item blog-details__card-comment-item-divider">
        <p class="blog-details__card-comment">/</p>
        </li>
        <li class="blog-details__card-comment-item">
        <p class="blog-details__card-comment">22 Aug 2023</p>
        </li>
      </ul><!-- /.blog-one__comment -->
      <h3 class="blog-details__card-title blog-details__md-title">Fusce tincidunt commodo saie quis porttitor Eko
        sapien, puis porttitor ipsum etilk proin.</h3>
      <div class="blog-details__card-author">
        <div class="blog-details__card-author-img-box">
        <img src="assets/images/blog/blog-author-1-2.png" alt="blog-author"
        class="blog-details__card-author-img">
        </div>
        <p class="blog-details__card-author-name">by
        <span class="blog-details__card-author-name-highlight">Noile Mohsin</span>
        </p>
      </div><!-- /.blog-one__author -->
      <div class="blog-details__card-desc-one-box">
        <p class="blog-details__card-desc-one">Proin finibus imperdiet nulla, quis euismod nunc gravida eget.
        Vestibulum iaculis nibh facilisis felis iaculis vestibulum. Curabitur purus nulla, bibendum vitae varius
        pulvinar, molestie in massa. Quisque ut venenatis nunc, vitae rutrum libero. Duis eget consectetur urna.
        Ut ut aliquet magna. Nullam augue nulla, fermentum vel elit eu, posuere vehicula tellus. Orci varius
        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam eget nisl non elit tempor
        dignissim nec non sapien.</p>
      </div><!-- /.blog-details__desc-one-box -->
      <div class="blog-details__card-desc-two-box">
        <h4 class="blog-details__sm-title">Our Success JOURNEY We can Provide.</h4>
        <p class="blog-details__card-desc-two">Proin finibus imperdiet nulla, quis euismod nunc gravida eget.
        Vestibulum iaculis nibh facilisis felis iaculis vestibulum. Curabitur purus nulla, bibendum vitae varius
        pulvinar, molestie in massa. Quisque ut venenatis nunc, vitae rutrum libero. Duis eget consectetur urna.
        Ut ut aliquet magna. Nullam augue nulla, fermentum vel elit eu, posuere vehicula tellus. Orci varius
        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam eget nisl non elit tempor
        dignissim nec non sapien.</p>
      </div><!-- /.blog-details__desc-one-box -->
      <div class="blog-details__card-bottom">
        <p class="blog-details__card-desc-four">Maecenas at dui ut leo efficitur tempus. Mauris elementum elit sed
        ex finibus aliquet. Donec turpis turpis, facilisis ac ante quis, dignissim congue metus. Proin pulvinar
        nibh ut risus euismod blandit.</p>
        <ul class="blog-details__card-bottom-list">
        <li class="blog-details__card-bottom-list-item">
        <span class="blog-details__card-bottom-list-icon"><i class="icofont-check"></i></span>
        <p class="blog-details__card-bottom-list-text">How do you weigh different criteria in your process?
        </p>
        </li>
        <li class="blog-details__card-bottom-list-item">
        <span class="blog-details__card-bottom-list-icon"><i class="icofont-check"></i></span>
        <p class="blog-details__card-bottom-list-text">What are the additional requirements I should know
        about?</p>
        </li>
        </ul>
      </div><!-- /.blog-details__card-bottom -->
      </div><!-- /.blog-details__blog-card -->
      </div><!-- /.blog-details__left -->
      </div>
    </div><!-- /.row -->
    </div><!-- /.container -->
    </section>
    <!-- Blog Details End -->


@endsection