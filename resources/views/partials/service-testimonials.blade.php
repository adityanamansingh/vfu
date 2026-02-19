<section class="mt-8">
  <h3 class="text-xl font-semibold mb-4 text-center" data-i18n="testimonialsHeading">Testimonials</h3>

  <div class="relative">
    <div class="testimonials-slider overflow-hidden px-4 lg:px-0">
      <div class="slides flex transition-transform duration-500 ease-in-out items-stretch">
        <!-- Slide 1 (two testimonials) -->
        <div class="slide min-w-full px-2 sm:px-4 lg:px-6 py-4">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-8">
            <blockquote class="bg-white p-6 sm:p-8 rounded-lg shadow-lg h-full flex flex-col justify-between">
              <div>
                <div class="text-4xl text-brand-blue-100 leading-none">“</div>
                <p class="mt-2 text-gray-700 italic">Vivek helped me see patterns I couldn't on my own. Our relationship feels safer and more honest.</p>
              </div>
              <div class="mt-4 font-semibold text-sm text-gray-900">— S.</div>
            </blockquote>

            <blockquote class="bg-white p-6 sm:p-8 rounded-lg shadow-lg h-full flex flex-col justify-between">
              <div>
                <div class="text-4xl text-brand-blue-100 leading-none">“</div>
                <p class="mt-2 text-gray-700 italic">The tools I learned helped me pause and respond instead of reacting — it changed how I relate to my partner.</p>
              </div>
              <div class="mt-4 font-semibold text-sm text-gray-900">— R.</div>
            </blockquote>
          </div>
        </div>

        <!-- Slide 2 (two testimonials) -->
        <div class="slide min-w-full px-2 sm:px-4 lg:px-6 py-4">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-8">
            <blockquote class="bg-white p-6 sm:p-8 rounded-lg shadow-lg h-full flex flex-col justify-between">
              <div>
                <div class="text-4xl text-brand-blue-100 leading-none">“</div>
                <p class="mt-2 text-gray-700 italic">Vivek held space with such calm and practical guidance — I found clarity after our sessions.</p>
              </div>
              <div class="mt-4 font-semibold text-sm text-gray-900">— A.</div>
            </blockquote>

            <blockquote class="bg-white p-6 sm:p-8 rounded-lg shadow-lg h-full flex flex-col justify-between">
              <div>
                <div class="text-4xl text-brand-blue-100 leading-none">“</div>
                <p class="mt-2 text-gray-700 italic">Practical, compassionate, and transformative work — highly recommended.</p>
              </div>
              <div class="mt-4 font-semibold text-sm text-gray-900">— M.</div>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <div class="absolute top-1/2 -translate-y-1/2 left-2 flex items-center gap-2 z-20">
      <button class="slider-prev inline-flex items-center justify-center w-9 h-9 rounded-full border border-brand-blue bg-white text-brand-blue hover:bg-brand-blue-100 shadow-sm" aria-label="Previous testimonials">
        ‹
      </button>
    </div>
    <div class="absolute top-1/2 -translate-y-1/2 right-2 flex items-center gap-2 z-20">
      <button class="slider-next inline-flex items-center justify-center w-9 h-9 rounded-full border border-brand-blue bg-white text-brand-blue hover:bg-brand-blue-100 shadow-sm" aria-label="Next testimonials">
        ›
      </button>
    </div>
  </div>
  <!-- Dots / pagination -->
  <div class="mt-4 flex justify-center gap-2">
    <div class="testimonials-dots inline-flex items-center gap-2" role="tablist" aria-label="Testimonials pagination"></div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.querySelectorAll('.testimonials-slider').forEach(function (slider) {
        const slidesWrap = slider.querySelector('.slides');
        const slides = slidesWrap.querySelectorAll('.slide');
        const total = slides.length;
        let index = 0;

        const prevBtn = slider.parentElement.querySelector('.slider-prev');
        const nextBtn = slider.parentElement.querySelector('.slider-next');
        const dotsContainer = slider.parentElement.querySelector('.testimonials-dots');

        // create dots
        if (dotsContainer) {
          for (let i = 0; i < total; i++) {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'w-2 h-2 rounded-full bg-gray-300 focus:outline-none';
            btn.setAttribute('aria-label', 'Show testimonials page ' + (i + 1));
            btn.dataset.index = i;
            dotsContainer.appendChild(btn);
          }
        }

        function show(i) {
          index = (i + total) % total;
          slidesWrap.style.transform = 'translateX(-' + (index * 100) + '%)';
          // update dots
          if (dotsContainer) {
            Array.from(dotsContainer.children).forEach((d, idx) => {
              d.classList.toggle('bg-brand-violet', idx === index);
              d.classList.toggle('bg-gray-300', idx !== index);
            });
          }
          // set active class for slide animations
          slides.forEach(s => s.classList.remove('is-active'));
          if (slides[index]) slides[index].classList.add('is-active');
        }

        if (prevBtn) prevBtn.addEventListener('click', function () { show(index - 1); });
        if (nextBtn) nextBtn.addEventListener('click', function () { show(index + 1); });

        // dot clicks
        if (dotsContainer) {
          dotsContainer.addEventListener('click', function (e) {
            const b = e.target.closest('button');
            if (!b) return;
            const i = parseInt(b.dataset.index, 10);
            if (!isNaN(i)) show(i);
          });
        }

        // keyboard support
        slider.addEventListener('keydown', function (e) {
          if (e.key === 'ArrowLeft') show(index - 1);
          if (e.key === 'ArrowRight') show(index + 1);
        });

        // ensure slides stretch to same height on load/resize
        function matchHeights() {
          const blocks = slider.querySelectorAll('blockquote');
          let max = 0;
          blocks.forEach(b => { b.style.minHeight = ''; max = Math.max(max, b.offsetHeight); });
          blocks.forEach(b => { b.style.minHeight = max + 'px'; });
        }
        window.addEventListener('load', matchHeights);
        window.addEventListener('resize', matchHeights);
        matchHeights();
        // activate first dot
        show(0);
      });
    });
  </script>
</section>

