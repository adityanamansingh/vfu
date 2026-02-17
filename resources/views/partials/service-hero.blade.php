@props([
  'title_key' => null,
  'title_default' => '',
  'subtitle_key' => null,
  'subtitle_default' => '',
  'image' => null,
  'breadcrumb' => []
])

<section class="relative grid lg:grid-cols-2 gap-8 items-center" data-aos="fade-up">
  {{-- decorative three.js canvas removed --}}

  <div class="hero-inner">
    @if(count($breadcrumb))
      @include('partials.breadcrumb', ['items' => $breadcrumb])
    @endif

    <h1 class="text-3xl lg:text-4xl font-extrabold leading-tight" @if($title_key) data-i18n="{{ $title_key }}" @endif>{!! $title_default !!}</h1>
    <p class="mt-4 text-gray-600" @if($subtitle_key) data-i18n="{{ $subtitle_key }}" @endif>{!! $subtitle_default !!}</p>

    <div class="mt-6 flex flex-wrap gap-3">
      <a href="{{ url('/#book') }}" class="inline-block btn" @if($title_key) data-i18n="btnBookCall" @endif>Book a Consultation</a>
      <a href="https://wa.me/REPLACE_NUMBER" class="inline-block px-5 py-3 rounded-md border border-brand-blue-100 text-black hover:bg-brand-blue-100">Chat on WhatsApp</a>
    </div>
  </div>

  <div class="flex items-center justify-center">
    <div class="card-3d rounded-xl overflow-hidden shadow-lg max-w-[420px] w-full">
      @if($image)
        <a href="{{ $image }}" target="_blank" rel="noopener" class="block">
          <img alt="" src="{{ $image }}" class="w-full h-[420px] object-cover block rounded-xl" />
        </a>
      @endif
    </div>
  </div>
</section>

