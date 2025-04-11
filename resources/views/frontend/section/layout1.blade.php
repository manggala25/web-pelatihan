<!-- Section Option 1 Start -->
<section class="solution-one py-5 my-5">
  <div class="container">
    <div class="row">
      <div class="col-xxl-6 col-xl-7 mb-xl-0 mb-3  wow animated fadeInLeft" data-wow-delay="0.1s"
        data-wow-duration="1500ms">
        <div class="solution-one__content sec-title me-xl-5">
          <div class="sec-title__top-wrap">
            <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
            <p class="sec-title__top">{{ $section->title ?? 'Nama Section' }}</p>
          </div>
          <h2 class="solution-one__heading sec-title__heading">
            {{ $section->heading ?? 'Judul Default Section' }}
          </h2>
          <p class="solution-one__service-desc">
            {!! $section->content ?? 'Isi default paragraf jika belum diisi.' !!}
          </p>
        </div>
      </div>

      <div class="col-xxl-6 col-xl-5 wow animated fadeInRight" data-wow-delay="0.1s" data-wow-duration="1500ms">
        <div class="solution-one__img-col">
          <div class="img-wrap">

            @if (!empty($section->video_url) && (Str::contains($section->video_url, 'youtube.com') || Str::contains($section->video_url, 'youtu.be')))
            <div class="ratio ratio-16x9">
              <iframe src="{{ Str::contains($section->video_url, 'watch?v=')
    ? str_replace('watch?v=', 'embed/', $section->video_url)
    : str_replace('youtu.be/', 'www.youtube.com/embed/', $section->video_url) }}" frameborder="0"
              allowfullscreen></iframe>
            </div>

      @elseif (!empty($section->image) && filter_var($section->image, FILTER_VALIDATE_URL))
    <img src="{{ $section->image }}" alt="image-url" class="solution-one__img img-fluid w-100">

  @elseif (!empty($section->image))
  <img src="{{ asset('storage/' . $section->image) }}" alt="image-local"
    class="solution-one__img img-fluid w-100">

@else
  <img src="{{ asset('template/frontend/assets/images/solution/solution-1-1.jpg') }}" alt="solution-default"
    class="solution-one__img img-fluid w-100">
@endif


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section Option 1 End -->