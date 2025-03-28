@extends('frontend.layouts.app') <!-- Memanggil layout utama -->

@section('content')

    <!-- Page Header Start -->
    <section class="page-header" style="background-image: url('{{ asset('template/frontend/assets/images/backgrounds/contact-page-bg.jpg') }}');">
    <div class="page-header__vartical-line-wrap">
    <div class="page-header__vartical-line page-header__vartical-line--one"></div>
    <div class="page-header__vartical-line page-header__vartical-line--two"></div>
    <div class="page-header__vartical-line page-header__vartical-line--three"></div>
    </div><!-- /.page-header__vartical-line-wrap -->
    <div class="container">
    <div class="page-header__circle"></div><!-- /.page-header__circle -->
    <div class="page-header__inner slide-title">
    <h1 class="page-header__heading slide-title__heading">Kontak</h1>
    <div class="page-header__breadcrumb-wrap">
    <span class="page-header__arrow icon-arrow-right-2"></span>
    <ul class="noile-breadcrumb">
    <li class="noile-breadcrumb__item"><a href="{{ route('home') }}" class="noile-breadcrumb__link">Beranda</a></li>
    <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
    <li class="noile-breadcrumb__item">Kontak</li>
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

    <!-- Team Page Start -->
    <section class="contact-one">
    <div class="container">
    <div class="contact-one__google-map google-map wow animated fadeInUp" data-wow-duration="1500ms">
    <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3259.0708854946206!2d106.82458402498996!3d-6.1754083438119896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonas!5e1!3m2!1sen!2sid!4v1742743988257!5m2!1sen!2sid"
    allowfullscreen="" class="google-map__default"></iframe>
    </div><!-- /.contact-one__google-map -->
    <div class="row g-4">
    <div class="col-xl-8 col-lg-7">
    <div class="contact-one__left">
    <div class="contact-one__info wow animated fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1500ms">
    <div class="contact-one__info-box">
    <div class="contact-one__info-item">
    <div class="contact-one__info-icon contact-one__info-icon--one">
    <i class="icon-phone"></i>
    </div>
    <a href="tel:+55(9900)66622" class="contact-one__info-title contact-one__info-link">+55 (9900) 666
    22</a>
    </div>
    <div class="contact-one__info-item">
    <div class="contact-one__info-icon contact-one__info-icon--two">
    <i class="icon-email"></i>
    </div>
    <a href="mailto:noile@envato.com"
    class="contact-one__info-title contact-one__info-link">noile@envato.com</a>
    </div>
    <div class="contact-one__info-item">
    <div class="contact-one__info-icon contact-one__info-icon--two">
    <i class="icofont-ui-pointer"></i>
    </div>
    <p class="contact-one__info-title">Mirpur 12, Block C, Dhaka, BD.</p>
    </div>
    </div><!-- /.contact-one__info-box -->
    <div class="contact-one__social social-list">
    <a href="#" class="contact-one__social-link social-link">
    <i class="icofont-facebook"></i>
    </a>
    <a href="#" class="contact-one__social-link social-link">
    <i class="icofont-twitter"></i>
    </a>
    <a href="#" class="contact-one__social-link social-link">
    <i class="icofont-instagram"></i>
    </a>
    </div><!-- /.contact-one__info -->
    </div><!-- /.contact-one__info -->
    </div><!-- /.contact-one__left -->
    </div>
    <div class="col-xl-4 col-lg-5 wow animated fadeInRight" data-wow-delay="0.1s" data-wow-duration="1500ms">
    <div class="page-sidebar__contact page-sidebar__single"
    style="background-image: url('{{ asset('template/frontend/assets/images/resources/sidebar-contact-bg.jpg') }}');">
    <div class="page-sidebar__contact-wrap">
    <h3 class="page-sidebar__contact-title">Have Any Query Feel Free Contact</h3>
    <a href="tel:(1)245-45678" class="page-sidebar__contact-btn">
    <span class="page-sidebar__contact-icon icon-phone"></span>
    <h4 class="page-sidebar__contact-text">(1)245-45678 call</h4>
    </a>
    </div>
    </div>
    </div>
    </div><!-- /.row -->
    </div><!-- /.container -->
    </section>
    <!-- Team Page End -->

    <!-- Formulir Pendaftaran Start -->
    <section class="formulir py-5">
    <div class="container">
      <div class="row">
      <div class="col-xl-8 col-lg-7">
        <div class="contact-one__contact contact wow animated fadeInLeft m-0" data-wow-delay="0.1s"
        data-wow-duration="1500ms">
        <div class="contact__form-box">
          <h3 class="contact__form-title">Formulir Pendaftaran Kegiatan</h3>
          <form action="https://formspree.io/f/mrbpagay" method="POST"
          class="contact__form container-fluid wow animated fadeInUp mt-3" data-wow-duration="1500ms">
          <div class="row g-4">
            <div class="col-md-12">
            <div class="contact__form-input-box">
              <label for="contact-form-name" class="contact__input-title">Masukan Nama Kamu</label>
              <input type="text" name="contact-form-name" placeholder="tulis nama kamu disini..."
              id="contact-form-name" class="contact__form-input">
            </div><!-- /.contact__form-input-box -->
            </div>
            <div class="col-md-6">
            <div class="contact__form-input-box">
              <label for="contact-form-mail" class="contact__input-title">Alamat E-mail</label>
              <input type="email" name="contact-form-mail" placeholder="tulis email kamu disini..."
              id="contact-form-mail" class="contact__form-input">
            </div><!-- /.contact__form-input-box -->
            </div>
            <div class="col-md-6">
            <div class="contact__form-input-box">
              <label for="contact-form-mail" class="contact__input-title">Nomor Telepon</label>
              <input type="text" name="contact-form-mail" placeholder="tulis nomor telepon kamu disini..."
              id="contact-form-mail" class="contact__form-input">
            </div><!-- /.contact__form-input-box -->
            </div>
            <div class="col-md-6">
            <div class="contact__form-input-box">
              <label for="contact-form-mail" class="contact__input-title">Bentuk Kegiatan</label>
              <select name="contact-form-mail" id="contact-form-mail" class="contact__form-input"
              placeholder="Pilih Bentuk Kegiatan">
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
              <input type="text" name="contact-form-message" id="contact-form-message"
              placeholder="tulis alamat kamu disini..." class="contact__form-input">
            </div><!-- /.contact__form-input-box -->
            </div>
            <div class="col-md-12">
            <div class="contact__form-input-box">
              <label for="contact-form-message" class="blog-details__input-title">Pesan Anda</label>
              <textarea name="contact-form-message" id="contact-form-message"
              placeholder="tulis pesan kamu disini..." cols="30" rows="10"
              class="contact__form-message contact__form-input"></textarea>
              <p class="contact__form-text"><span>*</span> Hubungi kontak kami lainnya bila ada pertanyaan lain.
              </p>
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
        <img
        src="https://img.freepik.com/free-vector/businessman-holding-pencil-big-complete-checklist-with-tick-marks_1150-35019.jpg?t=st=1743091589~exp=1743095189~hmac=c6225d832f665f8284af717c865007108d8c4b5628a044deb03327740659ddb3&w=1380"
        class="img-fluid w-100" alt="form_ilustrasi">
      </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
    </section>
    <!-- Formulir Pendaftaran End -->

@endsection