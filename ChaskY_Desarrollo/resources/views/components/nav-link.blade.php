@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 py-2 border-b-2 border-[#f4bc21] text-sm font-medium text-[#f4bc21] focus:outline-none focus:border-[#f4bc21] transition duration-150 ease-in-out'
            : 'inline-flex items-center px-3 py-2 border-b-2 border-transparent text-sm font-medium text-gray-700 hover:text-[#701516] hover:border-[#701516]/30 focus:outline-none focus:text-[#701516] focus:border-[#701516]/30 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
