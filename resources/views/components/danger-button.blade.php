<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-brand-pink border border-transparent hover:bg-[#c8006f] focus:outline-none focus:ring-2 focus:ring-[#c8006f] focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
