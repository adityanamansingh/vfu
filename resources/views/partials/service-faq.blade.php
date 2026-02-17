@props(['heading_key' => 'faqHeading'])

<section class="mt-8 bg-white rounded-lg shadow p-6">
  <h3 class="text-xl font-semibold mb-4" data-i18n="{{ $heading_key }}">FAQ</h3>
  <div class="space-y-4 text-gray-700">
    <div>
      <div class="font-semibold" data-i18n="faq1_q">How long are sessions?</div>
      <div class="text-sm" data-i18n="faq1_a">Sessions are typically 50 minutes; packages can be scheduled weekly or fortnightly.</div>
    </div>
    <div>
      <div class="font-semibold" data-i18n="faq2_q">Do you offer couples sessions online?</div>
      <div class="text-sm" data-i18n="faq2_a">Yes — I offer both online and in-person options depending on location and preference.</div>
    </div>
    <div>
      <div class="font-semibold" data-i18n="faq3_q">Is therapy different from coaching?</div>
      <div class="text-sm" data-i18n="faq3_a">Coaching focuses on practical tools and goals; we work within your current capacities while attending to safety and trauma-informed practices.</div>
    </div>
  </div>
</section>

