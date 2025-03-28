@extends('frontend.layouts.app') <!-- Memanggil layout utama -->

@section('content')

  <!-- Page Header Start -->
  <section class="page-header"
  style="background-image: url('{{ asset('template/frontend/assets/images/backgrounds/blog-page-bg.jpg') }}');">
  <div class="page-header__vartical-line-wrap">
  <div class="page-header__vartical-line page-header__vartical-line--one"></div>
  <div class="page-header__vartical-line page-header__vartical-line--two"></div>
  <div class="page-header__vartical-line page-header__vartical-line--three"></div>
  </div><!-- /.page-header__vartical-line-wrap -->
  <div class="container">
  <div class="page-header__circle"></div><!-- /.page-header__circle -->
  <div class="page-header__inner slide-title">
  <h1 class="page-header__heading slide-title__heading">Formulir Pendaftaran</h1>
  <div class="page-header__breadcrumb-wrap">
  <span class="page-header__arrow icon-arrow-right-2"></span>
  <ul class="noile-breadcrumb">
  <li class="noile-breadcrumb__item"><a href="{{ route('home') }}" class="noile-breadcrumb__link">Beranda</a>
  </li>
  </li>
  <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
  <li class="noile-breadcrumb__item">Formulir Pendaftaran</li>
  </ul>
  </div>
  </div><!-- /.page-header__inner -->
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

  <!-- Formulir Pendaftaran Start -->
  <section class="formulir py-5 my-5">
  <div class="container">
  <div class="row">
  <div class="col-xl-8 col-lg-7">
  <div class="contact-one__contact contact wow animated fadeInLeft m-0" data-wow-delay="0.1s" data-wow-duration="1500ms">
  <div class="contact__form-box">
    <h3 class="contact__form-title">Formulir Pendaftaran Kegiatan</h3>
    <form action="https://formspree.io/f/mrbpagay" method="POST"
    class="contact__form container-fluid wow animated fadeInUp mt-3" data-wow-duration="1500ms">
    <div class="row g-4">
    <div class="col-md-12">
    <div class="contact__form-input-box">
    <label for="contact-form-name" class="contact__input-title">Masukan Nama Kamu</label>
    <input type="text" name="contact-form-name" placeholder="tulis nama kamu disini..." id="contact-form-name"
    class="contact__form-input">
    </div><!-- /.contact__form-input-box -->
    </div>
    <div class="col-md-6">
    <div class="contact__form-input-box">
    <label for="contact-form-mail" class="contact__input-title">Alamat E-mail</label>
    <input type="email" name="contact-form-mail" placeholder="tulis email kamu disini..." id="contact-form-mail"
    class="contact__form-input">
    </div><!-- /.contact__form-input-box -->
    </div>
    <div class="col-md-6">
    <div class="contact__form-input-box">
      <label for="contact-form-mail" class="contact__input-title">Nomor Telepon</label>
      <input type="text" name="contact-form-mail" placeholder="tulis nomor telepon kamu disini..." id="contact-form-mail"
      class="contact__form-input">
    </div><!-- /.contact__form-input-box -->
    </div>
    <div class="col-md-6">
    <div class="contact__form-input-box">
      <label for="contact-form-mail" class="contact__input-title">Bentuk Kegiatan</label>
      <select name="contact-form-mail" id="contact-form-mail" class="contact__form-input" placeholder="Pilih Bentuk Kegiatan">
      <option class="selected" value="">--Pilih Bentuk Kegiatan--</option>
      <option value="Bentuk Kegiatan">Bentuk Kegiatan</option>
      <option value="Bentuk Kegiatan">Bentuk Kegiatan</option>
      <option value="Bentuk Kegiatan">Bentuk Kegiatan</option>
      <option value="Bentuk Kegiatan">Bentuk Kegiatan</option>
      </select>
    </div><!-- /.contact__form-input-box -->
    </div>
    <div class="col-md-6">
    <div class="contact__form-input-box">
      <label for="contact-form-mail" class="contact__input-title">Tema Pelatihan</label>
      <select name="contact-form-mail" id="contact-form-mail" class="contact__form-input">
      <option class="selected" value="">--Pilih Tema Pelatihan--</option>
      <option value="Tema Pelatihan">Tema Pelatihan</option>
      <option value="Tema Pelatihan">Tema Pelatihan</option>
      <option value="Tema Pelatihan">Tema Pelatihan</option>
      <option value="Tema Pelatihan">Tema Pelatihan</option>
      </select>
    </div><!-- /.contact__form-input-box -->
    </div>
    <div class="col-md-12">
    <div class="contact__form-input-box">
      <label for="contact-form-message" class="contact__input-title">Alamat</label>
      <input type="text" name="contact-form-message" id="contact-form-message" placeholder="tulis alamat kamu disini..." class="contact__form-input">
    </div><!-- /.contact__form-input-box -->
    </div>
    <div class="col-md-12">
    <div class="contact__form-input-box">
    <label for="contact-form-message" class="blog-details__input-title">Pesan Anda</label>
    <textarea name="contact-form-message" id="contact-form-message" placeholder="tulis pesan kamu disini..." cols="30"
    rows="10" class="contact__form-message contact__form-input"></textarea>
    <p class="contact__form-text"><span>*</span> Hubungi kontak kami lainnya bila ada pertanyaan lain.</p>
    </div><!-- /.contact__form-input-box -->
    </div>
    <div class="col-md-12">
    <div class="contact__form-btn-box">
    <button type="submit" class="contact__form-btn noile-btn">Kirim Pesan +</button>
    </div><!-- /.contact__form-btn-box -->
    </div>
    </div><!-- /.row -->
    </form><!-- /.contact_form -->
  </div>
  </div><!-- /.contact -->
  </div>
  <div class="col-xl-4 col-lg-5">
    <img src="https://img.freepik.com/free-vector/businessman-holding-pencil-big-complete-checklist-with-tick-marks_1150-35019.jpg?t=st=1743091589~exp=1743095189~hmac=c6225d832f665f8284af717c865007108d8c4b5628a044deb03327740659ddb3&w=1380" class="img-fluid w-100" alt="form_ilustrasi">
  </div>
  </div><!-- /.row -->
  </div><!-- /.container -->
  </section>
  <!-- Formulir Pendaftaran End -->

@endsection