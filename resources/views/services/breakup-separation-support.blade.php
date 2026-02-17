@extends('layouts.app')

@section('title','Breakup & Separation Support — ' . config('app.name', 'Vivek For You'))

<!-- shared head assets moved into layouts.app -->

@section('content')
  <main class="max-w-6xl mx-auto p-6 lg:p-12">
    @include('partials.breadcrumb', ['items' => [
      ['label' => 'Home', 'url' => url('/')],
      ['label' => 'Breakup & Separation Support']
    ]])

    <h1 class="text-3xl lg:text-4xl font-extrabold leading-tight">Breakup & Separation Support</h1>
    <p class="mt-4 text-gray-600">Process grief, rebuild clarity and self-worth. Support for navigating endings with emotional care, boundary setting, and rebuilding identity after separation.</p>
    <div class="mt-6 flex flex-wrap gap-3">
      <a href="{{ url('/#book') }}" class="inline-block btn">Book a Consultation</a>
      <a href="https://wa.me/REPLACE_NUMBER" class="inline-block px-5 py-3 rounded-md border border-gray-200 text-gray-800 hover:bg-gray-100">Chat on WhatsApp</a>
    </div>

    <section class="bg-white rounded-lg shadow p-8 mt-8">
      <h2 class="text-xl font-semibold mb-3">Breakup Coaching</h2>
      <p class="text-gray-700 mb-4">I support individuals through the emotional pain of separation by helping them process grief, rebuild self-worth, gain emotional clarity, and move forward without carrying unresolved hurt or emotional baggage.</p>
      <div class="flex gap-3 mt-6">
        <a href="{{ url('/#book') }}" class="px-4 py-2 btn">Book a Discovery Call</a>
        <a href="https://wa.me/REPLACE_NUMBER" target="_blank" rel="noopener" class="px-4 py-2 border rounded">Chat on WhatsApp</a>
      </div>
    </section>

    <section class="mt-8 grid md:grid-cols-2 gap-6">
      <div class="bg-white rounded-lg shadow p-6">
        <h3 class="font-semibold mb-3">Who this is for</h3>
        <ul class="list-disc list-inside text-gray-700">
          <li>Individuals seeking emotional clarity and regulation</li>
          <li>People navigating separation, breakup or transition</li>
          <li>Those wanting to rebuild self-worth and identity</li>
        </ul>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <h3 class="font-semibold mb-3">How sessions work</h3>
        <ol class="list-decimal list-inside text-gray-700">
          <li>Short intake to clarify goals</li>
          <li>Focused 1:1 sessions with practical tools</li>
          <li>Homework and practices to integrate learning between sessions</li>
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

