@extends('layouts.app')

@section('title','Couple Dynamics Coaching — ' . config('app.name', 'Vivek For You'))

<!-- shared head assets moved into layouts.app -->

@section('content')
  <main class="max-w-6xl mx-auto p-6 lg:p-12">
    @include('partials.breadcrumb', ['items' => [
      ['label' => 'Home', 'url' => url('/')],
      ['label' => 'Couple Dynamics Coaching']
    ]])

    <h1 class="text-3xl lg:text-4xl font-extrabold leading-tight">Couple Dynamics Coaching</h1>
    <p class="mt-4 text-gray-600">Decode interaction patterns and shift toward teamwork.</p>
    <div class="mt-6 flex flex-wrap gap-3">
      <a href="{{ url('/#book') }}" class="inline-block btn">Book a Consultation</a>
      <a href="https://wa.me/REPLACE_NUMBER" class="inline-block px-5 py-3 rounded-md border border-gray-200 text-gray-800 hover:bg-gray-100">Chat on WhatsApp</a>
    </div>

    <section class="bg-white rounded-lg shadow p-8 mt-8">
      <h2 class="text-xl font-semibold mb-3">Overview</h2>
      <p class="text-gray-700 mb-4">Work with relational patterns that impact connection, conflict, and collaboration. Practical tools for partners to shift dynamics toward safety and mutual regulation.</p>
    </section>

    <section class="mt-8 grid md:grid-cols-2 gap-6">
      <div class="bg-white rounded-lg shadow p-6">
        <h3 class="font-semibold mb-3">Who this is for</h3>
        <ul class="list-disc list-inside text-gray-700">
          <li>Couples wanting to change interaction cycles</li>
          <li>Partners seeking collaborative conflict tools</li>
          <li>People aiming for secure connection</li>
        </ul>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <h3 class="font-semibold mb-3">Format</h3>
        <ol class="list-decimal list-inside text-gray-700">
          <li>Initial assessment & goal-setting</li>
          <li>Targeted skills practice and homework</li>
          <li>Integration & long-term maintenance</li>
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

