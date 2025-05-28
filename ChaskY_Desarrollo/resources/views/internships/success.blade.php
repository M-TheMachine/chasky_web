@extends('layouts.app')

@section('content')
    <section class="min-h-screen bg-gray-50 flex items-center">
        <div class="container mx-auto px-4 py-16">
            <div class="max-w-4xl mx-auto text-center">
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="mb-8">
                        <svg class="w-20 h-20 text-green-500 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h1 class="text-3xl font-bold text-[#701516] mb-4">{{ __('internships.success.title') }}</h1>
                        <p class="text-gray-600 text-lg mb-8">{{ __('internships.success.message') }}</p>
                    </div>

                    <div class="text-left">
                        <h2 class="text-xl font-semibold mb-4">{{ __('internships.success.what_next') }}</h2>
                        <ul class="space-y-4">
                            @foreach(__('internships.success.steps') as $step)
                                <li class="flex items-start">
                                    <span class="text-[#701516] mr-2">•</span>
                                    <span class="text-gray-600">{{ $step }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mt-12">
                        <a href="{{ route('carreras') }}" class="inline-block bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-3 px-8 rounded-full transition duration-300">
                            {{ __('general.back_to_careers') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
