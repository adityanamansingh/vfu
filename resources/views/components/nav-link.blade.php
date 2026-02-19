@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-brand-violet text-sm font-medium leading-5 text-brand-violet focus:outline-none focus:border-brand-violet transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-black hover:text-brand-violet hover:border-brand-blue-100 focus:outline-none focus:text-brand-violet focus:border-brand-blue-100 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
