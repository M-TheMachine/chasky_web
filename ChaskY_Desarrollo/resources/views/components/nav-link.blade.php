@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-[#f4bc21] text-sm font-medium leading-5 text-[#f4bc21] focus:outline-none focus:border-[#f4bc21] transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-[#f4bc21] hover:border-[#f4bc21]/50 focus:outline-none focus:text-[#f4bc21] focus:border-[#f4bc21]/50 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
