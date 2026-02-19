<div id="bookingModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4">
  <div class="absolute inset-0 bg-black/40"></div>
  <div class="relative max-w-2xl w-full bg-white rounded-lg shadow-lg p-6">
    <h3 id="bookingTitle" class="text-xl font-semibold mb-4" data-i18n="bookingTitle">Book a Discovery Call</h3>
    <form id="bookingForm">
      <div class="grid sm:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm text-gray-700" for="bookingName" data-i18n="bookingNameLabel">Full Name</label>
          <input id="bookingName" name="name" class="mt-1 block w-full border rounded p-2" required />
        </div>
        <div>
          <label class="block text-sm text-gray-700" for="bookingEmail" data-i18n="bookingEmailLabel">Email Address</label>
          <input id="bookingEmail" name="email" type="email" class="mt-1 block w-full border rounded p-2" required />
        </div>
        <div>
          <label class="block text-sm text-gray-700" for="bookingPhone" data-i18n="bookingPhoneLabel">Phone Number</label>
          <input id="bookingPhone" name="phone" class="mt-1 block w-full border rounded p-2" required />
        </div>
        <div>
          <label class="block text-sm text-gray-700" for="bookingDate" data-i18n="bookingDateLabel">Select Date</label>
          <input id="bookingDate" name="date" type="date" class="mt-1 block w-full border rounded p-2" required />
        </div>
      </div>
      <div class="mt-4">
        <label class="block text-sm text-gray-700" data-i18n="bookingMessageLabel">Additional Notes (Optional)</label>
        <textarea id="bookingMessage" name="message" class="mt-1 block w-full border rounded p-2" rows="4"></textarea>
      </div>
      <div class="mt-4 grid sm:grid-cols-2 gap-4">
        <div class="flex items-center gap-3">
          <input type="checkbox" id="bookingWhatsApp" name="whatsapp" class="h-4 w-4" />
          <label for="bookingWhatsApp" class="text-sm text-gray-700">Contact me on WhatsApp</label>
        </div>
        <div>
          <label class="block text-sm text-gray-700" for="preferred_time">Preferred time (optional)</label>
          <input id="preferred_time" name="preferred_time" placeholder="e.g. Weekdays after 6pm" class="mt-1 block w-full border rounded p-2" />
        </div>
      </div>
      <!-- Tracking hidden fields -->
      <input type="hidden" name="page_link" id="booking_page_link" value="">
      <input type="hidden" name="button_text" id="booking_button_text" value="">
      <input type="hidden" name="section_id" id="booking_section_id" value="">
      <!-- UTM / referrer tracking -->
      <input type="hidden" name="utm_source" id="booking_utm_source" value="">
      <input type="hidden" name="utm_medium" id="booking_utm_medium" value="">
      <input type="hidden" name="utm_campaign" id="booking_utm_campaign" value="">
      <input type="hidden" name="utm_term" id="booking_utm_term" value="">
      <input type="hidden" name="utm_content" id="booking_utm_content" value="">
      <input type="hidden" name="referrer" id="booking_referrer" value="">
      <div class="mt-4 grid sm:grid-cols-2 gap-4 items-center">
        <div>
          <label class="block text-sm text-gray-700">Captcha: <span id="bookingCaptchaQuestion" class="font-medium"></span></label>
        </div>
        <div>
          <input id="captchaAnswer" name="captcha_answer" type="text" class="mt-1 block w-full border rounded p-2" placeholder="Your answer" required />
        </div>
      </div>
      <div class="mt-4 flex items-center gap-3">
          <button type="button" onclick="document.getElementById('bookingModal').classList.add('hidden')" class="px-4 py-2 rounded border border-gray-200" data-i18n="bookingCancel">Cancel</button>
        <button type="submit" class="px-4 py-2 btn" data-i18n="bookingSubmit">Book Now</button>
      </div>
      <div id="bookingSuccess" class="mt-3 hidden text-green-600" data-i18n="bookingSuccess">Your discovery call has been booked successfully!</div>
      <div id="bookingError" class="mt-3 hidden text-red-600" data-i18n="bookingError">An error occurred. Please try again.</div>
    </form>
  </div>
</div>

