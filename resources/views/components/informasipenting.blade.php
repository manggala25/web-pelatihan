@props(['tabs', 'sectiontabsinformasi'])

<div class="row py-5">
    <div class="col-12 mt-5">
        <div class="solution-one__content sec-title">
            <div class="sec-title__top-wrap d-flex">
                <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}"
                    alt="top-title-logo">
                <p class="sec-title__top">{{ $sectiontabsinformasi ? $sectiontabsinformasi->top_title : 'Informasi Penting:' }}</p>
            </div>
            <h6 class="sec-title__heading mb-0">{{ $sectiontabsinformasi ? $sectiontabsinformasi->heading : 'Informasi Penting:' }}</h6>
            <div class="solution-one__main-tab-box tabs-box mt-3">
                <ul class="tab-buttons justify-content-center">
                    @if($tabs->isEmpty())
                        <li class="tab-btn"><span>Tidak ada informasi tersedia</span></li>
                    @else
                        @foreach($tabs as $tab)
                            <li data-tab="#tab{{ $tab->id }}" class="tab-btn {{ $loop->first ? 'active-btn' : '' }}">
                                <span>{{ $tab->nama_tabs }}</span>
                            </li>
                        @endforeach
                    @endif
                </ul><!-- solution-tab -->
                <div class="tabs-content">
                    @if($tabs->isEmpty())
                        <div class="tab active-tab fadeInUp animated" style="display: block;">
                            <p class="solution-one__service-desc">Tidak ada informasi tersedia.</p>
                        </div>
                    @else
                        @foreach($tabs as $tab)
                            <div class="tab {{ $loop->first ? 'active-tab' : '' }} fadeInUp animated" data-wow-delay="200ms"
                                id="tab{{ $tab->id }}" style="{{ $loop->first ? 'display: block;' : 'display: none;' }}">
                                <p class="solution-one__service-desc">{!! nl2br(htmlspecialchars_decode(e($tab->content ?? 'Konten tidak tersedia.'))) !!}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <!-- /.solution-one__main-tab-box -->
        </div><!-- /.solution-one__content -->
    </div>
</div>