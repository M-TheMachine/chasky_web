@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-[#f4bc21] text-start text-base font-medium text-[#f4bc21] bg-[#701516]/50 focus:outline-none focus:text-[#f4bc21] focus:bg-[#701516]/50 focus:border-[#f4bc21] transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-white hover:text-[#f4bc21] hover:bg-[#701516]/30 hover:border-[#f4bc21]/50 focus:outline-none focus:text-[#f4bc21] focus:bg-[#701516]/30 focus:border-[#f4bc21]/50 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
