@extends('layouts.app')

<!-- shared head assets moved into layouts.app -->

@section('title', config('app.name', 'Vivek For You'))

@section('content')
  <main class="max-w-6xl mx-auto p-6 lg:p-12">
    <section class="relative grid lg:grid-cols-2 gap-8 items-center" data-aos="fade-up">
      <div class="hero-inner">
        <div>
          <h1 class="text-3xl lg:text-4xl font-extrabold leading-tight" data-i18n="emotionalLine">From emotional confusion to clarity, safety, and deeper connection</h1>
          <p class="mt-4 text-gray-600" data-i18n="subtitle">Trauma-informed coaching for individuals and couples. Practical tools to move from reactivity to secure, compassionate connection.</p>
          <div class="mt-6 flex flex-wrap gap-3">
            <a href="#book" class="inline-block btn" data-aos="zoom-in" data-aos-delay="100" data-i18n="btnBookCall">Book a Consultation</a>
            <a href="https://wa.me/REPLACE_NUMBER" class="inline-block px-5 py-3 rounded-md border border-brand-blue-100 text-black hover:bg-brand-blue-100" data-aos="zoom-in" data-aos-delay="150" data-i18n="btnChatWhatsApp">Chat on WhatsApp</a>
          </div>
        </div>
      </div>

      <div class="flex items-center justify-center">
        <div class="card-3d rounded-xl overflow-hidden shadow-lg max-w-[420px] w-full" data-aos="fade-left">
          <a href="{{ asset('assets/portrait.jpg') }}" target="_blank" rel="noopener" class="block">
            <img alt="Vivek Kumar portrait" src="{{ asset('assets/portrait.jpg') }}" class="w-full h-[420px] object-cover block" />
          </a>
        </div>
      </div>
    </section>

    <section id="services" class="mt-12 grid md:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="50">
      <a href="{{ url('/services/relationship-coaching') }}" aria-label="Relationship Coaching" class="block">
        <article class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center gap-3">
            <div class="text-2xl text-brand-blue"><i class="fas fa-heart"></i></div>
            <h3 class="font-semibold" data-i18n="service1Title">Relationship Coaching</h3>
          </div>
          <p class="mt-2 text-sm text-gray-600" data-i18n="service1Text">Understand emotional patterns and build healthier connections.</p>
        </article>
      </a>

      <a href="{{ url('/services/couple-dynamics-coaching') }}" aria-label="Couple Dynamics Coaching" class="block">
        <article class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center gap-3">
            <div class="text-2xl text-brand-blue"><i class="fas fa-users"></i></div>
            <h3 class="font-semibold" data-i18n="service2Title">Couple Dynamics Coaching</h3>
          </div>
          <p class="mt-2 text-sm text-gray-600" data-i18n="service2Text">Decode interaction patterns and shift toward teamwork.</p>
        </article>
      </a>

      <a href="{{ url('/services/breakup-separation-support') }}" aria-label="Breakup & Separation Support" class="block">
        <article class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center gap-3">
            <div class="text-2xl text-brand-blue"><i class="fas fa-heart-crack"></i></div>
            <h3 class="font-semibold" data-i18n="service3Title">Breakup & Separation Support</h3>
          </div>
          <p class="mt-2 text-sm text-gray-600" data-i18n="service3Text">Process grief, rebuild clarity, emotional strength, and self-worth.</p>
        </article>
      </a>

      <a href="{{ url('/services/separation-coaching') }}" aria-label="Separation Coaching" class="block">
        <article class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center gap-3">
            <div class="text-2xl text-brand-blue"><i class="fas fa-balance-scale"></i></div>
            <h3 class="font-semibold" data-i18n="service4Title">Separation Coaching</h3>
          </div>
          <p class="mt-2 text-sm text-gray-600" data-i18n="service4Text">Guide conscious separation with dignity and clarity.</p>
        </article>
      </a>

      <a href="{{ url('/services/emotional-intelligence-coaching') }}" aria-label="Emotional Intelligence Coaching" class="block">
        <article class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center gap-3">
            <div class="text-2xl text-brand-blue"><i class="fas fa-brain"></i></div>
            <h3 class="font-semibold" data-i18n="service5Title">Emotional Intelligence Coaching</h3>
          </div>
          <p class="mt-2 text-sm text-gray-600" data-i18n="service5Text">Build self-awareness, regulation, and emotional clarity.</p>
        </article>
      </a>

      <a href="{{ url('/services/workshops-talks') }}" aria-label="Workshops & Talks" class="block">
        <article class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center gap-3">
            <div class="text-2xl text-brand-blue"><i class="fas fa-microphone"></i></div>
            <h3 class="font-semibold" data-i18n="service6Title">Workshops & Talks</h3>
          </div>
          <p class="mt-2 text-sm text-gray-600" data-i18n="service6Text">Public sessions on EI, conscious relationships and leadership.</p>
        </article>
      </a>
    </section>

    <!-- Expertise / Intro section (expanded from mm/index.html) -->
    <section id="expertise" class="mt-12 bg-white p-6 rounded-lg shadow" data-aos="fade-up">
      <h2 class="text-2xl font-bold" data-i18n="expertiseHeading">My Expertise</h2>
      <p class="mt-3 text-gray-600" data-i18n="expertiseIntro">I bring practical tools, deep listening, and trauma-informed care to help people and couples move from reactivity to clarity and secure connection.</p>
      <ul class="mt-4 grid sm:grid-cols-2 gap-2 list-disc list-inside text-gray-700">
        <li data-i18n="expertise1">Emotional Intelligence Coaching</li>
        <li data-i18n="expertise2">Relationship Pattern Analysis</li>
        <li data-i18n="expertise3">Conflict De-escalation & Communication Skills</li>
        <li data-i18n="expertise4">Breakup & Separation Support</li>
        <li data-i18n="expertise5">Trauma-informed Relational Work</li>
        <li data-i18n="expertise6">Public Speaking & Transformational Workshops</li>
      </ul>
    </section>

    <section id="how" class="mt-12" data-aos="fade-up">
      <h2 class="text-2xl font-bold" data-i18n="sectionHeading">How Coaching Helps</h2>
      <div class="mt-4 grid sm:grid-cols-2 gap-6">
        <article class="bg-white p-6 rounded shadow flex gap-4 items-start" data-aos="fade-up" data-aos-delay="80">
          <div class="text-3xl text-brand-blue"><i class="fas fa-heart" aria-hidden="true"></i></div>
          <div>
            <h4 class="font-semibold" data-i18n="benefit1Title">Build emotional self-awareness</h4>
            <p class="mt-2 text-sm text-gray-600" data-i18n="benefit1Text">Understand your emotional patterns and responses to create deeper self-knowledge.</p>
          </div>
        </article>

        <article class="bg-white p-6 rounded shadow flex gap-4 items-start" data-aos="fade-up" data-aos-delay="120">
          <div class="text-3xl text-brand-blue"><i class="fas fa-balance-scale" aria-hidden="true"></i></div>
          <div>
            <h4 class="font-semibold" data-i18n="benefit2Title">Regulate emotions instead of reacting impulsively</h4>
            <p class="mt-2 text-sm text-gray-600" data-i18n="benefit2Text">Develop tools to pause, reflect, and respond with intention rather than react from triggers.</p>
          </div>
        </article>

        <article class="bg-white p-6 rounded shadow flex gap-4 items-start" data-aos="fade-up" data-aos-delay="160">
          <div class="text-3xl text-brand-blue"><i class="fas fa-comments" aria-hidden="true"></i></div>
          <div>
            <h4 class="font-semibold" data-i18n="benefit3Title">Communicate with clarity and emotional maturity</h4>
            <p class="mt-2 text-sm text-gray-600" data-i18n="benefit3Text">Express your needs and feelings in ways that foster understanding and connection.</p>
          </div>
        </article>

        <article class="bg-white p-6 rounded shadow flex gap-4 items-start" data-aos="fade-up" data-aos-delay="200">
          <div class="text-3xl text-brand-blue"><i class="fas fa-hands-helping" aria-hidden="true"></i></div>
          <div>
            <h4 class="font-semibold" data-i18n="benefit4Title">Heal emotional wounds and rebuild trust</h4>
            <p class="mt-2 text-sm text-gray-600" data-i18n="benefit4Text">Work through past hurts to create a foundation of safety and trust in relationships.</p>
          </div>
        </article>
 
        <article class="bg-white p-6 rounded shadow flex gap-4 items-start" data-aos="fade-up" data-aos-delay="240">
          <div class="text-3xl text-brand-blue"><i class="fas fa-link" aria-hidden="true"></i></div>
          <div>
            <h4 class="font-semibold" data-i18n="benefit5Title">Create secure and lasting connections</h4>
            <p class="mt-2 text-sm text-gray-600" data-i18n="benefit5Text">Build relationships based on emotional security, authenticity, and mutual respect.</p>
          </div>
        </article>

        <article class="bg-white p-6 rounded shadow flex gap-4 items-start" data-aos="fade-up" data-aos-delay="280">
          <div class="text-3xl text-brand-blue"><i class="fas fa-handshake" aria-hidden="true"></i></div>
          <div>
            <h4 class="font-semibold" data-i18n="benefit6Title">Process grief and rebuild self-worth</h4>
            <p class="mt-2 text-sm text-gray-600" data-i18n="benefit6Text">Support through separation and loss, regain clarity and self-worth.</p>
          </div>
        </article>
      </div>
    </section>

    <section id="about" class="mt-12 grid lg:grid-cols-2 gap-8 items-center relative" data-aos="fade-up">
      <!-- Decorative backdrop -->
      <div class="absolute inset-0 -mx-4 lg:-mx-12 rounded-3xl bg-gradient-to-r from-brand-blue-100/40 to-brand-violet-100/20 filter blur-xl opacity-90 pointer-events-none -z-10"></div>
      <div>
        <h2 class="text-2xl font-bold" data-i18n="aboutHeading">Vivek For You</h2>
        <p class="mt-3 text-gray-600" data-i18n="aboutText1">Vivek Kumar brings practical tools, deep listening, and trauma-informed care to help people and couples move from reactivity to clarity and secure connection.</p>
      <div class="mt-4">
          <a href="#book" class="inline-block btn">Start your journey — Book Now</a>
        </div>
      </div>
      <div class="flex items-center justify-center">
        <div class="space-y-4">
          <div class="bg-white rounded-lg p-6 shadow-lg max-w-sm card-3d" data-aos="zoom-in">
            <div class="flex items-start gap-4">
              <div class="text-3xl text-brand-blue"><i class="fas fa-chalkboard-teacher"></i></div>
              <div>
                <h4 class="font-semibold" data-i18n="workshopTitle">Workshops & Talks</h4>
                <p class="mt-2 text-sm text-gray-600" data-i18n="workshopText">Public sessions on Emotional Intelligence, conscious relationships and leadership awareness.</p>
                  <div class="mt-4">
                  <a href="#workshops" class="inline-block btn" data-i18n="workshopBtn">View Workshops</a>
                </div>
              </div>
            </div>
          </div>

          <div class="relative w-full max-w-sm">
            <div class="absolute -left-6 -top-6 w-24 h-24 bg-brand-blue-100 rounded-full opacity-60 blur-md"></div>
            <div class="bg-white rounded-lg p-4 shadow-sm flex items-center gap-3" data-aos="fade-up" data-aos-delay="80">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-brand-blue-100 text-brand-blue"><i class="fas fa-award"></i></div>
              <div>
                <div class="text-sm font-semibold" data-i18n="credTitle">Trauma-informed Care</div>
                <div class="text-xs text-gray-500" data-i18n="credText">Practical tools, deep listening, and applied EI.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('partials.service-testimonials')

  </main>
@endsection

