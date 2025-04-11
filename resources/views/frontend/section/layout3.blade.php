<!-- Section Option 3 Start -->
<!-- Section Option 3 Start -->
<section class="solution-one py-5 my-5">
  <div class="container">
    <div class="row justify-content-xl-center">
      {{-- Konten Teks --}}
      <div class="col-xxl-12 col-xl-10 col-12 mb-xl-0 mb-3 wow animated fadeInLeft text-xl-center" data-wow-delay="0.1s"
        data-wow-duration="1500ms">
        <div class="solution-one__content sec-title">
          <div class="sec-title__top-wrap justify-content-xl-center">
            <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
            <p class="sec-title__top">{{ $section->title ?? 'Nama Section' }}</p>
          </div>
          <h2 class="solution-one__heading sec-title__heading">
            {{ $section->heading ?? 'Judul Default Section' }}
          </h2>
          <p class="solution-one__service-desc">
            {!! $section->content ?? 'Paragraf default jika belum diisi.' !!}
          </p>
        </div>
      </div>

      {{-- Gambar atau Video --}}
      <div class="col-xxl-12 wow animated fadeInRight" data-wow-delay="0.1s" data-wow-duration="1500ms">
        <div class="solution-one__img-col">
          <div class="img-wrap d-flex justify-content-center">
            @if (!empty($section->video_url) && (Str::contains($section->video_url, 'youtube.com') || Str::contains($section->video_url, 'youtu.be')))
            {{-- YouTube Video --}}
            <iframe width="100%" height="500" src="{{ Str::contains($section->video_url, 'watch?v=')
        ? str_replace('watch?v=', 'embed/', $section->video_url)
        : str_replace('youtu.be/', 'www.youtube.com/embed/', $section->video_url) }}"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      @elseif (!empty($section->image) && filter_var($section->image, FILTER_VALIDATE_URL))
    {{-- Gambar dari URL --}}
    <img src="{{ $section->image }}" alt="image-url" class="solution-one__img img-fluid w-100"
      style="max-height: 32rem; min-height: 32rem; object-fit: cover;">
  @elseif (!empty($section->image))
  {{-- Gambar dari Storage --}}
  <img src="{{ asset('storage/' . $section->image) }}" alt="image-local"
    class="solution-one__img img-fluid w-100"
    style="max-height: 32rem; min-height: 32rem; object-fit: cover;">
@else
  {{-- Default Image --}}
  <img src="{{ asset('template/frontend/assets/images/solution/solution-1-1.jpg') }}" alt="default-img"
    class="solution-one__img img-fluid w-100"
    style="max-height: 32rem; min-height: 32rem; object-fit: cover;">
@endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section Option 3 End -->

<!-- Section Option 3 End -->