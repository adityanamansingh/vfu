@extends('layouts.app')

@section('title','Separation Coaching — ' . config('app.name', 'Vivek For You'))

<!-- shared head assets moved into layouts.app -->

@section('content')
  <main class="max-w-6xl mx-auto p-6 lg:p-12">
    @include('partials.breadcrumb', ['items' => [
      ['label' => 'Home', 'url' => url('/')],
      ['label' => 'Separation Coaching']
    ]])

    <h1 class="text-3xl lg:text-4xl font-extrabold leading-tight">Separation Coaching</h1>
    <p class="mt-4 text-gray-600">Guide conscious separation with dignity and clarity. Practical support for separation planning, communication, and emotional regulation.</p>
    <div class="mt-6 flex flex-wrap gap-3">
      <a href="{{ url('/#book') }}" class="inline-block btn">Book a Consultation</a>
      <a href="https://wa.me/REPLACE_NUMBER" class="inline-block px-5 py-3 rounded-md border border-gray-200 text-gray-800 hover:bg-gray-100">Chat on WhatsApp</a>
    </div>

    <section class="bg-white rounded-lg shadow p-8 mt-8">
      <h2 class="text-xl font-semibold mb-3" data-i18n="whatThisOffersTitle">Separation Coaching</h2>
      <p class="text-gray-700 mb-4" data-i18n="whatThisOffersText">I guide individuals and couples through conscious separation by reducing emotional damage, managing conflict maturely, and creating emotional stability, dignity, and clarity during and after the separation process.</p>
      <div class="flex gap-3 mt-6">
        <a href="{{ url('/#book') }}" class="px-4 py-2 btn">Book a Discovery Call</a>
        <a href="https://wa.me/REPLACE_NUMBER" target="_blank" rel="noopener" class="px-4 py-2 border rounded">Chat on WhatsApp</a>
      </div>
    </section>

    <section class="mt-8 grid md:grid-cols-2 gap-6">
      <div class="bg-white rounded-lg shadow p-6">
        <h3 class="font-semibold mb-3" data-i18n="whoForTitle">Who this is for</h3>
        <ul class="list-disc list-inside text-gray-700">
          <li data-i18n="whoFor1">Individuals seeking greater emotional clarity and regulation</li>
          <li data-i18n="whoFor2">Couples wanting to repair patterns and build safety</li>
          <li data-i18n="whoFor3">People navigating separation, breakup or transition</li>
        </ul>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <h3 class="font-semibold mb-3" data-i18n="howTitle">How sessions work</h3>
        <ol class="list-decimal list-inside text-gray-700">
          <li data-i18n="how1">Short intake to clarify goals</li>
          <li data-i18n="how2">Focused 1:1 or couples sessions with practical tools</li>
          <li data-i18n="how3">Homework and practices to integrate learning between sessions</li>
        </ol>
      </div>
    </section>

    @include('partials.service-packages')
    @include('partials.service-faq')
    @include('partials.service-testimonials')

    <div class="mt-6">
      <a href="{{ url('/') }}" class="text-sm text-brand-blue">← Back to home</a>
    </div>
  </main>
@endsection

