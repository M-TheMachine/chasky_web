@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-3 border-l-4 border-[#701516] text-[#701516] font-medium bg-[#701516]/5 focus:outline-none transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-3 border-l-4 border-transparent text-gray-700 font-medium hover:text-[#701516] hover:bg-gray-50 hover:border-[#701516]/30 focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
