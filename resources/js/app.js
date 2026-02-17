import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
// AOS (Animate On Scroll) — simple scroll animations
import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        once: true,
        duration: 800,
        easing: 'ease-in-out'
    });
});
// Language runtime (client-side). Exposes window.VFULang.
import './lang';
// Open booking modal when clicking links to #book and trigger captcha load
document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('bookingModal');
    const bookingTitleEl = document.getElementById('bookingTitle');
    document.querySelectorAll('a[href="#book"]').forEach(a => {
        a.addEventListener('click', (e) => {
            e.preventDefault();
            // set modal title from data-booking-title or button text
            try {
                const titleText = a.getAttribute('data-booking-title') || a.textContent.trim();
                if (bookingTitleEl && titleText) {
                    bookingTitleEl.textContent = titleText;
                    // remove any translation key to ensure explicit text shown
                    bookingTitleEl.removeAttribute('data-i18n');
                }
                // set tracking hidden fields if present
                try {
                    const pageInput = document.getElementById('booking_page_link');
                    const buttonInput = document.getElementById('booking_button_text');
                    const sectionInput = document.getElementById('booking_section_id');
                    if (pageInput) pageInput.value = window.location.href;
                    if (buttonInput) buttonInput.value = titleText || '';
                    const sectionId = a.getAttribute('data-section-id') || a.getAttribute('data-section') || (a.hash ? a.hash.replace('#','') : '');
                    if (sectionInput) sectionInput.value = sectionId || '';
                } catch (e) {
                    // ignore
                }
                // set UTM and referrer fields (persist UTM in sessionStorage)
                try {
                    const utmKeys = ['source','medium','campaign','term','content'];
                    const params = new URLSearchParams(window.location.search);
                    utmKeys.forEach(k => {
                        const key = `utm_${k}`;
                        const paramVal = params.get(key);
                        const storageKey = `vfu_${key}`;
                        if (paramVal) {
                            try { sessionStorage.setItem(storageKey, paramVal); } catch(e){}
                        }
                        const value = paramVal || sessionStorage.getItem(`vfu_${key}`) || '';
                        const input = document.getElementById(`booking_utm_${k}`);
                        if (input) input.value = value;
                    });
                    const refInput = document.getElementById('booking_referrer');
                    if (refInput) refInput.value = document.referrer || '';
                } catch (e) {
                    // ignore
                }
            } catch (err) {
                // ignore
            }
            if (modal) modal.classList.remove('hidden');
            // dispatch event so captcha loader can refresh
            document.dispatchEvent(new Event('booking:open'));
        });
    });
});
// Booking form handling (discovery call)
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('bookingForm');
    const modal = document.getElementById('bookingModal');
    const captchaEl = document.getElementById('bookingCaptchaQuestion');

    async function loadCaptcha() {
        try {
            const res = await fetch('/booking/captcha');
            if (!res.ok) return;
            const json = await res.json();
            if (captchaEl) captchaEl.textContent = `${json.a} + ${json.b} = ?`;
        } catch (e) {
            // ignore
        }
    }

    if (form) {
        loadCaptcha();
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const data = new FormData(form);
            const payload = {};
            data.forEach((v, k) => payload[k] = v);
            // checkbox handling
            payload.whatsapp = !!form.querySelector('[name=whatsapp]') && form.querySelector('[name=whatsapp]').checked;

            const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            try {
                const res = await fetch('/book-discovery', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': token,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(payload)
                });
                const json = await res.json();
                if (res.ok) {
                    document.getElementById('bookingSuccess').classList.remove('hidden');
                    document.getElementById('bookingError').classList.add('hidden');
                    form.reset();
                    await loadCaptcha();
                    // hide modal after short delay
                    setTimeout(() => {
                        if (modal) modal.classList.add('hidden');
                    }, 1200);
                } else {
                    document.getElementById('bookingError').textContent = json.message || 'Submission failed.';
                    document.getElementById('bookingError').classList.remove('hidden');
                    document.getElementById('bookingSuccess').classList.add('hidden');
                    await loadCaptcha();
                }
            } catch (err) {
                document.getElementById('bookingError').textContent = 'Submission failed.';
                document.getElementById('bookingError').classList.remove('hidden');
                document.getElementById('bookingSuccess').classList.add('hidden');
            }
        });
    }
});

// Language switch UI fallback (works even if Alpine fails)
document.addEventListener('DOMContentLoaded', () => {
    const switcher = document.getElementById('vfu-lang-switch');
    if (!switcher) return;

    function updateLangUI(lang) {
        switcher.querySelectorAll('button[data-lang]').forEach(btn => {
            if (btn.dataset.lang === lang) {
                btn.classList.add('bg-gradient-to-br','from-blue-500','to-indigo-600','text-white');
                btn.classList.remove('text-gray-700');
                btn.setAttribute('aria-pressed','true');
            } else {
                btn.classList.remove('bg-gradient-to-br','from-blue-500','to-indigo-600','text-white');
                btn.classList.add('text-gray-700');
                btn.setAttribute('aria-pressed','false');
            }
        });
    }

    switcher.querySelectorAll('button[data-lang]').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const lang = btn.dataset.lang;
            try { localStorage.setItem('vfu_lang', lang); } catch(e) {}
            if (window.VFULang && typeof window.VFULang.set === 'function') {
                window.VFULang.set(lang);
            } else {
                updateLangUI(lang);
            }
        });
    });

    // initialize UI based on preferred lang
    try {
        const preferred = (window.VFULang && window.VFULang.init) ? (new URLSearchParams(window.location.search).get('lang') || localStorage.getItem('vfu_lang') || navigator.language.split('-')[0]) : (localStorage.getItem('vfu_lang') || 'en');
        updateLangUI(preferred || 'en');
    } catch (e) {
        updateLangUI('en');
    }
});