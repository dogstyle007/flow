@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
         Old Vandals Association
        @endcomponent
    @endslot
{{-- Body --}}
    <!--This is our main message {{ $user }}-->

    Welcome to Old Vandals Association {{$user['fullname']}}
    
    Your registration will be confirmed by the admin.

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

        @component('mail::button', ['url' => config('app.loginurl'), 'color' => 'green'])
            Login to your dashboard
        @endcomponent

        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. Super FOOTER!
        @endcomponent
    @endslot
@endcomponent