@props(['kategoriTema', 'kontak', 'informasipendaftaran', 'bannerKontak'])


<div class="col-xl-4 col-lg-5">
    <div class="blog-sidebar__left page-sidebar">
        <div class="page-sidebar__social page-sidebar__single wow animated fadeInRigh text-center" data-wow-delay="0.1s"
            data-wow-duration="1500ms">
            <h3 class="page-sidebar__title">Informasi Pendaftaran</h3>
            <p class="page-sidebar__text text-center">
                {!! nl2br(htmlspecialchars_decode(e($informasipendaftaran->content ?? 'Konten tidak tersedia.'))) !!}
            </p>
        </div><!-- /.page-sidebar__social -->
        <div class="blog-sidebar__left page-sidebar">
            <div class="page-sidebar__search page-sidebar__single wow animated fadeInRight">
                <h3 class="page-sidebar__title">Pencarian</h3>
                <form action="javascript:void(0);" class="page-sidebar__search-form">
                    <input type="search" id="search-pelatihan" placeholder="Masukkan nama pelatihan..."
                        class="page-sidebar__search-input">
                    <button type="submit" class="page-sidebar__search-btn"><i
                            class="page-sidebar__search-icon icofont-search-1"></i></button>
                </form>
                <div id="hasil-pencarian" class="search-results"></div>
            </div>

            <div class="page-sidebar__service page-sidebar__single wow animated fadeInRight">
                <h3 class="page-sidebar__title">Tema Pelatihan:</h3>
                @if(is_iterable($kategoriTema) && count($kategoriTema) > 0)
                    <ul class="page-sidebar__service-list">
                        @foreach($kategoriTema as $kategori)
                            <li class="page-sidebar__service-item">
                                <a href="{{ route('kategori-tema-pelatihan', ['slug' => $kategori->slug]) }}" class="page-sidebar__service-link">
                                    {{ $kategori->nama_kategori }}
                                </a>
                            </li>
                        @endforeach
                @else
                        <p>Tidak ada kategori tersedia.</p>
                    @endif
                </ul>
            </div><!-- /.page-sidebar__service -->
            <div class="page-sidebar__social page-sidebar__single wow animated fadeInRight" data-wow-delay="0.1s"
                data-wow-duration="1500ms">
                <h3 class="page-sidebar__title">Media Sosial</h3>
                <div class="page-sidebar__social-list social-list">
                    @if ($kontak->isNotEmpty())
                        @foreach ($kontak as $item)
                            @if ($item->nama_kontak === 'Facebook')
                                <a href="{{ $item->link }}" class="page-sidebar__social-link social-link" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            @elseif ($item->nama_kontak === 'Twitter')
                                <a href="{{ $item->link }}" class="page-sidebar__social-link social-link" target="_blank">
                                    <i class="icofont-twitter"></i>
                                </a>
                            @elseif ($item->nama_kontak === 'Instagram')
                                <a href="{{ $item->link }}" class="page-sidebar__social-link social-link" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            @elseif ($item->nama_kontak === 'WhatsApp')
                                <a href="{{ $item->link }}" class="page-sidebar__social-link social-link" target="_blank">
                                    <i class="icofont-whatsapp"></i>
                                </a>
                            @endif
                        @endforeach
                    @else
                        <p>Tidak ada media sosial yang tersedia.</p>
                    @endif
                </div>
            </div><!-- /.page-sidebar__social -->
            <div class="page-sidebar__contact page-sidebar__single wow animated fadeInRight" data-wow-delay="0.1s"
                data-wow-duration="1500ms"
                style="background-image: url('{{ $bannerKontak ? asset('storage/' . $bannerKontak->image) : asset('template/frontend/assets/images/resources/sidebar-contact-bg.jpg') }}');">
                <div class="page-sidebar__contact-wrap">
                    <h3 class="page-sidebar__contact-title">{{ $bannerKontak ? $bannerKontak->text : 'Hubung Kami:' }}</h3>
                    @if ($kontak->isNotEmpty())
                            @foreach ($kontak as $item)
                                @if ($item->nama_kontak === 'WhatsApp')
                                    <a href="{{ ltrim($item->link, '0') }}" class="page-sidebar__contact-btn" target="_blank">
                                        <span class="page-sidebar__contact-icon icon-phone"></span>
                                        <h4 class="page-sidebar__contact-text">{{ $item->deskripsi }}</h4>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <a href="#" class="page-sidebar__contact-btn">
                            <span class="page-sidebar__contact-icon icon-phone"></span>
                            <h4 class="page-sidebar__contact-text">tidak ada data "WhatsApp".</h4>
                        </a>
                    @endif
                </div>
            </div><!-- /.page-sidebar__contact -->

        </div><!-- /.page-sidebar -->
    </div>
</div><!-- /.col sidebar -->