@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => url('')])
        <img src="{{asset('img/logo/dummy.png')}}" alt="{{ __('Pemerataan Pemberdayaan UMKM') }}" />
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ __('PPU') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
