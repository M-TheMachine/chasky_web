<div class="fixed bottom-0 right-0 bg-gray-800 text-white px-3 py-1 text-xs rounded-tl-md z-50" 
     style="font-family: monospace; max-width: 300px; overflow: hidden; text-overflow: ellipsis;">
    <p>
        <span style="color: #f59e0b; font-weight: bold;">Cookie:</span> 
        {{ request()->cookie('locale') ?? 'not set' }}
    </p>
    <p>
        <span style="color: #10b981; font-weight: bold;">Session:</span> 
        {{ session('locale') ?? 'not set' }}
    </p>
    <p>
        <span style="color: #3b82f6; font-weight: bold;">App:</span> 
        {{ app()->getLocale() }}
    </p>
    <p>
        <span style="color: #a78bfa; font-weight: bold;">Config:</span> 
        {{ config('app.locale') }}
    </p>
    <p>
        <span style="color: #ec4899; font-weight: bold;">HTML:</span> 
        {{ request()->cookie('locale') ?? session('locale', app()->getLocale()) }}
    </p>
    <p>
        <span style="color: #ef4444; font-weight: bold;">Test:</span> 
        {{ __('home.nav.home') }} / {{ __('home.nav.services') }}
    </p>
    <hr style="margin: 4px 0; border-color: #4b5563;">
    <div class="flex space-x-2">
        <a href="{{ route('language.switch', 'es') }}" style="color: #818cf8; text-decoration: underline; margin-right: 8px;">Set ES</a>
        <a href="{{ route('language.switch', 'en') }}" style="color: #818cf8; text-decoration: underline;">Set EN</a>
    </div>
</div>
