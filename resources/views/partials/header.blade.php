<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 shadow-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      <div class="flex items-center gap-4">
        <a href="{{ url('/') }}" class="flex items-center gap-3">
          <img src="{{ asset('assets/icon.svg') }}" alt="Vivek For You logo" width="40" height="40" class="w-10 h-10 rounded-lg object-contain" />
          <div>
            <div class="text-lg font-semibold" data-i18n="brandName">Vivek For You</div>
            <div class="text-xs text-gray-500" data-i18n="subtitle">Emotional Intelligence & Relationship Coaching</div>
          </div>
        </a>

        <!-- desktop nav links removed (branding only) -->
      </div>

      <div class="flex items-center gap-3">
        <div id="vfu-lang-switch" x-data="{ lang: (localStorage.getItem('vfu_lang') || new URLSearchParams(window.location.search).get('lang') || 'en') }" class="flex items-center" aria-hidden="false">
          <div class="relative inline-flex p-1 bg-white rounded-full shadow-sm" role="tablist" aria-label="Language switch">
        <button
              data-lang="en"
              @click="lang = 'en'; localStorage.setItem('vfu_lang','en'); window.VFULang && window.VFULang.set('en')"
              :class="lang==='en' ? 'bg-gradient-to-br from-brand-blue to-brand-violet text-white' : 'text-black'"
              class="px-3 py-1 rounded-full text-sm focus:outline-none transition"
              role="tab"
              :aria-pressed="lang==='en'">
              EN
            </button>

            <button
              data-lang="hi"
              @click="lang = 'hi'; localStorage.setItem('vfu_lang','hi'); window.VFULang && window.VFULang.set('hi')"
            :class="lang==='hi' ? 'bg-gradient-to-br from-brand-blue to-brand-violet text-white' : 'text-black'"
              class="ml-1 px-3 py-1 rounded-full text-sm focus:outline-none transition"
              role="tab"
              :aria-pressed="lang==='hi'">
              हिं
            </button>
          </div>
        </div>

        <a href="https://wa.me/REPLACE_NUMBER" class="hidden sm:inline-flex items-center justify-center p-2 rounded-md border border-brand-blue text-brand-blue hover:bg-brand-blue-100" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
          <i class="fab fa-whatsapp" aria-hidden="true"></i>
          <span class="sr-only">WhatsApp</span>
        </a>
        <a href="#book" class="hidden sm:inline-flex items-center text-sm px-3 py-2 rounded-md btn bg-brand-violet">Book a Consultation</a>

      </div>
    </div>
  </div>

</nav>

 
