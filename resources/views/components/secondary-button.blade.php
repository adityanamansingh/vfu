<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 rounded-md font-semibold text-xs text-brand-blue border border-brand-blue-100 bg-white hover:bg-brand-blue-100 focus:outline-none focus:ring-2 focus:ring-brand-violet focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
