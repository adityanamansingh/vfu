@extends('layouts.app')

@section('title','Workshops & Talks — ' . config('app.name', 'Vivek For You'))

<!-- shared head assets moved into layouts.app -->

@section('content')
  <main class="max-w-6xl mx-auto p-6 lg:p-12">
    @include('partials.breadcrumb', ['items' => [
      ['label' => 'Home', 'url' => url('/')],
      ['label' => 'Workshops & Talks']
    ]])

    <h1 class="text-3xl lg:text-4xl font-extrabold leading-tight">Workshops & Talks</h1>
    <p class="mt-4 text-gray-600">Public sessions on EI, conscious relationships and leadership — workshops tailored for teams, communities, and events.</p>
    <div class="mt-6 flex flex-wrap gap-3">
      <a href="{{ url('/#book') }}" class="inline-block btn">Enquire / Book</a>
      <a href="https://wa.me/REPLACE_NUMBER" class="inline-block px-5 py-3 rounded-md border border-gray-200 text-gray-800 hover:bg-gray-100">Chat on WhatsApp</a>
    </div>

    <section class="bg-white rounded-lg shadow p-8 mt-8">
      <h2 class="text-xl font-semibold mb-3" data-i18n="whatThisOffersTitle">Public sessions</h2>
      <p class="text-gray-700 mb-4" data-i18n="service6Text">I deliver workshops focused on emotional intelligence, relational skills, and leadership presence — adaptable for teams and public audiences.</p>
      <div class="flex gap-3 mt-6">
        <a href="{{ url('/#book') }}" class="px-4 py-2 btn">Enquire / Book</a>
        <a href="https://wa.me/REPLACE_NUMBER" target="_blank" rel="noopener" class="px-4 py-2 border rounded">Chat on WhatsApp</a>
      </div>
    </section>

    <section class="mt-8 grid md:grid-cols-2 gap-6">
      <div class="bg-white rounded-lg shadow p-6">
        <h3 class="font-semibold mb-3">Who this is for</h3>
        <ul class="list-disc list-inside text-gray-700">
          <li>Organizations and teams</li>
          <li>Community groups</li>
          <li>Leadership and professional development audiences</li>
        </ul>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <h3 class="font-semibold mb-3">Format</h3>
        <ol class="list-decimal list-inside text-gray-700">
          <li>Tailored session design</li>
          <li>Interactive exercises and debrief</li>
          <li>Follow-up resources and coaching</li>
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

